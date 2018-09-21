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
include_once '../database/Models.php';

class Addpost extends Model{
    
    


    public function insertpost(){
        $getCurrentdate = date('Y'.':'.'m'.':'.'d');
        if(isset($_POST[''])){
          $counry = $_POST[''];
          $club_name = $_POST[''];
          $category = $_POST['category'];
          if(count($this->error)==0){
          try{
        $stmt = $this->connect()->prepare("INSERT INTO freetips_tb(country,dataposted,club_names,category)"
                . " VALUES (:country,:dateposted,clubname,:category)");
        $stmt->bindParam(':country',$counry);
        $stmt->bindParam(':dataposted',$getCurrentdate);
        $stmt->bindParam(':clubname',$club_name);
        $stmt->bindParam(':category',$category);
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
            $query = "SELECT * FROM freetips_tb";
            $stmt = $this->connect()->query($query);
            if($stmt->rowCount()>0){
                while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $postTable='<tr>
                            <td scope="row">'.$rows['freetip_id'].'</td>
                            <td>'.$rows['country'].'</td>
                            <td>'.$rows['dataposted'].'</td>
                            <td>'.$rows['club_names'].'</td>
                            <td>'.$rows['category'].'</td>
                        </tr>';
                    echo $postTable;
                }
            }
        }
        catch (Exception $ex){
            echo $ex->getMessage();
        }
    }
    
    
    
     public function displayFree2(){
        try{
            $query="select * from freetips_tb Limit 0,10";
            $stmt= $this->connect()->prepare($query);
            $stmt->execute();
            if($stmt->rowCount()>0){
              while ($data = $stmt->fetch(PDO::FETCH_ASSOC)){
                  $tabledisplay='<tr>
                            <td>'.$data['freetip_id'].'</td>
                            <td>'.$data['dataposted'].'</td>
                            <td>'.$data['country'].'</td>
                            <td>'.$data['club_names'].'</td>
                            <td>'.$data['category'].'</td>
                            <td><a href="../php/details.php" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                        </tr>';
                  echo $tabledisplay;
              }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
