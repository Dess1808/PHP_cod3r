<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

<div class="titulo">Insert By form</div>

<?php
ini_set("display_errors", 1);

//verificar detalhe do formulario depois de envio, php acusa erro sem sentido!

//verificar counterror, precisa esta zerado
//inserir no banco pelo prepare()?

if ($_POST){
    $datas = $_POST;
    $errorForm = [];

    //name
    if (trim($datas['name']) === ""){
        $errorForm['name'] = "Name not inserted";
    }

    //birth
    if (!isset($datas['birth'])){
        $errorForm['birth'] = "Birth not inserted";
    } else {
        $birthFormated = DateTime::createFromFormat('d/m/Y', $datas['birth']);
        if (!$birthFormated){
            $errorForm['birth'] = "format correct - d/m/Y";
        }
    }

    //email
    if (!filter_input(INPUT_POST, "email")){
    $errorForm['email'] = "Email is not inserted"; 
    } else {
        if (!filter_var($datas['email'], FILTER_VALIDATE_EMAIL)){
            $errorForm['email'] = "Email is not valid";
        }
    }

    //site
    if (!filter_input(INPUT_POST, "site")){
    $errorForm['site'] = "Site is not inserted"; 
    } else {
        if (!filter_var($datas['site'], FILTER_VALIDATE_URL)){
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

    if (!filter_input(INPUT_POST, "children") && $datas['children'] != 0){
        $errorForm['children'] = "the number(s) of children is not inserted";
    } else {
        if (!filter_var($datas['children'], FILTER_VALIDATE_INT, $configChildren) && 
        $datas['children'] != 0){
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
        if (!filter_var($datas['salary'], FILTER_VALIDATE_FLOAT, $configSalary)){
            $errorForm['salary'] = "Salary invalid, error decimal point";
        }
    }

    //insert verification
    if(!$errorForm){
        require_once "connection.php";
        $connection = newConnection('course_php');

        //prepare
        $stmt = $connection->prepare("INSERT INTO register(
            name, birth, email, site, children, salary) VALUE(?,?,?,?,?,?); 
        ");

        $param = [
            $datas['name'],
            $birthFormated->format('Y-m-d'),
            $datas['email'],
            $datas['site'],
            $datas['children'],
            $datas['salary']
        ];

        $stmt->bind_param("ssssid", ...$param);

        if (!$stmt->execute()){
            echo "Error: " . $stmt->error . "<br>";
        }

        $connection->close();
    }
}

?>

<form action="#" method="POST">
    <div class="row">
        <!--Name-->
        <div class="col-md-9">
            <label class="form-label" for="name">Name</label>
            <input class="form-control <?= $errorForm['name'] ? 'is-invalid' : ''?>" 
            type="text" id="name" name="name" placeholder="Name"
            value="<?= isset($datas['name']) ? $datas['name']: ''?>">
            <div class="invalid-feedback">
                <?=$errorForm['name']?>
            </div>
        </div>
        <div class="col-md-3">
            <!--Birth-->
            <label class="form-label" for="name">Birth</label>
            <input class="form-control <?= $errorForm['birth'] ? 'is-invalid' : ''?>" 
            type="text" id="birth" name="birth" placeholder="Birth" 
            value="<?php if (isset($datas['birth'])){ echo $datas['birth']; } ?>">
            <div class="invalid-feedback">
                <?=$errorForm['birth']?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!--Email-->
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control <?= $errorForm['email'] ? 'is-invalid' : ''?>" 
            id="email" name="email" placeholder="Email" 
            value="<?php if (isset($datas['email'])){ echo $datas['email']; } ?>">
            <div class="invalid-feedback">
                <?=$errorForm['email']?>
            </div>
        </div>
        <div class="col-md-6">
            <!--Site-->
            <label for="site" class="form-label">Site</label>
            <input type="text" class="form-control <?= $errorForm['site'] ? 'is-invalid' : ''?>" 
            id="site" name="site" placeholder="Site" 
            value="<?php if (isset($datas['site'])){ echo $datas['site']; } ?>">
            <div class="invalid-feedback">
                <?=$errorForm['site']?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!--Children-->
            <label for="children" class="form-label">Children</label>
            <input type="number" class="form-control <?= $errorForm['children'] ? 'is-invalid' : ''?>" 
            id="children" name="children" placeholder="children" 
            value="<?php if (isset($datas['children'])){ echo $datas['children']; } ?>">
            <div class="invalid-feedback">
                <?=$errorForm['children']?>
            </div>
            
        </div>
        <div class="col-md-6">
            <!--salary-->
            <label for="salary" class="form-label">Salary</label>
            <input type="text" class="form-control <?= $errorForm['salary'] ? 'is-invalid' : ''?>" 
            id="salary" name="salary" placeholder="Salary" 
            value="<?php if (isset($datas['salary'])){ echo $datas['salary']; } ?>">
            <div class="invalid-feedback">
                <?=$errorForm['salary']?>
            </div>  
        </div>
    </div>

    <button class="btn btn-primary btn-lg">Send</button>
</form>