<?php 
   
    include 'auto-load.inc.php';
?>
<?php 
$turizam=new Turizam;
if(isset($_POST['sub'])){
    $data=array();
    
    $data['iduser']=$_POST['iduser'];
    $data['idponuda']=$_POST['idPonuda'];
    $data['date']=$_POST['date'];
    $data['dateR']=$_POST['dateR'];

    $emptyERROR=false;
    $errorDate=false;

    if(empty($data['dateR'])){
        echo '<span>Popuni sva polja</span>';
        $emptyERROR=true;
    }else if($data['date']>=$data['dateR']){
        echo '<span>Pogresan datum rezervacije</span>';
        $errorDate=true;
    }
    else{
      
        $turizam->makeReservation($data);
        
        echo '<span>Uspjesno ste rezervisali</span>';
        
        
        
    }
    
}

?>

<script>

    var errorEmpty="<?php echo $emptyERROR; ?>";
    var errorDate="<?php echo $errorDate; ?>";

    if(errorEmpty==true){

    }else if(errorDate==true){
        $('#dateR').val("");
    }
    if(errorEmpty==false && errorDate==false){
        $('.rezervisi').css('display','none');
        setTimeout(()=>{ location.reload();},1500);
    }

</script>