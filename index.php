<?php
include_once './lib/ShipCode.php';

if ($_GET['mode'] == 'shipSearch') {
    include_once './lib/Snoopy_lib.php';
    include_once './lib/NaverShip.php';
    $naver    = new NaverShip();
    $shipInfo = $naver->getShipInfo($_GET['shipCode'], $_GET['shipNum']);
}

$shipCodeList = ShipCode::shipCodeList();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="/js/jQuery v3.5.1.min.js"></script>
    <title>Naver Ship Tracking Crawling</title>
</head>
<style>
    table, td {
        border: 1px solid black;
    }
</style>
<script>
    $(function () {
        $('#shipNum').on('keyup', function () {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });

        $('#searchBtn').on('click', function () {
            var shipCode = $('#shipCode').val();
            var shipNum = $('#shipNum').val();

            if (!shipCode || !shipNum) {
                alert('택배사 및 송장번호를 입력해주세요.');
                return false;
            }

            window.location.href = '?mode=shipSearch&shipCode=' + shipCode + '&shipNum=' + shipNum;
        });
    });
</script>
<body>
<div>
    <select id="shipCode">
        <option value="">택배사를 선택해주세요.</option>
        <?php
        foreach ($shipCodeList as $listRow) {
            echo '<option value="' . $listRow['code'] . '" ' . ($_GET['shipCode'] == $listRow['code'] ? 'selected' : '') . '>'
                . $listRow['name'] .
                '</option>';
        }
        ?>
    </select>
    <input type="text" id="shipNum" value="<?= $_GET['shipNum'] ?>">
    <input type="button" value="조회" id="searchBtn">
</div>
<div style="margin-top: 10px;">
    <table>
        <?php
        if (array_key_exists('msg', $shipInfo)) {
            echo '<tr><td>'.$shipInfo['msg'].'</td></tr>';
        } elseif (!empty($shipInfo)) { ?>
            <tr>
                <td>위치</td>
                <td>상태</td>
                <td>시간</td>
            </tr>
            <?php
            foreach ($shipInfo as $infoRow) { ?>
                <tr>
                    <td><?= $infoRow['where'] ?></td>
                    <td><?= $infoRow['kind'] ?></td>
                    <td><?= $infoRow['timeString'] ?></td>
                </tr>
                <?php
            }
        } else {
            echo '<tr><td>조회 정보가없습니다.</td></tr>';
        } ?>
    </table>
</div>
</body>
</html>