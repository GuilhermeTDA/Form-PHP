<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$time1 = $_POST['time1'];
$gols1 = $_POST['gols1'];
$time2 = $_POST['time2'];
$gols2 = $_POST['gols2'];


if(!empty($_POST['gols1']) && isset($_POST['gols1'])
&& !empty($_POST['gols2']) && isset($_POST['gols2'])){
   if($gols1 > $gols2){
   echo "$time1 Ganhou com $gols1 gols!";
} else if($gols1 < $gols2){
    echo "$time2 Ganhou com $gols2 gols!";
    
} 
} else if(empty($_POST['gols1']) || empty($_POST['gols2'])) {
    echo "Preencha os dados";
    header("refresh:3,fut.php");
}
?>
</body>
</html>