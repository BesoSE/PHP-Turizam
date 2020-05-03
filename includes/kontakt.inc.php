<?php 
   
    include 'auto-load.inc.php';
?>

<?php 

    // $to="semso2612@gmail.com";
    // $Subject="Email from page Turizam";

    


        $turizam=new Turizam;
    if(isset($_POST['send'])){
        $data=array();
        $data['name']=$_POST['name'];
      
        $data['email']=$_POST['email'];
        $data['message']=$_POST['mes'];


        // $mail= $data['email'];
        // $mess=$data['message'];

        // $headers.="Content-type: text/html;\r\n";
        // $headers.="From: $mail";
        
        $errorEmpty=false;
        $errorEmail=false;

        if(empty($data['name']) || empty($data['email']) || empty($data['message'])){
            echo "<span>Fill in all fields</span>";
            $errorEmpty=true;
        }else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            echo "<span>Write valid email address</span>";
            $errorEmail=true;
        }else{
            echo "<span>SUCCESS</span>";
            $turizam->AddMessage($data);
            // mail($to, $Subject, $mail, $headers);
        }
    }else{
        echo "<span>There was an error!</span>";
    }


?>
<script>
 $('#kontakt-name,#kontakt-email,#kontakt-mess').removeClass();
    var errorEmpty="<?php echo $errorEmpty; ?>";
    var errorEmail="<?php echo $errorEmail; ?>";
    if(errorEmpty==true){
        $('#kontakt-name,#kontakt-email,#kontakt-mess').addClass("input-error");
    }
    if(errorEmail==true){
        $('#kontakt-email').addClass("input-error");
    }
    if(errorEmpty==false && errorEmail==false){
        $('#kontakt-name,#kontakt-email,#kontakt-mess').val("");
    }
</script>