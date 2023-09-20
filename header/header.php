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
            <div class="menu1" id="menuUn"  onmousedown="afficherSousMenu1()" >
                <div class="menu11" id="idServiceImmobilier" onmouseover="afficherSousMenu1()" >
                    <p>Services immobiliers</p>
                    <span> <i class="fa-solid fa-caret-down"></i></span>
                </div>

                <div class="sous-menu1" id="sousMenu1" onmouseleave="masquerSousMenu1()">
                    <a href="">Location</a>
                    <a href="">Vente</a>
                    <a href="">Gestion immobilière</a>
                </div>
            </div>

            <div class="menu2">
                <p>Construction & prestation</p>
                <span></span>
            </div>

            <div class="menu3">
                <p>Recrutement étranger & Tourisme</p>
                <span></span>
            </div>

            <div class="menu4">
                <p>Guide besoin</p>
                <span></span>
            </div>

            <div class="menu5">
                <p>Commerce général</p>
                <span></span>
            </div>

            <div class="menu6">
                <p>A propos de nous</p>
                <span></span>
            </div>

            <div class="menu7">
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