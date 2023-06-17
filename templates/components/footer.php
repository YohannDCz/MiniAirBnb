<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Footer</title>

    <style>
        @import url('https://fonts.cdnfonts.com/css/futura-pt');
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        footer{
            width : 100vw;
            height : 75px;
            background-color :black;
            padding: 0;
            display: flex;
            justify-content: space-evenly;
        }
        footer .container {
            width: 77%;
            display: flex;
            align-items: center;
            gap: 3%;
        }

        .container p {
            font-size: 1.063rem;
            color: white;
            font-family: 'Futura PT';
        }

        .container-img{
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .container-img figure {
            max-height: 94%;
            max-width: 23px;
        }

        .container-img figure img {
            min-width: 14px;
            max-width: 34px;
            width: 100%;
            height: 20px;
        }

        .footer-a{
            color: white;
        }

    </style>
    
</head>
<body>
    <footer>
        <div class = "container">
            <p>© 2023 Taillé d’or, Inc. </p>
            <a href="" class="footer-a">Infos sur l'entreprise</a>
            <a href="" class="footer-a">Fonctionnement du site</a>
            <a href="" class="footer-a">Conditions générales</a>
            <a href="" class="footer-a">Plan du site</a>
            <a href="" class="footer-a">Confidentialité</a>
        </div>
        <div class="container-img">
            <figure>
                <img src="Vector.png" alt="">
            </figure>
            <figure>
                <img src="Vector-1.png" alt="">
            </figure>
            <figure>
                <img src="Vector-2.png" alt="">
            </figure>
            <figure>
                <img src="Vector-3.png" alt="">
            </figure>
        </div>
        </class>
    </footer>
</body>
</html>