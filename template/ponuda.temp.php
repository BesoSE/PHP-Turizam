<?php 
   include 'header.temp.php';
   ?>
   <script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>

          <link rel="stylesheet" href="css/styleP.css">


        




<div class="Pon">
    <div class="D"></div>
    
            <?php 
            $cities=new Turizam();
            $city;
            $pname;
            $pDescrib;
            $pPrice;
            $id;
            foreach($ponuda as $p){
            foreach($pond as $pon){
                if($pon->id==$p->idPonuda){
                $pname= $pon->name;

                $pPrice=$pon->price;

                $pDescrib=$pon->describes;
                    $id=$p->idPonuda;
                }
                
            }
        }   ?>
           
                <h1 style="text-align:center;"><?php echo $pname ?>   </h1>
               
                <p><?php echo $pDescrib; ?></p>


                <?php if(isset($_SESSION['id'])): ?>
                    <?php  if($rez!=NULL):   ?>
              <?php  if($rez->idPonuda==$id): ?>
                <a  id="otkazi"><button>Otkazi rezervaciju</button></a>
                <div class="otkaz">
                </div>
              <?php endif; ?>
              <?php endif; ?>
              <?php  if($rez==NULL): ?>
                <a  id="rezervacija"><button>Rezervisi</button></a>
               
                <div class="rezer">
                
               
                </div>
              <?php endif; ?>
              <?php endif; ?>
           
            <?php foreach($ponuda as $p): ?>
                   
            <?php        $city=$cities->getCity($p->idCities);  ?>
                    <hr>
                    
<h1 class="DH1" ><?php echo  $city->name;?></h1>;


<hr>
<img class="Photo" src="<?php echo $city->photo; ?>" alt="">
<hr>
    <p><?php echo $city->describes; ?></p>


    <hr>
  
    
                
                <?php endforeach;    ?>
            <?php 
            $idK;
            if(isset($_SESSION['id'])):
            $idK=$_SESSION['id'];
            
            if($idK==$admin->USERID):
            
            ?>
                <a href="edit-ponuda.php?id=<?php echo $id; ?>"> <button type="submit">Edit</button></a>

            <?php endif; endif;  ?>
    </div> 
     
    <?php    if(isset($_SESSION['id'])): ?>
    <script>
          $(document).ready(()=>{
          $("#rezervacija").click(()=>{
            $(".rezer").addClass("rez");
            $("#rezervacija").css("display","none");
            $from=$("<form  class='rezervisi' method='POST' ></form>");
            
             
              
              $from.append("<label>Naziv: <?php echo $pname ?> </label><br>");
              $from.append("<label>Cijena: <?php echo $pPrice ?>$ </label><br>");
            
              $from.append("<label>Ime: <?php echo $user->fname ?> </label><br>");
              $from.append("<label>Prezime: <?php echo $user->lname ?> </label><br>");
              $from.append("<label>Email: <?php echo $user->email ?> </label><br>");
              $from.append("<label >Datum: <?php echo  date("Y/m/d")?> </label><br>");
             
              $from.append("<label>Datum rezervacije:  </label>");
              $from.append("<input id='dateR' type='date'><br>");
              $from.append("<input  type='submit' id='sub' name='sub' value='REZERVISI'>");


            $(".rezer").append($from);
            $(".rezer").append(' <p id="poruka"></p>');
    

          
            $(".rezervisi").submit((event)=>{
                event.preventDefault();
            
            
            var iduser="<?php echo $user->id ?> ";
            var idPonuda="<?php echo $id ?>";
            var date="<?php echo  date("Y-m-d")?>";
            var dateR=$('#dateR').val();
            var sub=$('#sub').val();
            
           
            
            $("#poruka").load("includes/rezervisi.inc.php",{
                iduser: iduser,
                date: date,
                dateR: dateR,
                idPonuda: idPonuda,
                sub: sub
            });

        });
            
            
            });

        });
          </script>      


<?php  if($rez!=NULL):   ?>
          <script>
            $(document).ready(()=>{
                $('#otkazi').click(()=>{
                    $("#otkazi").css("display","none");
                $form=$("<form id='rezF' method='POST'></form>");
                
             
                $form.append("<label>Ime: <?php echo $user->fname ?> </label><br>");
                $form.append("<label>Prezime: <?php echo $user->lname ?> </label><br>");
                $form.append("<label>Datum kada je rezervisano: <?php echo $rez->datum ?> </label><br>");
                $form.append("<label>Datum rezervacije: <?php echo $rez->datumRezervacije ?> </label><br>");
                $form.append("<label>Cijena: <?php echo $pPrice ?> </label><br>");
                $form.append("<input type='submit' id='otkSub' value='Otkazi'>");


                $(".otkaz").append($form);
                $(".otkaz").append("<p id='mess'></p>");

                $('#rezF').submit((event)=>{
                    event.preventDefault();
                    var idRez="<?php echo $rez->id ?>";
                    var datumK="<?php echo $rez->datum ?>";
                    var datumR="<?php echo $rez->datumRezervacije ?> ";
                    var sub=$("#otkSub").val();

                    $('#mess').load('includes/otkaziR.inc.php',{
                        idRez: idRez,
                        datumK: datumK,
                        datumR: datumR,
                        sub: sub

                    });


                });


            });
            });
          </script>   
 
        <?php endif; ?>
        <?php endif; ?>
       

<?php 
   include 'footer.temp.php';
   ?>