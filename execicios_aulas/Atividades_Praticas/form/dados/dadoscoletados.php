<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADOS COLETADOS</title>
</head>
<body>
    
</body>
</html>











<?php 
$name = $_GET["name"];
$date = $_GET["data"];
$tel = $_GET["tel"];
$sex = $_GET["sexo"];




echo " o nome é $name e a ";
echo date('d/m/Y',strtotime($date)); //trasnsformar a date em D/M/Y
if ($sex == "mas") {
    echo "Sexo masculino";
} elseif ($sex == "fem") {
    echo "Sexo feminino";
} else {
    echo "Sexo não reconhecido.";
}


?>
