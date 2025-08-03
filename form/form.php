<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

<div class="titulo">Form</div>

<?php
//filters in php

/*
    https://www.php.net/manual/en/function.filter-input.php
    https://www.php.net/manual/en/function.filter-var.php

    filter_iput - get values from Get, post...
    filter-var
*/

if ($_POST){
    $errorForm = [];

    //name
    if (!filter_input(INPUT_POST, "name")){
        $errorForm['name'] = "Name not inserted";
    }

    //birth
    if (!filter_input(INPUT_POST, "birth")){
        $errorForm['birth'] = "Birth not inserted";
    } else {
        $birthFormated = DateTime::createFromFormat('d/m/Y', $_POST['birth']);
        if (!$birthFormated){
            $errorForm['birth'] = "format correct - d/m/Y";
        }
    }

    //email
    if (!filter_input(INPUT_POST, "email")){
    $errorForm['email'] = "Email is not inserted"; 
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errorForm['email'] = "Email is not valid";
        }
    }

    //site
    if (!filter_input(INPUT_POST, "site")){
    $errorForm['site'] = "Site is not inserted"; 
    } else {
        if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
            $errorForm['site'] = "Site is not valid";
        }
    }

    //children
    $configChildren = [
        "options" => [
            "min_range" => 0,
            "max_range" => 20        
        ]
    ];

    if (!filter_input(INPUT_POST, "children") && $_POST['children'] != 0){
        $errorForm['children'] = "the number(s) of children is not inserted";
    } else {
        if (!filter_var($_POST['children'], FILTER_VALIDATE_INT, $configChildren) && 
        $_POST['children'] != 0){
            $errorForm['children'] = "Number of children is invalid (0 - 20)";
        }
    }

    //salary
    $configSalary = [
        "options" => [
            "decimal" => ","
        ]
    ];

    if (!filter_input(INPUT_POST, "salary")){
        $errorForm['salary'] = "value is not inserted";
    } else {
        if (!filter_var($_POST['salary'], FILTER_VALIDATE_FLOAT, $configSalary)){
            $errorForm['salary'] = "Salary invalid, error decimal point";
        }
    }
}

?>

<form action="#" method="POST">
    <div class="row">
        <!--Name-->
        <div class="col-md-9">
            <label class="form-label" for="name">Name</label>
            <input class="form-control <?= $errorForm['name'] ? 'is-invalid' : ''?>" 
            type="text" id="name" name="name" placeholder="Name">
            <div class="invalid-feedback">
                <?=$errorForm['name']?>
            </div>
        </div>
        <div class="col-md-3">
            <!--Birth-->
            <label class="form-label" for="name">Birth</label>
            <input class="form-control <?= $errorForm['birth'] ? 'is-invalid' : ''?>" 
            type="text" id="birth" name="birth" placeholder="Birth">
            <div class="invalid-feedback">
                <?=$errorForm['birth']?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!--Email-->
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control <?= $errorForm['email'] ? 'is-invalid' : ''?>" id="email" name="email" placeholder="Email">
            <div class="invalid-feedback">
                <?=$errorForm['email']?>
            </div>
        </div>
        <div class="col-md-6">
            <!--Site-->
            <label for="site" class="form-label">Site</label>
            <input type="text" class="form-control <?= $errorForm['site'] ? 'is-invalid' : ''?>" id="site" name="site" placeholder="Site">
            <div class="invalid-feedback">
                <?=$errorForm['site']?>
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!--Children-->
            <label for="children" class="form-label">Children</label>
            <input type="number" class="form-control <?= $errorForm['children'] ? 'is-invalid' : ''?>" id="children" name="children" 
            placeholder="children">
            <div class="invalid-feedback">
                <?=$errorForm['children']?>
            </div>
            
        </div>
        <div class="col-md-6">
            <!--salary-->
            <label for="salary" class="form-label">Salary</label>
            <input type="text" class="form-control <?= $errorForm['salary'] ? 'is-invalid' : ''?>" id="salary" name="salary" placeholder="Salary">
            <div class="invalid-feedback">
                <?=$errorForm['salary']?>
            </div>  
        </div>
    </div>

    <button class="btn btn-primary btn-lg">Send</button>
</form>