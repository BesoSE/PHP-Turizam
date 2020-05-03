<?php 
   include 'header.temp.php';
   ?>
    <link rel="stylesheet" href="css/styleRegist.css">


    <script>
        $(document).ready(()=>{
            $("#Registracija").submit((event)=>{
                event.preventDefault();
                var firstname=$("#reg-fname").val();
                var lastname=$("#reg-lname").val();
                var username=$("#reg-uname").val();
                var email=$("#reg-email").val();
                var godina=$("#reg-god").val();
                var pwd=$("#reg-pwd").val();
                var pwd2=$("#reg-pwd2").val();
                var submit=$("#reg-submit").val();

                $.post('includes/registracija.inc.php',{
                    fname: firstname,
                    lname: lastname,
                    uname:username,
                    email: email,
                    godina: godina,
                    pwd: pwd,
                    pwd2: pwd2,
                    submit: submit
                },(data,status)=>{
                  $('#Message').html(data);

                });

            });
        });
    </script>


<div class="Registracija">

    <form  class="form-control" id="Registracija" method="POST">
        <input type="text" id="reg-fname"  name="firstname" class="form-control" placeholder="Ime">
        <input type="text" id="reg-lname" name="lastname" class="form-control" placeholder="Prezime">
        <input type="text" id="reg-uname" name="username" class="form-control" placeholder="Korisnicko ime">
        <input type="email" id="reg-email" name="email" class="form-control" placeholder="Email">
        
        <select id="reg-god" name="" class="form-control">

       <option value="0">Godina rodenja</option>
        <?php for($i=1960; $i<=2020; $i++): ?>
        <option  value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
        <?php endfor; ?>
       
        </select>
        <input type="password" id="reg-pwd" name="password" class="form-control" placeholder="Sifra">
        
        <input type="password" id="reg-pwd2" name="password-2" class="form-control" placeholder="Potvrda sifre">
        <input type="submit" name="submit" id="reg-submit" value="Registracija" class="form-control sub" >
        <p id="Message"></p>
    </form>
    </div>
<?php 
   include 'footer.temp.php';
   ?>