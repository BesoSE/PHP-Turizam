<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
    <title>Document</title>
<!-- SEND MESSAGE AJAX -->
    <script>
    $(document).ready(()=>{
        $(".formKontakt").submit((event)=>{
            event.preventDefault();
            var name=$("#kontakt-name").val();
            var email=$("#kontakt-email").val();
            var mes=$("#kontakt-mess").val();
            var send=$("#kontakt-send").val();

            $("#formMess").load("includes/kontakt.inc.php",{
                name: name,
                email: email,
                mes: mes,
                send: send
            });
        });


    });
    </script>


    <!-- LOGIN AJAX  -->
    <script>
    
        $(document).ready(()=>{
            $(".drugaForma").submit((event)=>{
                event.preventDefault();
                var emailUname=$('#emailUname').val();
                var sifra=$('#password').val();
                var submit=$('#submit').val();


                $.post('includes/login.inc.php',{
                    emailUname: emailUname,
                    sifra: sifra,
                    submit: submit
                },(data,status)=>{
                    $('#Poruka').html(data+status);
                    
                });


            });

        });
    </script>

</head>
<body>
 <!-- CONTAINER -->

    <div class="container">
     <!-- Navigacija -->
     <nav class="nav">
        <a href=""><img class="photo" src="https://image.shutterstock.com/image-vector/bosnia-herzegovina-travel-destination-logo-600w-539616535.jpg" alt=""></a>
        <ul>
            <li><a class="btn" href="index.php">Početna</a></li>
            <li><a class="btn"  href="#ponuda">Ponuda</a></li>
            <li><a class="btn" href="#Destinacije">Destinacije</a></li>
            <li><a class="btn" href="#footer">Kontakt</a></li>

   <?php if(isset($_SESSION['id'])){ 
    echo  '<li>
   <form action="includes/logout.inc.php" method="POST">
   <input type="submit" class="btn" value="Odjava">
   </form>
   </li>';
   } else{
      
   echo   ' <li>  <form class="drugaForma" action="includes/login.inc.php" method="POST">
                    <input id="emailUname"  type="text" placeholder="email/username"/>
                   
                    <input id="password" name="password" type="password" placeholder="Sifra"/>
                    
            <input class="btn btn-dark" id="submit" type="submit"  value="Prijava">
            <p id="Poruka"></p>
            </form></li>
            <li><a  class="btn"  href="registracija.php">Registracija</a></li> ';
   }?>
        </ul>

    </nav>

    
   
