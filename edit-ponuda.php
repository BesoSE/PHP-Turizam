<?php 
    include 'includes/auto-load.inc.php';
?>

<?php
$turizam=new Turizam();
$ponudaID=isset($_GET['id']) ? $_GET['id']:null;

  

if(isset($_POST['submit'])){
    $data=array();
    $data['name']=$_POST['name'];
    $data['describes']=$_POST['describ'];
    $data['price']=$_POST['price'];
    $data['photo']=$_POST['photo'];


if($turizam->editPonuda($ponudaID,$data)){
    redirect('ponuda.php?id='.$ponudaID.'','Your ponuda has been update','success');
}else{
    redirect('ponuda.php?id='.$ponudaID.'','Something went wrong','error');
}
}

if(isset($_POST['del'])){
    $idC=$_POST['cityID'];

    if($turizam->deleteCityByCityID($ponudaID, $idC)){
        redirect('ponuda.php?id='.$ponudaID.'','Your ponuda has been update','success');
    }else{
        redirect('ponuda.php?id='.$ponudaID.'','Something went wrong','error');
    }
}

if(isset($_POST['dodaj'])){
    $idC=$_POST['grad'];
 
    

    if($turizam->ADDtoPonudaCitites($ponudaID,$idC)){
        redirect('ponuda.php?id='.$ponudaID.'','Your ponuda has been update','success');
    }else{
        redirect('ponuda.php?id='.$ponudaID.'','Something went wrong','error');
    }
}




$template=new Template('template/edit-ponuda.temp.php');
if($ponudaID){

    $template->ponuda=$turizam->getPonudaByID($ponudaID);
    $template->poCity=$turizam->getPonudaCitiesByID($ponudaID);
    $template->allcities=$turizam->getAllCities();
    

}



echo $template

?>
