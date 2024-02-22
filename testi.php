<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        img{
            width:200px ;
            height: 200px ;
        }
        div{
            margin: auto ;
        }
        .imag{
            border : 5px solid blue ;
            margin : 10px ;
        }
        .main{
            border: 2px solid red ;
            display: flex ;
            justify-content : space-between ;
        }
    </style>
</head>
<body>
    <?php
        $pict = array("picture/domotique.jpg","picture/fortuner.jpg","picture/robot.jpg","picture/toto.jpg","picture/Voiture.jpg"); 
    ?>

   <div class="main">
        <?php 
            for( $i=0 ; $i < count($pict) ; $i++ ){ ?>

                <img class="images" src="<?php echo $pict[$i] ; ?>" alt="">



        <?php  
            }
        ?>

   </div>
    



    
    

    <script>
        let file = document.getElementsByClassName("images");
        let step = 0 ;


        function noBorder(){
            for(let i=0 ; i< file.length ; i++){
                file[i].style.border = "none";
           
            }
        }

        function imageActive(){
            noBorder();
            if(step >= file.length){
                step = 0 ;
            }
            file[step].style.border = "5px solid blue";
            step++;

        }
        function random(){
            for(let i=0 ; i< file.length ; i++){
                
                file[i].addEventListener('click', function(){
                    noBorder();
                    file[i].style.border = "5px solid blue";
                    step = i ;


                })
            }

        }
        

        setInterval(imageActive, 4000);
        random();

        
    </script>

<script src="testi.js"></script>

</body>
</html>