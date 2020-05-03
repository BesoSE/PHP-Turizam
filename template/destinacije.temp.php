<?php 
   include 'header.temp.php';
   ?>
      <link rel="stylesheet" href="css/styleD.css">
<div class="Dest">
<hr>
<?php echo '<div class="displ">' .displayMessage().'</div>' ?>
<h1 class="DH1" ><?php 
echo  $city->name;?></h1>


<hr>
<img class="Photo" src="<?php echo $city->photo; ?>" alt="">
<hr>
    <p><?php echo $city->describes; ?></p>


    <hr>
    <?php 
            $idK;
            if(isset($_SESSION['id'])):
            $idK=$_SESSION['id'];
            
            if($idK==$admin->USERID):
            
            ?>
   <a href="edit-destinacije.php?id=<?php echo $city->id; ?>"> <button type="submit" class="edit">Edit</button></a>
   <?php endif; endif;  ?>
    </div>





<?php 
   include 'footer.temp.php';
   ?>