<?php
if (isset($_POST)) {

    $newJsonString = json_encode($_POST);
    file_put_contents('DATA.json', $newJsonString);
    echo $newJsonString;
}

header("Location: /");
die();
