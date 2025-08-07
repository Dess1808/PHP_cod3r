<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<div class="titulo">Update by Form</div>

<?php

//validation
if($_POST){
    $datas = $_POST;
    $errorForm = [];

    //name
    if (trim($datas['name'] === "")){
        $errorForm['name'] = "Name not entered";
    }

    //birth
    if ($datas['birth'] === ""){
        $errorForm['birth'] = "Birth not entered";
    } else {
        $birthFormated = DateTime::createFromFormat('d/m/Y', $datas['birth']);
        if (!$birthFormated){
            $errorForm['birth'] = "Format correct - d/m/Y";
        }
    }

    //email
    if ($datas['email'] === ""){
        $errorForm['email'] = "Email not entered";
    } else {
        if (!filter_var($datas['email'], FILTER_VALIDATE_EMAIL)){
            $errorForm['email'] = "Email invalid";
        }
    }

    //site
    if ($datas['site'] === ""){
        $errorForm['site'] = "Site not entered";
    } else {
        if (!filter_var($datas['site'], FILTER_VALIDATE_URL)){
            $errorForm['site'] = "Site invalid";
        }
    }

    //children
    $childrenConfig = [
        "options" => [
            "min_range" => 0,
            "max_range" => 20
        ]
    ];

    if ($datas['children'] === ""){
        $errorForm['children'] = "Children not entered";
    } else {
        if (!filter_var($datas['children'], FILTER_VALIDATE_INT, $childrenConfig) 
            && $datas['children'] != 0){
                $errorForm['children'] = "Value of children invalid";
            }
    }

    //salary
    $salaryConfig = [
        "options" => [
            "decimal" => ","
        ]
    ];

    if ($datas['salary'] === ""){
        $errorForm['salary'] = "Salary not entered";
    } else {
        if (!filter_var($datas['salary'], FILTER_VALIDATE_FLOAT, $salaryConfig)){
            $errorForm['salary'] = "Salary invalid, correct - 00,00";
        }
    }

}

?>

<form action="#" method="POST">
    <div class="row">
        <!--Name-->
        <div class="col-md-9">
            <label class="form-label" for="name">Name</label>
            <input class="form-control <?= isset($errorForm['name']) ? 'is-invalid' : '' ?>" 
            type="text" id="name" name="name"
            placeholder="Name" value="<?= isset($datas['name']) ? $datas['name'] : '' ?>">
            <div class="invalid-feedback">
                <?= $errorForm['name'] ?>
            </div>
        </div>
        <!--Birth-->
        <div class="col-md-3">
            <label class="form-label" for="birth">Birth</label>
            <input 
                class="form-control <?= isset($errorForm['birth']) ? 'is-invalid' : '' ?>" 
                type="text" 
                id="birth" 
                name="birth" 
                placeholder="Birth" 
                value="<?= isset($datas['birth']) ? $datas['birth'] : '' ?>"
            >
            <div class="invalid-feedback">
                <?= $errorForm['birth'] ?>
            </div>
        </div>
    </div>

    <div class="row">
        <!--Email-->
         <div class="col-md-6">
            <label class="form-label" for="email">Email</label>
            <input 
                class="form-control <?= isset($errorForm['email']) ? 'is-invalid' : '' ?>" 
                type="text" id="email" name="email"
                placeholder="Email" 
                value="<?= isset($datas['email']) ? $datas['email'] : '' ?>"
            >
            <div class="invalid-feedback">
                <?= $errorForm['email'] ?>
            </div>
        </div>
        <!--site-->
         <div class="col-md-6">
            <label class="form-label" for="site">Site</label>
            <input 
                class="form-control <?= isset($errorForm['site']) ? 'is-invalid' : '' ?>" 
                type="text" id="site" name="site"
                placeholder="Site" 
                value="<?= isset($datas['site']) ? $datas['site'] : '' ?>"
            >          
            <div class="invalid-feedback">
                <?= $errorForm['site'] ?>
            </div>
        </div>
    </div>

    <div class="row">
        <!--children-->
         <div class="col-md-6">
            <label class="form-label" for="children">Children</label>
            <input 
                class="form-control <?= isset($errorForm['children']) ? 'is-invalid' : '' ?>" 
                type="text" id="children" name="children"
                placeholder="Children" 
                value="<?= isset($datas['children']) ? $datas['children'] : '' ?>"
            >
            <div class="invalid-feedback">
                <?= $errorForm['children'] ?>
            </div>
        </div>
        <!--salary-->
         <div class="col-md-6">
            <label class="form-label" for="salary">Salary</label>
            <input 
                class="form-control <?= isset($errorForm['salary']) ? 'is-invalid' : '' ?>" 
                type="text" id="salary" name="salary"
                placeholder="Salary" 
                value="<?= isset($datas['salary']) ? $datas['salary'] : '' ?>"
            >
            <div class="invalid-feedback">
                <?= $errorForm['salary'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Send</button>
</form>
