<head>
    <link rel="stylesheet" href="style/header.css">
</head>

<?php 
    $lienLogo;
?>



<header>
        <div class="main-logo">
            <img src="<?php echo $lienLogo ; ?>" alt="">

        </div>

        <div class="menu">
            <ul class="menuderoulant">
                <li> 
                    <a href="#" id="serviceImmo">Services immobilier
                        <i class="fa-solid fa-caret-down"></i>  
                    </a>
                    

                    <ul class="sousmenu" >
                        <li><a href="">Location</a></li>
                        <li><a href="">Vente</a></li>
                        <li><a href="">Gestion immobilière</a></li>
                    </ul>
                </li>

                <li><a href="#">Construction & prestation</a></li>
                <li><a href="">Recrutement étranger et tourisme</a></li>
                <li><a href="">Guide Besoin</a></li>
                <li><a href="">Commerce generale</a></li>
                <li><a href="">A propos de nous</a></li>
                
            </ul>


            <div class="whatsapp">
                <span><i class="fa-brands fa-whatsapp"></i></span>
            </div>
            <div class="user">
                <div class="icon-user">
                    <span><i class="fa-solid fa-user"></i></span>
                </div>
                <div class="name-user">
                    <p>Username</p>
                </div>
            </div>
        </div>
    </header>