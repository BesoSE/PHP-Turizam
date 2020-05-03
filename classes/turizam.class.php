<?php 

    class Turizam{
        private $db;

        public function __construct(){
            $this->db=new Dbh();
        }

        //GET ALL CITIES
        public function getAllCities(){
            $sql="SELECT * FROM cities";
            $this->db->query($sql);

            return  $this->db->resultSet();
            



        }

        // GET CITY by ID
        public function getCity($id){
            $sql="SELECT * FROM cities WHERE id=:id";
            $this->db->query($sql);
            $this->db->bind(':id',$id);
            return $this->db->single();
        }

        //GET PONUDA

        public function getPonuda(){
            $sql="SELECT * FROM ponuda";
            $this->db->query($sql);

            return  $this->db->resultSet();
        }

        //GET PONUDA BY ID
        public function getCitiesByPonudaID($idPonuda){
            $sql="SELECT * FROM ponudacities WHERE idPonuda=:idPonuda";
            $this->db->query($sql);
            $this->db->bind(':idPonuda',$idPonuda);

            return $this->db->resultSet();


        }

        // EDIT || UPDATE CITIES
        public function editCity($id,$data){
            $sql="UPDATE cities SET name=:name,describes=:describ,photo=:photo WHERE id=:id";
            $this->db->query($sql);
            $this->db->bind(':id',$id);
            $this->db->bind(':name',$data['name']);
            $this->db->bind(':describ',$data['describes']);
            $this->db->bind(':photo',$data['photo']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }


        //EDIT PONUDA
        public function editPonuda($id,$data){
            $sql="UPDATE ponuda SET  name=:name,describes=:describ,price=:price,photo=:photo Where id=:id";
            $this->db->query($sql);

            $this->db->bind(':id',$id);
            $this->db->bind(':name',$data['name']);
            $this->db->bind(':describ',$data['describes']);
            $this->db->bind(':price',$data['price']);
            $this->db->bind(':photo',$data['photo']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }


        }

        //GET PONUDA BY PONUDAID
        public function getPonudaByID($id){
            $sql="SELECT * FROM ponuda WHERE id=:id";
            $this->db->query($sql);

            $this->db->bind(':id',$id);

             return $this->db->single();


         
             
        }

        //GET ALL FROM PONUDACITIES BY IDPONUDA

        public function getPonudaCitiesByID($id){
            $sql="SELECT * FROM ponudacities WHERE idPonuda=:id";
            $this->db->query($sql);

            $this->db->bind(':id',$id);

             return $this->db->resultSet();



         

        }

        //DELETE FROM PonudaCities

        public function deleteCityByCityID($idP, $idC){
            $sql="DELETE FROM ponudacities WHERE idPonuda=:idP AND idCities=:idC";
            $this->db->query($sql);

            $this->db->bind(':idP',$idP);
            $this->db->bind(':idC',$idC);

             if($this->db->execute()){
                 return true;
             }else{
                 return false;
             }

        }

        // ADD to ponudacities
        public function ADDtoPonudaCitites($idP,$idC){
            $sql="INSERT INTO ponudacities (idPonuda,idCities) VALUE(:idP,:idC)";
            $this->db->query($sql);

            $this->db->bind(':idP',$idP);
            $this->db->bind(':idC',$idC);

             if($this->db->execute()){
                 return true;
             }else{
                 return false;
             }



        }

        //ADD to poruka

        public function AddMessage($data){

            $sql="INSERT INTO poruka (name,email,message) VALUE (:name,:email,:message)";
            $this->db->query($sql);

            $this->db->bind(':name',$data['name']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':message',$data['message']);
            

           if( $this->db->execute()){
                return true;
            }else{
                return false;
            }


        }

        //CHECK USERNAME
        public function checkUsername($username){
            $sql="SELECT username from users where username=:username";
            $this->db->query($sql);

            $this->db->bind(':username',$username);

            return $this->db->single();
        }


          //CHECK EMAIL
          public function checkEmail($email){
            $sql="SELECT username from users where email=:email";
            $this->db->query($sql);

            $this->db->bind(':email',$email);

            return $this->db->single();
        }

        //ADD user into USERS

        public function ADDnewUser($data){
            $hashpwd=password_hash($data['pwd'],PASSWORD_DEFAULT);
            $sql="INSERT INTO users (fname, lname, username, email, year, pwd) VALUE(:fname, :lname, :username, :email, :year, :pwd)";
            $this->db->query($sql);

            $this->db->bind(':fname',$data['fname']);
            $this->db->bind(':lname',$data['lname']);
            $this->db->bind(':username',$data['uname']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':year',$data['godina']);
            $this->db->bind(':pwd',$hashpwd);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }
        // GET EMAIL OR USERNAME FROM USERS BY USERNAME OR EMAIL
        public function getUSERbyEmailORUsername($emailUname){
            $sql="SELECT * FROM users WHERE username=:emailUname OR email=:emailUname";
            $this->db->query($sql);
            $this->db->bind(':emailUname',$emailUname);

            return $this->db->single();
        }

        // GET ADMIN
        public function getAdmin(){
            $sql="SELECT * FROM admin";
            $this->db->query($sql);

            return $this->db->single();
        }
        

        //MAKE RESERVATION

        public function makeReservation($data){
            $sql="INSERT INTO rezervacije (idPonuda,idUser,datum,datumRezervacije) VALUE(:idponuda,:iduser,:datum,:datumR )";
            $this->db->query($sql);

            $this->db->bind(':idponuda',$data['idponuda']);
            $this->db->bind(':iduser',$data['iduser']);
            $this->db->bind(':datum',$data['date']);
            $this->db->bind(':datumR',$data['dateR']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //GET RESERVSTION BY ID USER AND PONUDA
        public function getReservationByIDUSERandPonuda($iduser,$idponuda){
            $sql="SELECT * from rezervacije where idUser=:iduser and idPonuda=:idponuda";
            $this->db->query($sql);
            $this->db->bind(':iduser',$iduser);
            $this->db->bind(':idponuda',$idponuda);

            return $this->db->single();

        }
        //DELETE RESERVSTION

        public function deleteReservation($idRez){
            $sql="DELETE from rezervacije where id=:id";
            $this->db->query($sql);

            $this->db->bind(':id',$idRez);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

        //DELETE BY ID USER AND PONUDA
        public function deleteReservationByIDuANDp($iduser,$idponuda){
            $sql="DELETE from rezervacije where idUser=:iduser and idPonuda=:idponuda";
            $this->db->query($sql);
            $this->db->bind(':iduser',$iduser);
            $this->db->bind(':idponuda',$idponuda);


            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

            //DELETE ALL RESERVATION by date

            public function deleteReservationByDate($date){
                $sql="DELETE from rezervacije where datumRezervacije<=:datee";
                $this->db->query($sql);
    
                $this->db->bind(':datee',$date);
    
                if($this->db->execute()){
                    return true;
                }else{
                    return false;
                }
    
            }


    }

?>