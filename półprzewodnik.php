<!DOCTYPE html>

<html>

    <head>

        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <title>Półprzewodnik</title>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
               
    </head>

    <body>
        <?php
			include_once("logo.php");
		?>
    	<?php
			include_once("menu.php");
		?>

        <div id="tło_półprzewodnik">
        <h1 id="półprzewodnik_nagł">Półprzewodniki</h1>
        <article id="półprzewodnik_a1"><b>Półprzewodnik</b>- jest substancją w swojej budowie krystaliczną, którą główną cechą czyli konduktywność jest zmieniana w szerokim zakresie. Głownie jest to powodowane przez domieszkowanie, ogrzewanie, oświetlenie zewnętrzne bądz inne czynikki które mogą powodować, lub doprowadzać do zmian w półprzewodniku.</article>
        <h2 id="półprzewodnik_nagł1">Najpopularniejsze półprzewodniki</h2> 
        <section id="półprz_s">

        <article class="pół_z1">
        <p class="txt1">Krzem - 640 Ω*m</p>
        <img class="półprz_zdj1" src="photos/półprzewodnik1.png">
        </article>

        <article class="pół_z1">
            <p class="txt1">German - 0,46 Ω*m</p>
            <img class="półprz_zdj1" src="photos/półprzewodnik2.png">
            </article>

        <article class="pół_z1">
                <p class="txt1">Bor - 10000 Ω*m</p>
                <img class="półprz_zdj1" src="photos/półprzewodnik3.png">
                </article>
      
            </section>    

        <section>

            <h3 id="Nagł_p"><b>Zastosowanie półprzewodników w układach elektronicznych:</b></h3>
            <ul id="półprzewodnik_lista">
                <li id="półprzewodnik_lista_1">Diody: </li>
                <ul>
                <li class="dio">diody prostownicze</li>
                <li class="dio">diody elektroluminescyjne </li>
                <li class="dio">diody pojemnościowe</li>
                <li class="dio">diody tunelowe</li>
                <li class="dio">diody Schottky'ego</li> 
                </ul>
                <li id="półprzewodnik_lista_1">Tranzystory: </li>
                <ul>
                    <li class="dio">tranzystory bipolarne</li>
                    <li class="dio">tranzystory unipolarne</li>
                    <li class="dio">fototranzystory</li>
                </ul>
                </ul>
                <ul>
                <li id="półprzewodnik_lista_1">Hallotrony</li>
                <li id="półprzewodnik_lista_1">Termistory</li>
                <li id="półprzewodnik_lista_1">Lasery</li>
                <li id="półprzewodnik_lista_1">Tyrystory</li>
                </ul>
        </section>    
        </div>

        

            <?php
                include_once("footer.php");
            ?>



        </div>

    </body>

</html>