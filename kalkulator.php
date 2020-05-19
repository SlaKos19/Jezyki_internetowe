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
                <div id="kalk">
                    <center><img  id="img_logos" src = "photos/Logo.png" alt="logo"/></center>              
                    <form name="form">
                    <div id="container">
                    <div id="result">    
                    <p id="result1"></p>
                    <p id="result2"></p>                    
                     
                    </div>                  
                </div>
                    <table>
                        <tr>
                            <td><input id="clear" class="operator" type="button" value="C"></td>
                            <td><input id="backspace" class="operator" type="button" value="<"></td>
                            <td><input id="/" class="operator" type="button" value="/"></td>
                            <td><input id="*" class="operator" type="button" value="x"></td>
                        </tr> 
                        <tr>
                            <td><input id="7" class="number" type="button" value="7"></td>
                            <td><input id="8" class="number" type="button" value="8"></td>
                            <td><input id="9" class="number" type="button" value="9"></td>
                            <td><input id="-" class="operator" type="button" value="-"></td>
                        </tr> 
                        <tr>
                            <td><input id="4" class="number" type="button" value="4"></td>
                            <td><input id="5" class="number" type="button" value="5"></td>
                            <td><input id="6" class="number" type="button" value="6"></td>
                            <td><input id="+"class="operator" type="button" value="+"></td>
                        </tr> 
                        <tr>
                            <td><input id="1" class="number" type="button" value="1"></td>
                            <td><input id="2"class="number" type="button" value="2"></td>
                            <td><input id="3"class="number" type="button" value="3"></td>
                            <td rowspan=""><input id="=" class="operator" type="button" value="="></td>
                        </tr>   
                        <tr>
                            <td colspan="2"><input id="0" class="number" type="button" value="0"></td>
                        </tr>               
                    </table>
                    </div>
                    

                    </form>
                </div>
            </div>    
<script>

    function getResult1(){
        return document.getElementById("result1").innerText;
    }
    function printResult1(num){
        document.getElementById("result1").innerText=num;
    }
    function getResult2(){
        return document.getElementById("result2").innerText;
    }
    function printresult2(num){
        if(num==""){
            document.getElementById("result2").innerText=num;
        }
        else{
            document.getElementById("result2").innerText=getFormattedNumber(num);
        }	
    }
    function getFormattedNumber(num){
        if(num=="-"){
            return "";
        }
        var n = Number(num);
        var value = n.toLocaleString("en");
        return value;
    }
    function reverseNumberFormat(num){
        return Number(num.replace(/,/g,''));
    }
    var operator = document.getElementsByClassName("operator");
    for(var i =0;i<operator.length;i++){
        operator[i].addEventListener('click',function(){
            if(this.id=="clear"){
                printResult1("");
                printresult2("");
            }
            else if(this.id=="backspace"){
                var result2=reverseNumberFormat(getResult2()).toString();
                if(result2){
                    result2= result2.substr(0,result2.length-1);
                    printresult2(result2);
                }
            }
            else{
                var result2=getResult2();
                var result=getResult1();
                if(result2==""&&result!=""){
                    if(isNaN(result[result.length-1])){
                        result= result.substr(0,result.length-1);
                    }
                }
                if(result2!="" || result!=""){
                    result2= result2==""?result2:reverseNumberFormat(result2);
                    result=result+result2;
                    if(this.id=="="){
                        var result=eval(result);
                        printresult2(result);
                        printResult1("");
                    }
                    else{
                        result=result+this.id;
                        printResult1(result);
                        printresult2("");
                    }
                }
            }
            
        });
    }
    var number = document.getElementsByClassName("number");
    for(var i =0;i<number.length;i++){
        number[i].addEventListener('click',function(){
            var result2=reverseNumberFormat(getResult2());
            if(result2!=NaN){
                result2=result2+this.id;
                printresult2(result2);
            }
        });
    }
    </script>
        
        <?php
		    include_once("footer.php");
		?>
        </body>
    </html>