<?php 
$connection = mysqli_connect('localhost', 'root', '', 'rodinny_prislusnici');
if(!$connection){
    echo 'nepodarilo sa pripojit'. mysqli_connect_error();
}

$sql = 'SELECT * FROM prislusnici';
$sql1 = 'SELECT * FROM prislusnici ORDER BY meno';

$result = mysqli_query($connection, $sql);
//$result1 = mysqli_query($connection, $sql);

$prislusnici = mysqli_fetch_all($result, MYSQLI_ASSOC);
//$prislusnici1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($connection);

///////////////////////////////////////////////////////////////////////////////////////////



if(isset($_POST['vek']))
{
    $asc_query = "SELECT * FROM prislusnici ORDER BY vek ASC";
    $result = skuska($asc_query);
}
elseif (isset ($_POST['vek1'])) 
    {
          $desc_query = "SELECT * FROM prislusnici ORDER BY vek DESC";
          $result = skuska($desc_query);
    }
else if (isset($_POST['meno']))
{
    $asc_query = "SELECT * FROM prislusnici ORDER BY meno ASC";
    $result = skuska($asc_query);
}
elseif (isset ($_POST['meno1'])) 
    {
          $desc_query = "SELECT * FROM prislusnici ORDER BY meno DESC";
          $result = skuska($desc_query);
    }
elseif (isset($_POST['priezvisko']))
{
    $asc_query = "SELECT * FROM prislusnici ORDER BY priezvisko ASC";
    $result = skuska($asc_query);
}
elseif (isset ($_POST['priezvisko1'])) 
    {
          $desc_query = "SELECT * FROM prislusnici ORDER BY priezvisko DESC";
          $result = skuska($desc_query);
    }
    else{
      $default_query = "SELECT * FROM prislusnici";
      $result = skuska($default_query);
}


function skuska($query)
{
  $connectio = mysqli_connect("localhost", "root", "", "rodinny_prislusnici");
  $result = mysqli_query($connectio, $query);
  return $result;
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


<style>
table,tr,th,td
{
border: 1px solid black;
}
</style>

</head>
<body>
<div id="square"></div>
<div class="header">
  <h1>databazy - zadanie2</h1>
</div>

<div class="navbar">
  <a href="index.html">uvodna strana</a>
  <a href="index1.html">hory</a>
  <a href="index2.html">JV script</a>
  
</div>
<li><a href="insert.php" class="btn brand z-depth-0">Pridat clena</a><br><br>


<h1 class="center">Databaza</h1>
<form action="vypis_udajov.php" method="post">

<input type="submit" name="vek" value="Od najmenšieho veku" ><br><br>
<input type="submit" name="vek1" value="Od najvačšiho veku"><br><br>
<input type="submit" name="meno" value="Zoradenie mena od A do Z"><br><br>
<input type="submit" name="meno1" value="Zradenie mena od Z do A"><br><br>
<input type="submit" name="priezvisko" value="Zoradenie priezviska od A do Z"><br><br>
<input type="submit" name="priezvisko1" value="Zoradenie priezviska od Z do A"><br><br>

         <table>
             <tr>
                 <th>ID</th>
                 <th>Meno</th>
                 <th>Priezvisko</th>
                 <th>Vek</th>
                 <th>Pribuzenstvo</th>
                 <th>E-mail</th>
             </tr>
            
             <?php while ($row = mysqli_fetch_array($result)):?>
             <tr>
                 <td><?php echo $row[0];?></td>
                 <td><?php echo $row[1];?></td>
                 <td><?php echo $row[2];?></td>
                 <td><?php echo $row[3];?></td>
                 <td><?php echo $row[4];?></td>
                 <td><?php echo $row[5];?></td>
             </tr>
             <?php endwhile;?>
         </table>
     </form>

</body>
</html>
