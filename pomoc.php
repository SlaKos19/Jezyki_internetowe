<!DOCTYPE html>
    <html>
        <head>
            <title>Pomoc techniczna</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <meta http-equiv="content-type" content="text/html" charset="utf-8" />
            <link rel="stylesheet" href="style.css" />
        </head>
        <body>
            <header>
                <center><img  id="img_logo" src = "photos/Logo.png" alt="logo"/></center>
            </header>
            <div id= "kolor">
                <div id="lista">
                    <div id="menu">
                        <ul>
                            <li><a href="index.html">Strona głowna</a></li>
                            <li><a href="sklep.html">Sklep</a></li>
                            <li id="add"><a href="formularz.php">Załóż konto</a></li>
                            <li><a href="kalkulator.html">Kalkulator</a></li>
                            <li><a href="logowanie.php">Dodaj oferte</a></li>
                            <li><a href="pomoc.php">Pomoc techniczna</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="kalkulator_tło">
            <div class="container">
            <div class="row">
                 <div class="col-md-8" style="margin:0 auto; float:none;">
                    <h3 align="center">Uzupełnij podany formularz i wyślij aby skontaktować się z nami</h3>
            <br/>
            <br/>
            <br/>
            
            <form id="myForm">
            
                <div class="form_pomoc">
                <h4 class="sent-notification"></h4>
                    <div class="form-group">
                        <label>Imię:</label>
                        <input id="name" type="text" name="name" placeholder="Tutaj wpisz swoje imię" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input id="email" type="text" name="email" class="form-control" placeholder="Tutaj wpisz swój email"/>
                    </div>
                    <div class="form-group">
                        <label>Temat:</label>
                        <input id="subject" type="text" name="subject" class="form-control" placeholder="Tutaj wpisz temat wiadomości"/>
                    </div>
                    <div class="form-group">
                        <label>Wiadomość:</label>
                        <textarea name="message" rows="10" class="form-control" id="body" placeholder="Tutaj wpisz wiadomość" ></textarea>
                    </div>
                    <div class="form-group" align="center">
                    <button type="button"  value="Wyslij" id="click_pomoc" class="click">Wyślij</button>                    
                    </div>
                </div>
            </form>
                </div>
            </div>
            </div>   
            </div>

            <div id="foter">
                <div id="foot">
                    <p>Autor: Sławomir Kosior </p>
                    <hr>
                    <p> WSIiZ 2020 Języki internetowe</p>
                </div>
            </div>



            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script type="text/javascript">

  var click_pomoc = document.querySelector("#click_pomoc");
  click_pomoc.addEventListener("click", function sendEmail(){

    var name = $("#name");
    var email = $("#email");
    var subject = $("#subject");
    var body = $("#body");
    if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
      $.ajax({
        url: 'wysłanie_email.php',
        method: 'POST',
        dataType: 'json',
        data:{
          name: name.val(),
          email: email.val(),
          subject: subject.val(),
          body: body.val()
        }, success: function(response){
          $('#myForm')[0].reset();
          $('.sent-notification').text("Wiadomość została wysłana.");
        }
      });
    }
  })

  function isNotEmpty(caller){
    if(caller.val() == ""){
      caller.css('border','1px solid red');
      return false;
    }
    else
    {
      caller.css('border', '');
      return true;
    }
  }

</script>
        </body>
    </html>