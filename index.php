<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $connect= mysqli_connect ('localhost','root','','colors');
    if(!$connect){
        die("Connection Failed:" . mysqli_connect_error());
    }
    $query='SELECT * FROM colors';
    $colors = mysqli_query($connect, $query);
   // print_r ($colors);
   if ($colors){
    foreach($colors as $color){
        $colorName=$color ['Name'];
        $colorCode=$color['Hex'];

        echo "<div class='Color'style='background:$colorCode'>$colorName</div>";
 
      
    }
   }
    ?>
</body>
</html>