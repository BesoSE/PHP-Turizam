<?php 
    include 'includes/auto-load.inc.php';
?>

<?php
$turizam=new Turizam();
$cityID=isset($_GET['id']) ? $_GET['id']:null;

if(isset($_POST['submit'])){
    $data=array();
    $data['name']=$_POST['name'];
    $data['describes']=$_POST['describ'];
    $data['photo']=$_POST['photo'];


if($turizam->editCity($cityID,$data)){
    redirect('destinacije.php?id='.$cityID.'','Your city has been update','success');
}else{
    redirect('destinacije.php?id='.$cityID.'','Something went wrong','error');
}
}
$template=new Template('template/edit-destinacije.temp.php');
if($cityID){

    $template->city=$turizam->getCity($cityID);
    

}



echo $template

?>
