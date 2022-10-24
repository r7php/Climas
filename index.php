<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima</title>
    <link rel="stylesheet" href="assets/css.css" />
</head>
<body>
    <h1>Clima</h1>

    <form  method="post" role="form" id="form" class="busca">
        <!--<input type="search" id="searchInput" />-->
        <input type="search" name="searchInput" id="searchInput" />
        <input class="button" type="submit" value="Buscar">
    </form>

       <div id="wait" role="alert" style="display: none;margin-top: 10px; color: white;">
                    Buscando...
       </div>

    <div id="resultado" class="resultado">
       <div class="info">
            <div class="temp">
                <br><label id="InfoTempo" style="color: white; font-size: 25px; text-align: center;"></label><br><br>
                <div class="tempTitulo">Temperatura</div>
                <div class="tempInfo"><label id="Tempo" ></label><sup>ºC</sup></div>
                <!--<img src="http://openweathermap.org/img/wn/++@2x.png" id="img" />-->
                <img id="img">
            </div>
            <div class="vento">
                <div class="ventoTitulo" style="margin-top: 65px;">Vento</div>
                <div class="ventoInfo"><label id="velocidade"></label> <span>km/h</span></div>
                <div class="ventoArea">
                    <div class="ventoPonto" style="transform: rotate(0deg)"></div>
                </div>
            </div>
        </div>
    
    </div>

    <div id = "aviso" class="aviso">Informe uma cidade</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript" src="assets/js.js"></script>
</body>
</html>