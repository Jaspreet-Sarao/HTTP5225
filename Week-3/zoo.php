<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week3</title>
</head>
<body>
    <?php
$hour=rand(1,23);
if($hour>=5&&$hour<=9)
{
    echo"<h1>the animals should have breakfast</h1>";
}
elseif($hour>=12&&$hour<=14)
{
    echo"<h1>the animals should have lunch</h1>";
}
elseif($hour>=19&&$hour<=21)
{
    echo"<h1>the animals should have dinner</h1>";
}
else {
    echo"<h1>animals are not being fed</h1>";
}
?>
</body>
</html>