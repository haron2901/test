<?php
include __DIR__.'/db.php';
if(!empty($_FILES['file'])){
    $file = $_FILES['file'];
    $name = $file['name'];
    $pathFile = __DIR__.'/img/'.$name;


    if(!move_uploaded_file($file['tmp_name'], $pathFile)){
        echo 'не удалось';
    }
    $data = $link->prepare("INSERT INTO `photos` (`path`) VALUES (?)");
    $data->execute([$name]);
}
?>