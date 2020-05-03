<?php 
    // include '../classes/dbh.class.php';
    // include '../classes/turizam.class.php';
    include 'auto-load.inc.php';
?>
<?php 
    $turizam=new Turizam();
if(isset($_POST['submit'])){

    $emailUname=$_POST['emailUname'];
    $sifra=$_POST['sifra'];

    $errorEmpty=false;
    $errorEU=false;
    $errorPWD=false;

    if(empty($emailUname) || empty($sifra)){
        $errorEmpty=true;
        echo '<span>Popunite sva polja</span>';

    }else {
        
        $result=$turizam->getUSERbyEmailORUsername($emailUname);
        if($result==NULL){
        if(strlen($result)===0){
            $errorEU=true;
            echo '<span>Netaacan unos username ili emaila</span>';
        }
    }else{
            $pwdCheck=password_verify($sifra,$result->pwd);

            if($pwdCheck==false){
                $errorPWD=true;
                echo '<span>Netacna sifra</span>';
            }else if($pwdCheck==true){
                // session_start();
                $_SESSION['id']=$result->id;
                $_SESSION['username']=$result->username;
                echo '<span>Uspjesna prijava</span>';
               
            }else{
                echo  '<span>Greska</span>';
                $errorPWD=true;
            }




        }


    }




}




?>

<script>
    $('#emailUname,#password').removeClass();
    var errorEmpty="<?php echo $errorEmpty; ?>";
    var errorEU="<?php echo $errorEU; ?>";
    var errorPWD="<?php echo $errorPWD; ?>";

    if(errorEmpty==true){
        $('#emailUname,#password').addClass('input-error');
        $('#emailUname,#password').val("");
    }else if(errorEU==true){
        $('#emailUname').addClass('input-error');
        $('#emailUname,#password').val("");
    }else if(errorPWD==true){
        $('#password').addClass('input-error');
        $('#password').val("");
    }

    if(errorEmpty==false && errorEU==false && errorPWD==false){
        $('#emailUname,#password').val("");
        location.reload();
    }


</script>