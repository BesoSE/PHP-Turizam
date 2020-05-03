<?php 
    include 'auto-load.inc.php';
?>
<?php
    $turizam=new Turizam();

    
    if(isset($_POST['submit'])){
        $data=array();
        $data['fname']=$_POST['fname'];
        $data['lname']=$_POST['lname'];
        $data['uname']=$_POST['uname'];
        $data['email']=$_POST['email'];
        $data['godina']=$_POST['godina'];
        $data['pwd']=$_POST['pwd'];
        $data['pwd2']=$_POST['pwd2'];

        $errorEmpty=false;
        $errorEmailANDname=false;
        $errorEmail=false;
        $errorFname=false;
        $errorLname=false;
        $errorUname=false;
        $errorYear=false;
        $errorPWD=false;
        $errorEmailiUname=false;
        if(empty($data['fname']) || empty($data['lname']) || empty($data['uname']) || empty($data['email']) || empty($data['godina']) || empty($data['pwd'])  || empty($data['pwd2'])  ){
            echo '<span>Popuni sva polja</span>';
            $errorEmpty=true;

        }else   if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$data['fname']) && !preg_match("/^[a-zA-Z0-9]*$/",$data['lname']) && !preg_match("/^[a-zA-Z0-9]*$/",$data['uname'])){
            $errorEmailANDname=true;
            echo '<span>Nispravan email,ime, prezime i korisnicko ime</span>';
        }else if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
            echo '<span>Neisparvan email</span>';
            $errorEmail=true;
        }else if(!preg_match("/^[a-zA-Z0-9]*$/",$data['fname'])){
            echo '<span>Neisparvano ime</span>';
            $errorFname=true;
        }else if(!preg_match("/^[a-zA-Z0-9]*$/",$data['lname'])){
            echo '<span>Neisparvano prezime</span>';
            $errorLname=true;
        }else if(!preg_match("/^[a-zA-Z0-9]*$/",$data['uname'])){
            echo '<span>Neisparvano koirsnicko ime</span>';
            $errorUname=true;
        }else if($data['godina']===0){
            echo '<span>Neisparvana godina rodenja</span>';
            $errorYear=true;
        }else if($data['pwd']!==$data['pwd2']){
            echo '<span>Neisparvana sifra</span>';
            $errorPWD=true;
        }else{

                $resultUsername=$turizam->checkUsername($data['uname']);
                $resultEmail=$turizam->checkEmail($data['email']);

                if($resultUsername==NULL && $resultEmail==NULL){

                if(strlen($resultUsername)===0 && strlen($resultEmail)===0){
                    
                    $turizam->ADDnewUser($data);
                    echo '<span>Uspjesna registracija!</span>';
                  
                }

            }else{
                if($resultUsername!=NULL && $resultEmail!=NULL){
                    echo '<span>Username i email se koriste</span>'; 
                    $errorEmailiUname=true;
                }
                else if($resultUsername!=NULL){
                $errorUname=true;
                echo '<span>Username se koristi</span>';
                }
               else  if($resultEmail!=NULL){
                    $errorEmail=true;
                echo '<span> Email se koristi</span>';
                }
            }

        }




        
    }else{
        echo '<span>Greska!!!</span>';
    }
    
?>

    <script>
    $("#reg-fname,#reg-lname,#reg-uname,#reg-email,#reg-god,#reg-pwd,#reg-pwd2").removeClass();
        var errorEmpty="<?php echo $errorEmpty ?>";
        var errorEmailANDname="<?php echo $errorEmailANDname ?>";
        var errorEmail="<?php echo $errorEmail ?>";
        var errorFname="<?php echo $errorFname ?>";
        var errorLname="<?php echo $errorLname ?>";
        var errorUname="<?php echo $errorUname ?>";
        var errorYear="<?php echo $errorYear ?>";
        var errorPWD="<?php echo $errorPWD ?>";
       var errorEmailiUname="<?php echo $errorEmailiUname; ?>";
       if(errorEmpty==true){
        $("#reg-fname,#reg-lname,#reg-uname,#reg-email,#reg-god,#reg-pwd,#reg-pwd2").addClass('input-r');
        $("#reg-pwd,#reg-pwd2").val("");
       }else if(errorEmailANDname==true){
        $("#reg-fname,#reg-lname,#reg-uname,#reg-email").addClass('input-r');
        $("#reg-pwd,#reg-pwd2").val("");
       }else if(errorEmail==true){
        $("#reg-email").addClass('input-r');
        $("#reg-pwd,#reg-pwd2,#reg-email").val("");
       }else if(errorFname==true){
        $("#reg-fname").addClass('input-r');
        $("#reg-pwd,#reg-pwd2").val("");
       }else if(errorLname==true){
        $("#reg-lname").addClass('input-r');
        $("#reg-pwd,#reg-pwd2").val("");
       }else if(errorUname==true){
        $("#reg-pwd,#reg-pwd2,#reg-uname").val("");
         $("#reg-uname").addClass('input-r');
       }else if(errorYear==true){
        $("#reg-god").addClass('input-r');
       }else if(errorPWD==true){
        $("#reg-pwd,#reg-pwd2").addClass('input-r');
        $("#reg-pwd,#reg-pwd2").val("");
       }else if(errorEmailiUname){
        $("#reg-email,#reg-uname").addClass('input-r');
        $("#reg-pwd,#reg-pwd2,#reg-email,#reg-uname").val("");
       }




       if(errorEmpty==false && errorEmailANDname==false && errorEmail==false && errorFname==false && errorLname==false && errorUname==false && errorPWD==false){
        $("#reg-fname,#reg-lname,#reg-uname,#reg-email,#reg-pwd,#reg-pwd2").val("");
        $("#reg-god").val("0");
       }



    </script>
