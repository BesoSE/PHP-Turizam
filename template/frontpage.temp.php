   <?php 
   include 'header.temp.php';
   ?>

   
       <!-- Top Container -->
       <section class="top-container">
            <h1 class="HH">Dobro došli u Bosnu i Hercegovinu</h1>
        </section>
           <!-- Ponuda  -->

    <?php $ponuda=array();
        $i=1;
        foreach($pon as $p){
            // if($p->id==1){

            //     $ponuda[1]=$p;
            // }else if($p->id==2){

            //     $ponuda[2]=$p;
            // }else if($p->id==3){

            //     $ponuda[3]=$p;
            // }else if($p->id==4){

            //     $ponuda[4]=$p;
            // }

                $ponuda[$i]=$p;
                $i++;
        }
    
    ?>


<section id="ponuda">
    <h1 class="PH">Ponuda</h1>
    <div class="ponuda-p">
    <div class="box box-1" style="background-image:url('<?php echo $ponuda[1]->photo; ?>');">
       <a href="ponuda.php?id=<?php echo $ponuda[1]->id; ?>"> <div class="box-n">
        <h2><?php echo $ponuda[1]->name; ?> </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, accusantium!</p>
        <h1> <?php echo $ponuda[1]->price; ?> €</h2>
        </div></a>
    </div>
    <div class="box box-2" style="background-image:url('<?php echo $ponuda[2]->photo; ?>');">
    <a href="ponuda.php?id=<?php echo $ponuda[2]->id; ?>"> <div class="box-n">
        <h2><?php echo $ponuda[2]->name; ?> </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, accusantium!</p>
        <h1><?php echo $ponuda[2]->price; ?> €</h2>
        </div></a>
    </div>
    
    <div class="box box-3" style="background-image:url('<?php echo $ponuda[3]->photo; ?>');">
    <a href="ponuda.php?id=<?php echo $ponuda[3]->id; ?>">  <div class="box-n">
        <h2><?php echo $ponuda[3]->name; ?> </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, accusantium!</p>
        <h1><?php echo $ponuda[3]->price; ?> €</h2>
        </div></a>
    </div>
   
    <div class="box box-4" style="background-image:url('<?php echo $ponuda[4]->photo; ?>');">
    <a href="ponuda.php?id=<?php echo $ponuda[4]->id; ?>">  <div class="box-n">
        <h2><?php echo $ponuda[4]->name; ?></h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, accusantium!</p>
        <h1><?php echo $ponuda[4]->price; ?> €</h2>
        </div></a>
    </div>
</div>
</section>
    <!-- Destinacije  -->

  <section id="Destinacije">
      <h1 class="dest">Destinacije</h1>
    <div class="cont">
    <?php $grad=array();
     foreach($cities as $city): ?>
       <?php 
       
   if($city->id==2){
            $grad[2]=$city;
   }else if($city->id==1){
            $grad[1]=$city;
        }else if($city->id==3){
            $grad[3]=$city;
        }else if($city->id==6){
            $grad[6]=$city;
        }else if($city->id==5){
            $grad[5]=$city;
        }else if($city->id==7){
            $grad[7]=$city;
        }
          
         
        
        
        ?>
        <?php endforeach; ?>
        <div class="GBOX">
        <div class="mainBox" style="background-image:url('<?php echo $grad[2]->photo; ?>');">
        
        <a href="destinacije.php?id=<?php echo $grad[2]->id; ?>">  <h1><?php echo $grad[2]->name; ?></h1></a>
        </div>
        <div class="ssbox">
        <div class="sbox sbox-1" style="background-image:url('<?php echo $grad[6]->photo; ?>');"> <a href="destinacije.php?id=<?php echo $grad[6]->id; ?>"><h1>  <?php echo  $grad[6]->name; ?></h1></a></div>
        <div class="sbox sbox-2" style="background-image:url('<?php echo $grad[7]->photo; ?>');"><a href="destinacije.php?id=<?php echo $grad[7]->id; ?>"> <h1> <?php echo  $grad[7]->name; ?></h1></a></div>
    </div>
    </div>
    <div class="DBOX">
        <div class="bbox bbox-1" style="background-image:url('<?php echo $grad[3]->photo; ?>');"><a href="destinacije.php?id=<?php echo $grad[3]->id; ?>"> <h1><?php echo  $grad[3]->name; ?></h1></a></div>
        <div class="bbox bbox-2" style="background-image:url('<?php echo $grad[1]->photo; ?>');"><a href="destinacije.php?id=<?php echo  $grad[1]->id; ?>"><h1> <?php echo  $grad[1]->name; ?></h1></a> </div>
        <div class="bbox bbox-3" style="background-image:url('<?php echo $grad[5]->photo; ?>');"><a href="destinacije.php?id=<?php echo $grad[5]->id; ?>"> <h1><?php echo  $grad[5]->name; ?></h1></a></div>
    </div>

    </div>

  </section>
  
      
        <?php 
   include 'footer.temp.php';
   ?>