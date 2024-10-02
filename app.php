<?php
$path = '.'; // $_SERVER['DOCUMENT_ROOT'];

if (isset($_POST['productcode_start'])) {
    // $path = exo_getglobalvariable('HEPubStorageLocation', '');
    $newJsonString = json_encode($_POST);
    file_put_contents($path . '\DATA.json', $newJsonString);
    // echo $newJsonString;
    header("Location: /");
    die();
} elseif (isset($_POST['ExcelData'])) {
    // $path = exo_getglobalvariable('HEPubStorageLocation', '');
    $newJsonString = json_encode($_POST['ExcelData']);
    file_put_contents($path . '\EXCEL.json', $newJsonString);
    // echo json_encode($_POST['ExcelData']);
}
