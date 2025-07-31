<div class="titulo">Upload of files</div>

<?php
error_reporting(E_ALL);

// print_r($_FILES);
//move_upload_file($tmp, $definePath) 

//form with enctype = "multipart/form-data" para suporta arquivos no formularioS
if (isset($_FILES) && isset($_FILES['files'])){
    //salving path 
    //porque no linux não funiona?????
    //oba: possivelmente envolve questão de permissão, porem esta complicada encontrar solução!!!ss
    //pelo jeito e unica pasta que eu tenho acesso, ainda acho que deve ser por permissao
    $localPath = '/var/www/html/PHP_cod3r/dates/uploads/';

    $nameFile = $_FILES['files']['name'];
    $fullLocalPath = $localPath . $nameFile;
    $pathTemp = $_FILES['files']['tmp_name'];

    //move_upload to    localpath
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