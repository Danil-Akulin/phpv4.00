<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 403</title>
</head>
<body>
<h1>Ülesanne 403</h1>
<?php
$varv=array('Gold','BlueViolet','Brown','Chartreuse','Coral','CornflowerBlue','DarkGoldenRod','DarkMagenta','DarkKhaki','DarkSeaGreen','DarkTurquoise','DimGrey','FireBrick','GhostWhite','GreenYellow');
for($i = 0; $i <15; $i++){
    echo "<span style='color: $varv[$i]'>$varv[$i]</span><br>";
}

?>
</body>
</html>