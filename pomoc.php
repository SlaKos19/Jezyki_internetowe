<!DOCTYPE html>
    <html>
        <head>
            <title>Pomoc techniczna</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <meta http-equiv="content-type" content="text/html" charset="utf-8" />
            <link rel="stylesheet" href="style.css" />
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        </head>
        <body>
        <?php
			    include_once("logo.php");
		    ?>
    	  <?php
			    include_once("menu.php");
		    ?>
            <div class="display">
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

            <?php
		          include_once("footer.php");
		        ?>


<script>

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