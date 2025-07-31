<div class="titulo">Download Files</div>

<?php
error_reporting(E_ALL);

//form with enctype = "multipart/form-data" para suporta arquivos no formularioS
if (isset($_FILES) && isset($_FILES['files'])){
    $nameImgs = $_SESSION['files'];

    $localPath = '/var/www/html/PHP_cod3r/dates/uploads/';
    $nameFile = $_FILES['files']['name'];
    $fullLocalPath = $localPath . $nameFile;
    $pathTemp = $_FILES['files']['tmp_name'];

    if (stripos($nameFile, ".jpg") > 3){
        if (move_uploaded_file($pathTemp, $fullLocalPath)){
             echo "Success on movimentation" . "<br>";
            $nameImgs[] = $nameFile;
            $_SESSION['files'] = $nameImgs; //saving names in the session
        } else {
            $erroUpload = "Error: upload failed" . "<br>";
        }
    } else {
        $erroUpload = "Error: Is not JPG or something file not selected" . "<br>";
    }   
}
?>

<form action="#" method="POST" enctype="multipart/form-data">
    <input type="file" name="files">
    <button>Send</button>
</form>

<?php if($erroUpload): ?>
    <div class="error">
        <h2><?= $erroUpload?></h2>
    </div>
<?php endif?>


<ul>
    <?php foreach($nameImgs as $file):?>
        <li>
            <a href="/uploads/<?=$file?>">
                <img src="/uploads/<?=$file?>" alt="img">
            </a>
        </li>
    <?php endforeach?>
</ul>


<style>
    ul{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        list-style: none;
    }

    ul > li > a > img{
        width:90%;
        height: 90%;
    }

    .error > h2{
        color: red;
        font-weight: bolder;
        font-size: 2rem;
        margin: 0px;
        padding: 0px;
    }
</style>