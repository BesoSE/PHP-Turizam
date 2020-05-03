<?php 
   include 'header.temp.php';
   ?>
    <link rel="stylesheet" href="css/styleEdit.css">

   <div class="cont" >
   
<form action="edit-destinacije.php?id=<?php echo $city->id; ?>" class="formEdit" method="POST" >
    <input type="text" name="name" value=" <?php echo $city->name ?> ">
    <input type="text" name="photo" value="<?php echo $city->photo ?>">
    <input type="text" name="describ" value="<?php echo $city->describes ?>">
    <input type="submit" name="submit" value="SAVE">
    
</form>
</div>

<?php 
   include 'footer.temp.php';
   ?>