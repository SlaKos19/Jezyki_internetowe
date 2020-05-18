                var click_clean = document.querySelector("#clean_a");
                var click_back = document.querySelector("#back");
                var click_dziel = document.querySelector("#dziel");
                var multi = document.querySelector("#multi");
                var seven = document.querySelector("#seven");
                var eight = document.querySelector("#eight");
                var nine = document.querySelector("#nine");
                var sub = document.querySelector("#sub");
                var four = document.querySelector("#four");
                var five = document.querySelector("#five");
                var six = document.querySelector("#six");
                var add = document.querySelector("#add");
                var click_one = document.querySelector("#one");
                var two = document.querySelector("#two");
                var three = document.querySelector("#three");
                var score = document.querySelector("#score");
                var zero = document.querySelector("#zero");
                var dot = document.querySelector("#dot");

                click_clean.addEventListener("click",function clean(){
                    document.form.textview.value="";
                })

                click_back.addEventListener("click",function back() {
                    var exp = document.form.textview.value;
                    document.form.textview.value=exp.substring(0,exp.length-1);
                })

                click_dziel.addEventListener("click",function dziel() {
                    num = "/";
                    document.form.textview.value= document.form.textview.value+num;
                })

                multi.addEventListener("click",function multi() {
                    num = "*";
                    document.form.textview.value= document.form.textview.value+num;

                })

                seven.addEventListener("click",function seven() {                 
                    num = 7;
                    document.form.textview.value= document.form.textview.value+num;

                })

                eight.addEventListener("click",function eight() {                
                    num = 8;
                    document.form.textview.value= document.form.textview.value+num;

                })

                nine.addEventListener("click",function nine() {                 
                    num = 9;
                    document.form.textview.value= document.form.textview.value+num;
                })

                sub.addEventListener("click",function sub() {
                    num = "-";
                    document.form.textview.value= document.form.textview.value+num;
                })

                four.addEventListener("click",function four() {
                    num = 4;
                    document.form.textview.value= document.form.textview.value+num;
                })

                five.addEventListener("click",function five() {
                    num = 5;
                    document.form.textview.value= document.form.textview.value+num;
                })

                six.addEventListener("click",function six() {
                    num = 6;
                    document.form.textview.value= document.form.textview.value+num;
                })

                add.addEventListener("click",function add() {
                    num = "+";
                    document.form.textview.value= document.form.textview.value+num;
                })

                click_one.addEventListener("click",function one() { 
                    num = 1;
                    document.form.textview.value= document.form.textview.value+num;
                })

                two.addEventListener("click",function two() {
                    num = 2;
                    document.form.textview.value= document.form.textview.value+num;
                })

                three.addEventListener("click",function three() { 
                    num = 3;
                    document.form.textview.value= document.form.textview.value+num;
                })

                score.addEventListener("click",function equal() {
                    var liczba = document.form.textview.value;
                    if(liczba){
                        document.form.textview.value=eval(liczba);
                    }
                })

                zero.addEventListener("click",function zero() {
                    num = 0;
                    document.form.textview.value= document.form.textview.value+num;
                })
                dot.addEventListener("click",function dot() {
                    num = ".";
                    document.form.textview.value= document.form.textview.value+num;
                })