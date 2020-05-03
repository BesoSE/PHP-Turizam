<?php 
    include 'includes/auto-load.inc.php';

?>

<?php
    $turizam=new Turizam();
$template=new Template('template/frontpage.temp.php');

$template->cities=$turizam->getAllCities();



$template->pon=$turizam->getPonuda();
    
$template->admin=$turizam->getAdmin();



$dK=date("Y-m-d");
$turizam-> deleteReservationByDate($dK);

echo $template

?>
