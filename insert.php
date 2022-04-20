<?php

$connection = mysqli_connect('localhost', 'root', '', 'rodinny_prislusnici');
if(!$connection){
    echo 'nepodarilo sa pripojit'. mysqli_connect_error();
}

$meno = '';
$priezvisko = '';
$vek = '';
 $pribuzenstvo = '';
 $email = '';
 
$errors = array('meno'=>'','priezvisko'=>'','pribuzenstvo'=>'','vek'=>'','email'=>'');


if(isset($_POST['submit'])){

if(empty($_POST['meno'])){
    $errors['meno'] = "meno je povinny <br /> ";
	} else{
        $meno= $_POST['meno'];
	}

    if(empty($_POST['vek'])){
        $errors['vek'] = "vek je povinne zadat <br />";
    }else{ 
        $vek = $_POST['vek'];
}

if(empty($_POST['priezvisko'])){
    $errors['priezvisko'] = "priezvisko je povinne zadat <br />";
    }else{ 
        $priezvisko = $_POST['priezvisko'];
}
if(empty($_POST['pribuzenstvo'])){
    $errors['pribuzenstvo'] = "pribuzenstvo je povinne zadat <br />";
    }else{ 
        $pribuzenstvo = $_POST['pribuzenstvo'];
}
if(empty($_POST['email'])){
    $errors['email'] = "email je povinny zadat";
    }else{ 
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email musi byt zadani';
        }
    }   
    
    if(array_filter($errors)){
        echo 'chyba v registracii';
    }else {
        $sql = "INSERT INTO prislusnici(meno,priezvisko,vek,pribuzenstvo,email) VALUES('$meno','$priezvisko','$vek','$pribuzenstvo','$email')";
        if(mysqli_query($connection, $sql)){
            // success
            header('Location: vypis_udajov.php');
        } else {
            echo 'query error ';
        }
         }
    }

   

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>jvscript</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Richard_Pajzinka/css/custom4scss.css">
<script src="../Richard_Pajzinka/scripts/main.js"></script>
<script src="../Richard_Pajzinka/scripts/4a.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../Richard_Pajzinka/scripts/jquery.js"></script>

<?php include('template/hlavicka.php'); ?>


</head>
<body>
<div id="square"></div>
<div class="header">
  <h1>Pridavanie do databazy</h1>
</div>

<div class="navbar">
  <a href="vypis_udajov.php">spat na databazu</a>
  
</div>

<div>


<h4 class="center">Registracia</h4>
<form class="white" action="insert.php" method="POST">

    <label>Meno</label>
    <input type="text" name="meno" value="<?php echo $meno?>">
    <div class="red-text"><?php echo $errors['meno']; ?></div>

    <label>Priezvisko</label>
    <input type="text" name="priezvisko" value="<?php echo $priezvisko?>">
    <div class="red-text"><?php echo $errors['priezvisko']; ?></div>

    <label>Vek</label>
    <input type="number" name="vek" value="<?php echo $vek?>">

    <label>Pribuzenstvo</label>
    <input type="text" name="pribuzenstvo" value="<?php echo $pribuzenstvo?>">
    <div class="red-text"><?php echo $errors['pribuzenstvo']; ?></div>

    <label>e-mail</label>
    <input type="text" name="email" value="<?php echo $email?>">
    <div class="red-text"><?php echo $errors['email']; ?></div>

    <div class="center">

        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
    </div>
</form>



  
</div>
</body>
</html>
