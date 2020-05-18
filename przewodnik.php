<!DOCTYPE html>

<html>

    <head>

        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <title>Przewodnik</title>               
    </head>

    <body>
        <?php
			include_once("logo.php");
		?>
    	<?php
			include_once("menu.php");
		?>
        <div class="tlo_przewodnik">
            <h1>Przewodniki</h1>
            <article><b>Przewodnik</b>- czyli substancja która dobrze przewodzi prąd elektryczny. Przewodzenie prądu ma charakter elekronowy. Polega ono na tym, że atomy danego przewodnika tworzą wiązania, w których jedne elektrony walencyjne pozostają swobodne tworzą ,,gaz elektronowy" .</article>
           
            <section class="przewodnik_zdj">
                <img class="przewodnik_z" src="photos/przewodnik1.png" alt="Miedz" title="Miedz">
                <img class="przewodnik_z" src="photos/przewodnik2.png" alt="Woda" title="Woda">
                <img class="przewodnik_z" src="photos/przewodnik3.png" alt="Złoto" title="Złoto">
            </section>

            <h2 class="przewodnik_nagl2"><b>Najpopularniejsze przewodniki:</b></h2>
            <ul class="przewodnik_lista">
                <li><b>Woda</b>- początkowo nie jest ona przewodnikiem ponieważ może zachowywać się jak izolator. Dlatego przewodnictwo zależy od ilości elektrolitów w substancji.</li>
                <li><b>Grafit</b>- jest to miękki, sprawdzający się jako przewodnik, używany np w silnikach elektrycznych.</li>
                <li><b>Żelazo</b>- jest to stop który jest najmniej powszechnie stosowanym przewodnikiem ze względu na swoją kruchość oraz korozyjność.</li>
                <li><b>Srebro</b>- przewodnik który jest najczęściej stosowany do produkcji styków elektrycznych w łącznikach ze względy na swój mały opór elektryczny.</li>
                <li><b>Złoto</b>- stosowany do produkcji styków oraz w układach mikroprocesorowych, cechuje się dużymi własnościami elektrycznymi.</li>
                <li><b>Aluminium</b>- przewodnik który cechuje się swoją lekkością, plastycznością, oraz dobrym przewdonictwem.</li>

            </ul>
        </div>
        <?php
		    include_once("footer.php");
		?>



        </div>
        
    </body>

</html>