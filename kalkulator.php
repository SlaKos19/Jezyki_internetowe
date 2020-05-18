<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="content-type" content="text/html" charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="style.css" />
            <title>Kalkulator</title>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
        <?php
			include_once("logo.php");
		?>
    	<?php
			include_once("menu.php");
		?>

            <div class="display">
                <center><h1 class="kalkulator_nagl">Kalkulator</h1></center>
                <center><article class="opis_kalkulator">Dzięki dodanej funkcji kalkulator, możesz dokonać prostych obliczeń, które w elektronice są niezbędne chociażby do dobrania odpowiednich elementów elektronicznych do układu ze względu na rezystancję, pojemność czy indukcyjność. </article></center>
                <div class="kalk">
                    <center><img  id="img_logos" src = "photos/Logo.png" alt="logo"/></center>              
                    <form name="form">
                    <input class="textview" name="textview">
                    <table>
                        <tr>
                            <td><input id="clean_a" class="button" type="button" value="C"></td>
                            <td><input id="back" class="button" type="button" value="<"></td>
                            <td><input id="dziel" class="button" type="button" value="/"></td>
                            <td><input id="multi"class="button" type="button" value="x"></td>
                        </tr> 
                        <tr>
                            <td><input id="seven" class="button" type="button" value="7"></td>
                            <td><input id="eight" class="button" type="button" value="8"></td>
                            <td><input id="nine" class="button" type="button" value="9"></td>
                            <td><input id="sub" class="button" type="button" value="-"></td>
                        </tr> 
                        <tr>
                            <td><input id="four" class="button" type="button" value="4"></td>
                            <td><input id="five" class="button" type="button" value="5"></td>
                            <td><input id="six" class="button" type="button" value="6"></td>
                            <td><input id="add"class="button" type="button" value="+"></td>
                        </tr> 
                        <tr>
                            <td><input id="one" class="button" type="button" value="1"></td>
                            <td><input id="two"class="button" type="button" value="2"></td>
                            <td><input id="three"class="button" type="button" value="3"></td>
                            <td rowspan="5"><input id="score" class="button2" type="button" value="="></td>
                        </tr>   
                        <tr>
                            <td colspan="2"><input id="zero" class="button1" type="button" value="0"></td>
                            <td><input id="dot" class="button" type="button" value="."></td>
                        </tr>               
                    </table>
                    </form>
                </div>
            </div>
            <script>
        var click_clean = document.querySelector("#clean_a");
        click_clean.addEventListener("click",function clean(){         
            document.form.textview.value="";
        })
        
        var click_back = document.querySelector("#back");
        click_back.addEventListener("click",function back() {                
            var exp = document.form.textview.value;
            document.form.textview.value=exp.substring(0,exp.length-1);
        })

        var click_dziel = document.querySelector("#dziel");
        click_dziel.addEventListener("click",function dziel() {     
            num = "/";
            document.form.textview.value= document.form.textview.value+num;
        })

        var multi = document.querySelector("#multi");
        multi.addEventListener("click",function multi() {
            num = "*";
            document.form.textview.value= document.form.textview.value+num;
        })

        var seven = document.querySelector("#seven");
        seven.addEventListener("click",function seven() {
            num = 7;
            document.form.textview.value= document.form.textview.value+num;
        })
        
        var eight = document.querySelector("#eight");
        eight.addEventListener("click",function eight() {  
            num = 8;
            document.form.textview.value= document.form.textview.value+num;
        })

        var nine = document.querySelector("#nine");
        nine.addEventListener("click",function nine() { 
            num = 9;
            document.form.textview.value= document.form.textview.value+num;
        })

        var sub = document.querySelector("#sub");
        sub.addEventListener("click",function sub() {          
            num = "-";
            document.form.textview.value= document.form.textview.value+num;
        })

        var four = document.querySelector("#four");
        four.addEventListener("click",function four() {
            num = 4;
            document.form.textview.value= document.form.textview.value+num;
        })

        var five = document.querySelector("#five");
        five.addEventListener("click",function five() {        
            num = 5;
            document.form.textview.value= document.form.textview.value+num;
        })

        var six = document.querySelector("#six");
        six.addEventListener("click",function six() {   
            num = 6;
            document.form.textview.value= document.form.textview.value+num; 
        })

        var add = document.querySelector("#add");
        add.addEventListener("click",function add() {
            num = "+";
            document.form.textview.value= document.form.textview.value+num;
        })
        
        var click_one = document.querySelector("#one");
        click_one.addEventListener("click",function one() {  
            num = 1;
            document.form.textview.value= document.form.textview.value+num;
        })

        var two = document.querySelector("#two");
        two.addEventListener("click",function two() {  
            num = 2;
            document.form.textview.value= document.form.textview.value+num;
        })

        var three = document.querySelector("#three");
        three.addEventListener("click",function three() {      
            num = 3;
            document.form.textview.value= document.form.textview.value+num;
        })

        var score = document.querySelector("#score");
        score.addEventListener("click",function equal() {      
            var liczba = document.form.textview.value;
                if(liczba){
                    document.form.textview.value=eval(liczba);
                }
        })

        var zero = document.querySelector("#zero");
        zero.addEventListener("click",function zero() {
            num = 0;
            document.form.textview.value= document.form.textview.value+num; 
        })
        var dot = document.querySelector("#dot");
        dot.addEventListener("click",function dot() {  
            num = ".";
            document.form.textview.value= document.form.textview.value+num;
        })
    </script>
        
        <?php
		    include_once("footer.php");
		?>
        </body>
    </html>