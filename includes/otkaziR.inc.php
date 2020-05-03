<?php 
   
    include 'auto-load.inc.php';
?>
<?php 
    $turizam=new Turizam;
    if(isset($_POST['sub'])){
        $idRez=$_POST['idRez'];
        $datumK=$_POST['datumK'];
        $datumR=$_POST['datumR'];

        $errorDate=false;

        $dK=new DateTime(date("Y-m-d"));
        $dR=new DateTime($datumR);

        $inter=date_diff($dK,$dR);
        
        $p=$inter->format('%a');
       
         if($p<10){
            echo '<span>Ne mozete otkazati rezervaciju u zadnjih 10 dana, vama je ostalo jos '.$p.' dana </span>';
            $errorDate=true;
        }
        else{

            echo '<span>Uspjesno ste otkazali  rezervaciju</span>';
            $turizam->deleteReservation($idRez);
        
            
        
            

        }

    }

?>

<script>
    var errorDate="<?php echo $errorDate ?>";

    if(errorDate){
        $('.otkaz').addClass('otk');
        $('#rezF').css("display",'none');
        
    }else{
        $('#rezF').css("display",'none');
        setTimeout(()=>{  location.reload();},1500);
       
    }


</script>