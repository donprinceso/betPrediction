<?php

/**
 * Description of Addpost
 *
 * @author ServerLand
 */
include_once '../database/Models.php';

class Addpost extends Model{
    
    


    public function insertpost(){
        $getCurrentdate = date('Y'.':'.'m'.':'.'d');
        if(isset($_POST['addpost_btn'])){
          $country = $_POST['country'];
          $club_name = $_POST['club_name'];
          $category = $_POST['category'];
          if(count($this->error)==0){
        //  try{
        $stmt = $this->connect()->prepare("insert into freetips_tb (`country`, `dataposted`, `club_names`, `category`)"
                . " values (:country,:dataposted,:clubname,:category)");
        $stmt->bindParam(':country',$country);
        $stmt->bindParam(':dataposted',$getCurrentdate);
        $stmt->bindParam(':clubname',$club_name);
        $stmt->bindParam(':category',$category);
        $stmt->execute();
        echo '<span>Added Successfully!!!</span>';
       //   }catch (Exception $ex){
           //   echo  $ex->getMessage();
           //      }
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
    
    
    // displaying the lastes upload of freetips in the dashboard
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
    // show all the freefitps form the database to the free tips page
     public function getfreeUnmRows(){
        try{
            $sql="select * from freetips_tb";
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
