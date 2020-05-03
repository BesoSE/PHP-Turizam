<?php 
    include 'includes/auto-load.inc.php';
?>

<?php
$turizam=new Turizam();
$template=new Template('template/destinacije.temp.php');

$CityID= isset($_GET['id']) ? $_GET['id'] :null;

if($CityID){
$template->city=$turizam->getCity($CityID);
}


$template->admin=$turizam->getAdmin();
echo $template

?>
