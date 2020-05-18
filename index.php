<!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="content-type" content="text/html" charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <title>Elektronix</title>
    </head>
  <body>
  <?php
			include_once("logo.php");
		?>
    	<?php
			include_once("menu.php");
		?>
        <div class="index_tlo">
      <h1 class="nag_1">Witamy na stronie internetowej poświęconej elektronice !</h1>
        
        <div class ="pole1">  
          <section class="slider">
            <div class="slideshow-container">
              <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                  <img src="photos/slide1.png" style="width:100%">
                    <div class="text"></div>
              </div>
              <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                  <img src="photos/slide2.png" style="width:100%">
                <div class="text"></div>
              </div>
              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                  <img src="photos/slide3.png" style="width:100%">
                <div class="text"></div>
              </div>

              
              <a class="prev">&#10094;</a>
              <a class="next">&#10095;</a>
            </div>

            <br>
            
            <div style="text-align:center">
              <span id="dot1" class="dot"></span>
              <span id="dot2" class="dot"></span>
              <span id="dot3" class="dot"></span>
            </div>   
        </section>
        </div>
    
        <div class="lop"> 
         <div id="Klasyfikacja">
            <h1 id="h1_main">Klasyfikacja elektryczna środowisk</h1>
          </div> 

          <div id="zdj">
            <div class="ram">
              <article class= "article">
                <div class="zdjp">
                  <h2 class="nagł_klas">Przewodniki</h2>
                  <img class="foto" src="photos/półprzewodnik.png" />
                  <br>
                  <a href = "przewodnik.php">Czytaj więcej</a>
                </div>  
              </article>

              <article class= "article">
                  <div class="zdjp">
                    <h2 class="nagł_klas">Półprzewodniki</h2>
                    <img class="foto" src="photos/przewodnik.png" />
                    <br>
                    <a href = "półprzewodnik.php">Czytaj więcej</a>
                  </div>
              </article>
  
              <article class= "article">
                  <div class="zdjp">
                    <h2 class="nagł_klas">Izolatory</h2>
                    <img class="foto" src="photos/izolator.png" />
                    <br>
                    <a href = "izolator.php">Czytaj więcej</a>
                    </div>  
              </article>
            </div>   
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
		include_once("footer.php");
		?>

<script>
  var slideIndex = 1;
showSlides(slideIndex);

var minSlide = document.querySelector(".prev");
minSlide.addEventListener("click",function minSlide(){
  n = -1;
  showSlides(slideIndex += n);
})

var plusSlide = document.querySelector(".next");
plusSlide.addEventListener("click",function plusSlide(){
  n = 0;
  showSlides(slideIndex += n);
})

var dot1 = document.querySelector("#dot1");
dot1.addEventListener("click",function dot1(){
  n = 1;
  showSlides(slideIndex = n);

})

var dot2 = document.querySelector("#dot2");
dot2.addEventListener("click",function dot2(){
  n = 2;
  showSlides(slideIndex = n);

})

var dot3 = document.querySelector("#dot3");
dot3.addEventListener("click",function dot3(){
  n = 3;
  showSlides(slideIndex = n);
})
                
  function plusSlides(n) 
    {
      showSlides(slideIndex += n);
    }
    var plusSlide = document.querySelector(".next");
    plusSlide.addEventListener("click",function plusSlide(){
     n = 1;
    showSlides(slideIndex += n);
})               
                  
  function showSlides(n) 
    {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
                      
    for (i = 0; i < dots.length; i++) 
      {
        dots[i].className = dots[i].className.replace(" active", "");
      }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      } 
        
        
</script>
    </body>
</html>