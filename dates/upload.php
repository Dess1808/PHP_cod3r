<div class="titulo">Upload of files</div>

<?php

print_r($_FILES);
//move_upload_file($tmp, $definePath) 

//form with enctype = "multipart/form-data" para suporta arquivos no formularioS
if (isset($_FILES) && isset($_FILES['files'])){
    //salving path 
    $localPath = '/home/gabriel/Desktop/';

    $nameFile = $_FILES['files']['name'];
    $fullLocalPath = $localPath . $nameFile;
    $pathTemp = $_FILES['files']['tmp_name'];

    var_dump($fullLocalPath);
    var_dump($pathTemp);

    //move_upload to localpath
    if (move_uploaded_file($pathTemp, $fullLocalPath)){
        echo "Success on movimentation" . "<br>";
    } else {
        echo "Error: upload file" . "<br>";
    }

}

?>

<form action="#" method="POST" enctype="multipart/form-data">
    <input type="file" name="files">
    <button>Send</button>
</form>