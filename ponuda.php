<?php 
    include 'includes/auto-load.inc.php';
?>

<?php
$turizam=new Turizam();
$template=new Template('template/ponuda.temp.php');

$ponudID= isset($_GET['id']) ? $_GET['id'] :null;


if($ponudID){
    $template->ponuda=$turizam->getCitiesByPonudaID($ponudID);
    $template->pond=$turizam->getPonuda();
}
if(isset($_SESSION['id'])){
    $u=$template->user=$turizam->getUSERbyEmailORUsername($_SESSION['username']);




    $template->rez=$turizam->getReservationByIDUSERandPonuda($u->id,$ponudID);



}


$template->admin=$turizam->getAdmin();
echo $template

?>



