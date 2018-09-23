<?php
require_once 'Models.php';
class Controllers extends Model{
   
    public function insert($firstname,$lastname,$email,$password){
        try{
        $stmt = $this->connect()->prepare("insert into admin (firstname,lastname,email,password) values "
                . "(:firstname,:lastname,:email,:password)");
        $stmt->bindParam(':firstname',$firstname);
        $stmt->bindParam(':lastname',$lastname);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->execute();
        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            $_SESSION['email'] = $rows['email'];
        }
        } catch (Exception $ex){
            echo $ex->getMessage();
        }
    }
    public function insert_query(){
        if (isset($_POST['admin_signup_btn'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $pass = md5($_POST['password']);
            if(strlen($pass)< 6){
                $this->error=1;
                $this->ERROR_TEXT="Password is less than 6";
            }
            if (count($this->error)==0){
                $this->insert($firstname, $lastname, $email, $password);
            }
            else {
                $this->error=1;
                $this->ERROR_TEXT="<b>TRY AGAIN </b>:Sign Up was not successfully!!";
            }
        }
    }

    public function login($email,$pass){
       $stmt = $this->connect()->prepare("SELECT email,password FROM admin WHERE email=:email AND password=:password ") ;
       $stmt->bindParam(':email',$email);
       $stmt->bindParam(':password',$pass);
       $stmt->execute();
        if($stmt->num_rows == 0){
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $_SESSION['email']=$row['email'];
            }
            echo '<scrip>alert("Successfully Login!")</scrip>';
            header("location:../dash/dashborad.php");  
        }
    }
    // query the admin login 
    public function login_query(){
        if(isset($_POST['admin_login_btn'])){
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
            if(strlen($pass)< 6){
                $this->error=1;
                $this->ERROR_TEXT="Password is less than 6 ";
            }
            if(count($this->error)==0){
                
                $this->login($email, $pass);   
            }
            else {
                $this->error=1;
                $this->ERROR_TEXT="<b>TRY AGAIN </b>:Login was not successfully!!";
            }
        }

    }
    
    
    //inserting the category in the database
    public function InsertCategory(){
        if(isset($_POST['addCategory'])){
          $category=$_POST['cate-title'];
            if(count($this->error)== 0){ 
                $data = date('Y'.':'.'m'.':'.'d');
                try{
               $quey ="Insert Into category_tb (category,dataposted) values (:category,:dataposted) ";
               $stmt = $this->connect()->prepare($quey);
               $stmt->bindParam(':category',$category);
               $stmt->bindParam(':dataposted',$data);
               $stmt->execute();
               echo '<span>Category Added Successfully!!!</span>';
           }catch(Exception $ex){echo  $ex->getMessage();}
            }
           else {
            $this->error=1;
            $this->ERROR_TEXT="Category Not added successfully!!";
           }   
        }
    }
    // getting the category table to show all data from the database
    public function GetCategoryTable(){
        try{
        $sql_query = "select * from category_tb";
        $stmt = $this->connect()->query($sql_query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $table='  <tr>
                            <td scope="row">'.$row['Id_category'].'</td>
                            <td>'.$row['category'].'</td>
                            <td>'.$row['dataposted'].'</td>
                        </tr>';
          echo $table;
        }
        }
 catch (Exception $e){
            echo $e->getMessage();
        }
            
    }
    //Getting the categort form the databasr nd display it in a html select tag
    public function GetCategory(){
        try{
        $sql_query = "select * from category_tb";
        $stmt = $this->connect()->query($sql_query);
      $result = "";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo $result=$row['category'].'<br>';
        }
        }
 catch (Exception $e){
            echo $e->getMessage();
        }
            
    }
    
    public function displayFree(){
        $currentdate = date('d'.':'.'m'.':'.'y');
        try{
            $sql="select * from freetips_tb ORDER BY freetip_id DESC LIMIT 10";
            $stmt= $this->connect()->query($sql);          
            if($stmt->rowCount()>0){
              while ($data = $stmt->fetch(PDO::FETCH_ASSOC)){
                  $indexdisplay='<tr>
                                <td class="text-uppercase">'.$data['country'].'</td>
                                <td class="text-center">'.$data['club_names'].'</td>
                                <td>'.$data['category'].'</td>
                              </tr>';
                  echo $indexdisplay;
              }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
