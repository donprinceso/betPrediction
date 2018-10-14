 <?php 
 include '../include/header_start.php';
         include_once '../functions.php';?>
<title><?php echo page_title("Dashboard"); ?></title>
<?php require_once '../include/header_end.php';?>
<?php 
    include '../database/controllers.php';
    $cate = new Controllers();
    $cate->InsertCategory();
    $cate->InsertCountry();
?>
<?Php include '../pageControllers/Addpost.php';
    $add = new Addpost();
    $add->insertpost();
?>
<?Php include '../pageControllers/mostpredict.php';
    $most = new mostpredict();
    $most->Query_insertmost();
            ?>
<header class="container-fluid w3-bar w3-border w3-light-grey w3-card-4">
    <nav class="row">
        <div class="col-md-2">
            <a class="navbar-brand w3-margin-left"><i class="fa fa-setting">DashBoard</i></a>
        </div>
        <div class="col-md-10">
            <a href="#" class="w3-bar-item w3-button w3-text-green">Home</a>
            <a href="freetips-page.php" class="w3-bar-item w3-button w3-text-green">Free Tips</a>
            <a href="most-page.php" class="w3-bar-item w3-button w3-text-green">Most Predict</a>
            <a href="category-page.php" class="w3-bar-item w3-button w3-text-green">Categories</a>
            <a href="Update.php" class="w3-bar-item w3-button w3-text-green">Updating</a>
            <a href="#" class="w3-bar-item w3-button w3-text-green">country</a>
            <a href="#" class="w3-bar-item w3-button w3-text-green">User</a>
            <a href="login-wp.php" class="w3-bar-item w3-button w3-green w3-right">Log Out</a>
            <a class="w3-bar-item  w3-right"><?Php if(isset($_SESSION['email'])){
            echo $_SESSION["email"];}?></a>
        </div> 
    </nav>
</header>
<!-- second menu  -->
<div class="container w3-padding-16">
    <div class="row">
        <div class="col-md-3">
            <a class="w3-button w3-bar w3-bar-item w3-text-brown w3-round-jumbo" onclick="document.getElementById('addfreetips').style.display='block'">
                <i class="fa fa-plus"></i> Add Free Tips</a> 
        </div>
        <div class="col-md-3">
            <a class="w3-button w3-bar w3-bar-item w3-text-brown w3-round-jumbo" onclick="document.getElementById('addmost').style.display='block'">
                <i class="fa fa-plus"></i> Add Most Predict</a>
        </div>
        <div class="col-md-3">
            <a class="w3-button w3-bar w3-bar-item w3-text-brown w3-round-jumbo" onclick="document.getElementById('addcategory').style.display='block'">
                <i class="fa fa-plus"></i> Add Category</a>
        </div>
        <div class="col-md-3">
            <a class="w3-button w3-bar w3-bar-item w3-text-brown w3-round-jumbo" onclick="document.getElementById('country').style.display='block'">
                <i class="fa fa-plus"></i> Add Country</a>
        </div>
    </div>
</div><!--end of the second menu --->

<div class="w3-modal" id="addfreetips"><!-- second menu modal -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content w3-animate-zoom">
            <div class="modal-header text-success">
                    <h5 class=" modal-title">Add Free Tips</h5>
                    <button onclick="document.getElementById('addfreetips').style.display='none'"
                            class="close btn-outline-secondary"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="w3-form" action="dashborad.php" method="POST" role="form">
                    <div class="w3-section form-group">
                        <select class="w3-select form-control" name="country">
                            <option value="0">Select Country</option>
                            <?Php  $cate->GetCountry();?>
                        </select>
                    </div>
                    <div class="w3-section form-group">
                    </div>
                    <div class="w3-section form-group">
                        <input name="club_name" placeholder="Club Names" type="text" required class="form-control"/>
                    </div>
                    <div class="w3-section form-group">
                        <select name="category" required class="form-control">
                            <option value="0">Select Categories</option>
                            <?php $cate->GetCategory()?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary"onclick="document.getElementById('addfreetips').style.display='none'">Close</button>
                        <button class="btn btn-primary" type="submit" name="addpost_btn">Add Post</button>
                    </div>
                </form>
                    
                </div>
            </div>
    </div>
</div>
<!-- Add the most prediction post -->
<div class="w3-modal" id="addmost">
    <div class="modal-dialog-centered">
            <div class="w3-modal-content w3-text-white w3-card-4 w3-animate-zoom">
                <div class="modal-header">
                    <h3 class=" modal-title">Add Most Prediction</h3>
                    <button onclick="document.getElementById('addmost').style.display='none'"
                            class="close btn-outline-secondary"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="w3-form" action="dashborad.php" method="POST" role="form">
                    <div class="w3-section form-group">
                        <select class="w3-select form-control" name="country">
                            <option value="0">Select Country</option>
                            <?Php  $cate->GetCountry();?>
                        </select>
                    </div>
                    <div class="w3-section form-group">
                        <input class="form-control" placeholder="League" name="league" required/>
                    </div>
                    <div class="w3-section form-group">
                        <input name="club_names" placeholder="Club Names" type="text" required class="form-control"/>
                    </div>
                    <div class="w3-section form-group">
                        <select name="category" required class="form-control">
                            <option value="0">Select Categories</option>
                            <?php $cate->GetCategory()?>
                        </select>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" onclick="document.getElementById('addmost').style.display='none'">Close</button>
                        <button class="btn btn-primary" type="submit" name="mostpredict_btn">Add Post</button>
                    </div>
                </form>
                    
                </div>
            </div>
    </div>
</div>
<!-- The End Of Most prediction post -->
<div class="modal w3-modal" id="addcategory">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-success">
                <h5 class="modal-title">Add Category</h5>
                <button class="close" onclick="document.getElementById('addcategory').style.display='none'"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="Post" action="dashborad.php">
                    <div class="form-group">
                        <input class="form-control" name="cate-title" required placeholder="Category">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" onclick="document.getElementById('addcategory').style.display='none'">Close</button>
                        <button class="btn btn-success" name="addCategory" type="submit">Add Category</button>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>
<div class="modal w3-modal" id="country">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-success">
                <h5 class="modal-title">Add Country</h5>
                <button class="close" onclick="document.getElementById('country').style.display='none'"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="Post" action="dashborad.php">
                    <div class="form-group">
                        <input class="form-control" name="country_name" required placeholder="Country">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" onclick="document.getElementById('country').style.display='none'">Close</button>
                        <button class="btn btn-success" name="country_btn" type="submit">Add Country</button>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>

<!-- the main dash --->

<section class="container w3-white">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3>Latest Post</h3>
                </div>
                <table class="table w3-table table-striped ">
                    <thead class="w3-card-4">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Country</th>
                            <th>Clubs Names</th>
                            <th>Category</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?Php include_once '../pageControllers/Addpost.php';
                            $addpost = new Addpost();
                            $addpost->displayFree2();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-3 w3-padding">
            <div class="w3-padding-8 w3-center ">
                <div class="w3-card-4 w3-round-medium w3-padding-8">
                    <h3>Free Tips</h3>
                    <span class="w3-xxlarge"><i class="fa fa-pancil"></i>24</span>
                    <br/><br/>
                    <a class="btn btn-outline-secondary w3-large w3-green" href="freetips-page.php">View</a>
                </div>
            </div>
            <div class="w3-padding-8 w3-center">
                <div class="w3-card-4 w3-round-medium w3-padding-8">
                    <h3>Most Prediction</h3>
                    <span class="w3-xxlarge"><i class="fa fa-pancil"></i>14</span>
                    <br/><br/>
                    <a class="btn btn-outline-secondary w3-large w3-green" href="most-page.php">View</a>
                </div>
            </div>
            <div class="w3-padding-8 w3-center">
                <div class="w3-card-4 w3-round-medium w3-padding-8">
                    <h3>Categories</h3>
                    <span class="w3-xxlarge"><i class="fa fa-pancil"></i>10</span>
                    <br/><br/>
                    <a class="btn btn-outline-secondary w3-large w3-green" href="category-page.php">View</a>
                </div>
            </div>
                  
        </div>
    </div>
</section>