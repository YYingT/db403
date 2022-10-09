<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
<style>
    *{
    box-sizing: border-box;
}
.white, .black{
    width: 30px;
    height: 30px
}
.white{
    background-color: white; 
}
.black{
    background-color: black;
}
table{
      border: 1px solid black;
      border-spacing : 0;
}
</style>
</head>
<body>
    <table>
<?php
for ($i=0; $i<8; $i++){
    echo '<tr>';
    for ($j=0; $j<8; $j++) {
        $is_black = ($i+$j)%2 == 0;
        echo '<td class ="';
        echo $is_black ? 'black': 'white';
        echo '"></td>';

    }
    
    echo '</tr>';

}
?>