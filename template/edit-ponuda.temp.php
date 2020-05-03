<?php 
   include 'header.temp.php';
   ?>
    
   <link rel="stylesheet" href="css/styleEdit.css">
   <div class="cont" >
   
<form action="edit-ponuda.php?id=<?php echo $ponuda->id; ?>" class="formEdit" method="POST" >
    <input type="text" name="name" value=" <?php echo $ponuda->name; ?> "  placeholder="Name">
    <input type="text" name="price" value="<?php echo $ponuda->price ?>"  placeholder="Price">

    <input type="text" name="describ" value="<?php echo $ponuda->describes ?>"  placeholder="Describe">
    <input type="text" name="photo" value="<?php echo $ponuda->photo?>" placeholder="Photo">
    <input type="submit" name="submit" value="SAVE">
    
</form>

    <?php 
    $tur=new Turizam();
    $i=0;
    $data=array();
    
    foreach($poCity as $city):?>
  <?php    
    
    $data[$i]=$tur->getCity($city->idCities);
  
    ?>
    
    <div class="grad">
    <form action="edit-ponuda.php?id=<?php echo $ponuda->id; ?>"  method="POST" >
        <label for="" ><?php echo $data[$i]->name; ?></label>
        <input  name="cityID" value="<?php echo $data[$i]->id; ?>" style="display:none;">
        <input type="submit" name="del" value="DELETE">
    </form>
    </div>
       
    
    <?php $i++; 
    endforeach; 
     ?>

</div>

     <h1>Dodaj grad u ponudu</h1>

     <form action="edit-ponuda.php?id=<?php echo $ponuda->id;?>" method="POST">
    <select name="grad" >
        <option value="0">Izaberi grad</option>
    <?php  
        $Cid=0;
    foreach($allcities as $city):?>
    <?php
        $temp=NULL;
    for ($i=0; $i <count($data) ; $i++) { 
        if($city->id==$data[$i]->id){
            $temp=$city->id;
        }
        
    }

    if($city->id==$temp) {

    }else{
        ?>
          <option  value="<?php echo $Cid=$city->id;?>"><?php echo $city->name; ?></option>
          
        <br>
   

    <?php  }
    endforeach;
    

    ?>
      </select>
    
     <input type="submit" name="dodaj" value="Dodaj">
    </form>


<?php 
   include 'footer.temp.php';
   ?>