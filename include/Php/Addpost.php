<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Addpost
 *
 * @author ServerLand
 */
include_once '../include/Models.php';
class Addpost extends Model{
    
    


    public function insertpost(){
        $getCurrentdate = data('Y'.':'.'m'.':'.'d');
        if(isset($_POST[''])){
          $counry = $_POST[''];
          $club_name = $_POST[''];
          $category = $_POST['category'];
          if(count($this->error)==0){
          try{
        $stmt = $this->connect()->prepare("INSERT INTO () VALUES ()");
        $stmt->bindParam('',$counry);
        $stmt->bindParam('',$club_name);
        $stmt->bindParam('',$category);
        $stmt->bindParam('',$getCurrentdate);
        $stmt->execute();
        echo '<span>Added Successfully!!!</span>';
          }
            catch (Exception $ex){
              echo  $ex->getMessage();
                 }
            }
        }
    }
     
    public function getfreeTabel(){
        try{
            $query = "SELECT * FROM ";
            $stmt = $this->connect()->query($query);
            if($stmt->rowCount()>0){
                while ($rows = $stmt->fetch_assoc(PDO::FETCH_ASSOC)){
                    $postTable='<tr>
                            <td scope="row">1</td>
                            <td>England</td>
                            <td>9/9/2018</td>
                            <td>Man United Vs Leicester city</td>
                            <td>BTS</td>
                        </tr>';
                    echo $postTable;
                }
            }
        }
        catch (Exception $ex){
            echo $ex->getMessage();
        }
    }
    
    public function displayFree(){
        $currentdate=data('d'.':'.'m'.':'.'y');
        try{
            $query="select country,clue_name,category from '' where datapost=:currentdate";
            $stmt= $this->connect()->prepare($query);
            $stmt->bindParam(':currentdata',$currentdate);
            $stmt->execute();
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
