<?php
/**
 * Description of mostpredict
 *
 * @author ServerLand
 */
include_once '../database/Models.php';

class mostpredict extends Model{
   // insert data into most predict 
    public function insertmost($country,$league,$clubname,$category){
        $date=date('y'.':'.'m'.':'.'d');
        $sql = "Insert into mostpredict_tb (dateposted,country,league,club_names,category)"
                . " values (:dateposted,:country,:league,:club_names,:category)";
        try{
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(':dateposted',$date);
            $stmt->bindParam(':country',$country);
            $stmt->bindParam(':league',$league);
            $stmt->bindParam(':club_names',$clubname);
            $stmt->bindParam(':category',$category);
            $stmt->execute();
            echo '<span>Successfully Posted!!!</span>';
        }
        catch (Exception $ex){
            echo $ex->getMessage();
        }
    }
    
    public function Query_insertmost(){
        if(isset($_POST['mostpredict_btn'])){
            $country=$_POST['country'];
            $league=$_POST['league'];
            $clubname=$_POST['club_names'];
            $category=$_POST['category'];
            if(count($this->error)==0){
                $this->insertmost($country, $league, $clubname, $category);
            }
            else {
                $this->error=1;
                $this->ERROR_TEXT='<span>Post Not Successfuly</span>';
            }
            
        }
    }
    
    
    public function getfreeTabel(){
        try{
            $query = "SELECT * FROM mostpredict_tb";
            $stmt = $this->connect()->query($query);
            if($stmt->rowCount()>0){
                while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $postTable='<tr>
                            <td scope="row">'.$rows['id_mostpredict'].'</td>
                            <td>'.$rows['dateposted'].'</td>
                            <td>'.$rows['country'].'</td>
                            <td>'.$rows['league'].'</td>
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
}
