<?php

require_once '../include/Models.php';
class Controllers extends Model{
   
    
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
            header("location:Admin/dashborad.php");  
        }
    }
    // query the admin login 
    public function login_query(){
        if(isset($_POST['admin_login_btn'])){
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
            if(strlen($pass)< 4){
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
            echo $result=$row['category'];
        }
        }
 catch (Exception $e){
            echo $e->getMessage();
        }
            
    }
    
}
