<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <style>
            #horloge{font-size: 5em}
            body{
                background-image: url(https://w-dog.net/wallpapers/2/7/340993425496507/la-tour-eiffel-eiffel-tower-eiffel-tower-paris-paris-france-france-tree-river-price-sky-sun-leaves-red-autumn.jpg);
                text-decoration-color: aliceblue;
            }
            #seconds{
                color: darkviolet;
            }
            div{
                color: blue;
            }
            button{
                color: orangered;
            }
            h1{
                color: aliceblue;
                background-color: aliceblue;
            }
        </style>

    </head>
    <body>

        <main>
            <h1></h1>
            <p>Votre nom est : <strong id="nom" ></strong></p>
            <p id="texte"></p>
            <p>
                <input type="text" onkeyup="getNom()"/>
                <button onclick="aleaColor()">Change color !</button>
                <button onclick="aleaBackground()">Change background !</button>

            </p>
            <p>Date: <span id="heure"></span><span id="minute"></span><span id="seconde"></span></p>
            <p>
                <button id="+1H" onclick="horloge.modif('H', '+')">+1H</button>
                <button id="-1H" onclick="horloge.modif('H', '-')" >-1H</button>
                <button id="+1M" onclick="horloge.modif('M', '+')" >+1M</button>
                <button id="-1M" onclick="horloge.modif('M', '-')" >-1M</button>
                <button id="+10S" onclick="horloge.modif('S', '+')" >+10S</button>
                <button id="-10S" onclick="horloge.modif('S', '-')" >-10S</button>
                <button id="pause" onclick="horloge.stop()" >Pause</button>
                <button id="reset" onclick="horloge.reset()" >Reset</button>
            </p>
        </main>

        <script src="js/base.js"></script>
        <script src="js/horloge.js"></script>
        <noscript>
            Javascript est désactivé sur votre navigateur.
        </noscript>
    </body>
</html>
