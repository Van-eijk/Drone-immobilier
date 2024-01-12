<?php 
    $photo = array();
        
        //echo $photo[0];
    if(isset($_POST['send'])){
        foreach($_FILES['picture']['tmp_name'] as $key => $tmp_name){
            $name = $_FILES['picture']['name'][$key];
            $type = $_FILES['picture']['type'][$key];
            $size = $_FILES['picture']['size'][$key];
            $error = $_FILES['picture']['error'][$key];

            array_push($photo, $name);
        
        }

        //print_r($photo);

        /*foreach($photo as $val){
            echo $val . '<br>';
        }*/

        
        for($i = 0 ; $i < count($photo) ; $i++){
                echo $photo[$i] . '<br>';
        }
    }

    $nom = array("bobo", "van", "massa");

    $ser = serialize($nom);
    echo $ser . '<br>';

    $unser = unserialize($ser);
    foreach($unser as $val){
        echo $val . '<br>';
    }
    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for.php" method="post" enctype="multipart/form-data">
        <input type="file" name="picture[]" id="" multiple>
        <input type="submit" value="send" name="send">

    </form>
</body>
</html>