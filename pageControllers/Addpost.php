<?php

/**
 * Description of Addpost
 *
 * @author ServerLand
 */
include_once '../database/Models.php';

class Addpost extends Model {

    

    public function insertpost() {
        $getCurrentdate = date('Y' . ':' . 'm' . ':' . 'd');
        if (isset($_POST['addpost_btn'])) {
            $country = $_POST['country'];
            $club_name = $_POST['club_name'];
            $category = $_POST['category'];
            if (count($this->error) == 0) {
                //  try{
                $stmt = $this->connect()->prepare("insert into freetips_tb (`country`, `dataposted`, `club_names`, `category`)"
                        . " values (:country,:dataposted,:clubname,:category)");
                $stmt->bindParam(':country', $country);
                $stmt->bindParam(':dataposted', $getCurrentdate);
                $stmt->bindParam(':clubname', $club_name);
                $stmt->bindParam(':category', $category);
                $stmt->execute();
                echo '<span>Added Successfully!!!</span>';
                //   }catch (Exception $ex){
                //   echo  $ex->getMessage();
                //      }
            }
        }
    }

    public function getfreeTabel() {
        try {
            $query = "SELECT * FROM freetips_tb";
            $stmt = $this->connect()->query($query);
            if ($stmt->rowCount() > 0) {
                while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $postTable = '<tr>
                        <form action="" method="post">
                            <td scope="row">' . $rows['freetip_id'] . '</td>
                            <td>' . $rows['country'] . '</td>
                            <td>' . $rows['dataposted'] . '</td>
                            <td name="club_name">' . $rows['club_names'] . '</td>
                            <td>' . $rows['category'] . '</td>
                            <td></td>
                            <td><a name="get" class="btn btn-secondary" href="../dash/Update.php?'.$rows['freetip_id'].'">Edit</a></td>
                            </form>
                        </tr>';
                    echo $postTable;
                }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getid() {
       if(isset($_POST['get'])){
           $clubname=$_POST['club_name'];
       
        try {
            $query = "SELECT * FROM freetips_tb where club_names =".$clubname;
            $stmt = $this->connect()->query($query);
                while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $addTable = '
                            <div class="modal-body">
                    <div class="w3-section form-group">
                        <input class="form-control" type="text" value="' . $rows['country'] . '" name="' . $rows['country'] . '" placeholder="country" required/>
                    </div>
                    <div class="w3-section form-group">
                        <input class="form-control" type="text" value="' . $rows['club_names'] . '" name="' . $rows['club_names'] . '" placeholder="club_names" required/>
                    </div>
                    <div class="w3-section form-group">
                        <input class="form-control" type="text" value="' . $rows['category'] . '" name="' . $rows['category'] . '" placeholder="category" required/>
                    </div>
                    </div>
                        ';
                    return $addTable;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
       }
    }

    // displaying the lastes upload of freetips in the dashboard
    public function displayFree2() {
        try {
            $query = "select * from freetips_tb Limit 0,10";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $tabledisplay = '<tr>
                            <td>' . $data['freetip_id'] . '</td>
                            <td>' . $data['dataposted'] . '</td>
                            <td>' . $data['country'] . '</td>
                            <td>' . $data['club_names'] . '</td>
                            <td>' . $data['category'] . '</td>
                            <td></td>
                            <td><a href="$this->getId()" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                        </tr>';
                    echo $tabledisplay;
                }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    // show all the freefitps form the database to the free tips page
    public function getfreeUnmRows() {
        try {
            $sql = "select * from freetips_tb";
            $stmt = $this->connect()->query($sql);
            if ($stmt->rowCount() > 0) {
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $indexdisplay = '<tr>
                                <td class="text-uppercase">' . $data['country'] . '</td>
                                <td class="text-center">' . $data['club_names'] . '</td>
                                <td>' . $data['category'] . '</td>
                              </tr>';
                    echo $indexdisplay;
                }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    /*   public function getID($freetip_id){
      $stmt="select * from freetips_tb where freetip_id =".$freetip_id;
      $query= $this->connect()->query($stmt);
      if($query->rowcount()>0){
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      $getById='<div class="form-group">
      <input class="form-control" name='.$row["country"].' required placeholder="Country">
      </div>
      <div class="form-group">
      <input class="form-control" name='.$row["club_names"].' required placeholder="Country">
      </div>';
      echo $getById;
      }
      }
      } */
}
