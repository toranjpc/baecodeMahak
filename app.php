<?php
if (isset($_POST['productcode_start'])) {
    $newJsonString = json_encode($_POST);
    file_put_contents('DATA.json', $newJsonString);
    // echo $newJsonString;
    header("Location: /");
    die();
} elseif (isset($_POST['ExcelData'])) {
    $newJsonString = json_encode($_POST['ExcelData']);
    file_put_contents('EXCEL.json', $newJsonString);
    // echo json_encode($_POST['ExcelData']);
}
