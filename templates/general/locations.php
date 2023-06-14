<?php

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @font-face {
        font-family: Futura_medium_italic;
        src: url("../../assets/fonts/Futura_Medium_Italic.ttf");
    }

    @font-face {
        font-family: Futura_Heavy;
        src: url("../../assets/fonts/Futura_Heavy_font.ttf");
    }

    @font-face {
        font-family: Didot;
        src: url("../../assets/fonts/Didot_Regular.ttf");
    }
    </style>
    <style>
        <?php
        include("../css/locations.css")
        ?>
    </style>
</head>
<body>
    <header>

    </header>
    <nav>
        <div id="nav_bar">
            <input type="text" id="destination" placeholder="Destination">
            <input type="text" placeholder="Départ" onfocus="(this.type = 'date')">
            <input type="text" placeholder="Arrivée" onfocus="(this.type = 'date')">
            <input type="text" id="voyageurs" placeholder="Voyageurs">
            <div id="img">
                <div class="btn">
                    <button> <P>Rechercher</P> <img src="../../assets/logo/searh.png" alt="flèche"> </button>
                </div>
            </div>
        </div>
    </nav>
    <div id="area_button_filtre">
        <button id="filtre">
            <p>Trier</p>
            <img src="../../assets/logo/filtre.png" alt="">
        </button>
    </div>
    <div id="collection">
        <div id="collection_grid">
            <div class="appart_parent" id="appart_1">
                <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                <p class="title">Villa Paris 12e</p>
                <p class="description">22, rue des champs elysées </p>
                <p class="description">600 € / nuit</p>
                <div class="reserve_button">
                    <button>Reserver</button>
                </div>
            </div>

            <div class="appart_parent">
                <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                <p class="title">Villa Paris 12e</p>
                <p class="description">22, rue des champs elysées </p>
                <p class="description">600 € / nuit</p>
                <div class="reserve_button">
                    <button>Reserver</button>
                </div>
            </div>

            <div class="appart_parent">
                <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                <p class="title">Villa Paris 12e</p>
                <p class="description">22, rue des champs elysées </p>
                <p class="description">600 € / nuit</p>
                <div class="reserve_button">
                    <button>Reserver</button>
                </div>
            </div>
            <div class="appart_parent">
                <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                <p class="title">Villa Paris 12e</p>
                <p class="description">22, rue des champs elysées </p>
                <p class="description">600 € / nuit</p>
                <div class="reserve_button">
                    <button>Reserver</button>
                </div>
            </div>
            <div class="appart_parent">
                <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                <p class="title">Villa Paris 12e</p>
                <p class="description">22, rue des champs elysées </p>
                <p class="description">600 € / nuit</p>
                <div class="reserve_button">
                    <button>Reserver</button>
                </div>
            </div>
            <div class="appart_parent">
                <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                <p class="title">Villa Paris 12e</p>
                <p class="description">22, rue des champs elysées </p>
                <p class="description">600 € / nuit</p>
                <div class="reserve_button">
                    <button>Reserver</button>
                </div>
            </div>
            <div class="appart_parent">
                <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                <p class="title">Villa Paris 12e</p>
                <p class="description">22, rue des champs elysées </p>
                <p class="description">600 € / nuit</p>
                <div class="reserve_button">
                    <button>Reserver</button>
                </div>
            </div>
            <div class="appart_parent">
                <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                <p class="title">Villa Paris 12e</p>
                <p class="description">22, rue des champs elysées </p>
                <p class="description">600 € / nuit</p>
                <div class="reserve_button">
                    <button>Reserver</button>
                </div>
            </div>
        </div>
        <div id="more">
            <button id="buttun_more">
                <p>Voir plus...</p>
            </button>
        </div>
    </div>
<?php

?>
    <script src="./filtre.js"></script>
    <footer>
        
    </footer>
</body>
</html>