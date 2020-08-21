<?php


class NaverShip
{
    private $snoopy;

    private $naverPassKeyURL = 'https://search.naver.com/search.naver?sm=top_hty&fbm=1&ie=utf8&query=%ED%83%9D%EB%B0%B0%EC%A1%B0%ED%9A%8C#';

    private $naverPassCookie = [];
    private $naverPassKey = '';

    public function __construct()
    {
        $this->setSnoopy();
    }

    private function setSnoopy()
    {
        $this->snoopy        = new Snoopy_lib();
        $this->snoopy->agent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.2 Safari/605.1.15';
    }

    private function getNaverCookie()
    {
        $this->setSnoopy();
        $this->snoopy->host = 'search.naver.com';
        $this->snoopy->fetch($this->naverPassKeyURL);
        $cookie = $this->snoopy->setcookies();
        preg_match('/passportKey : "([^"]*)"/', $cookie->results, $passKey);

        $this->naverPassCookie = $cookie->cookies;
        $this->naverPassKey    = $passKey[1];
    }

    /**
     * @param string $getData
     * @return string error
     */
    private function dataErrorCheck($getData)
    {
        $error = '';
        preg_match('/\(({"message.*)\);$/',$getData,$messageArray);
        $errorCheck = json_decode($messageArray[1], true);
        if ($errorCheck['message']['error']) {
            $error = $errorCheck['message']['error'];
        }

        return $error;
    }

    /**
     * @param string $getData
     * @return array
     */
    private function shipTrackingCheck($getData)
    {
        preg_match('/\(({"result.*)\);$/',$getData,$result);
        $tracking = json_decode($result[1],true);

        return $tracking['trackingDetails'];
    }

    /**
     * @param string $shipCode
     * @param string $shipNum
     * @return array
     */
    public function getShipInfo($shipCode, $shipNum)
    {
        if (empty($this->naverPassKey)) {
            $this->getNaverCookie();
        }

        $shipTrackingURL = 'https://m.search.naver.com/p/csearch/ocontent/util/headerjson.nhn?_callback=window.__jindo2_callback._8497&callapi=parceltracking&t_code=' . $shipCode . '&t_invoice=' . $shipNum . '&passportKey=' . $this->naverPassKey;

        $this->setSnoopy();
        $this->snoopy->referer = $this->naverPassKeyURL;
        $this->snoopy->host = 'm.search.naver.com';
        $this->snoopy->cookies = $this->naverPassCookie;

        $getData = $this->snoopy->fetch($shipTrackingURL)->results;

        if ($errorCheck = $this->dataErrorCheck($getData)) {
            return [
                'msg' => $errorCheck
            ];
        }

        return $this->shipTrackingCheck($getData);
    }
}