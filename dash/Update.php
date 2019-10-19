<?php require_once '../include/header_start.php';
    include_once '../functions.php';?>
<title><?php echo page_title("Free Tips"); ?></title>
<?php require_once '../include/header_end.php';?>
<?php require_once 'navgetion-bar.php';?>
<form>
    <section class="w3-padding-12">
        <div class="container">
            <div class="row w3-row">
                <div class="col-md-4">
                    <button class="btn btn-success">Deleted</button>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="">
                            <button class="btn btn-secondary">Update</button>
                            
                            <button class="btn btn-success">Deleted</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container w3-white">
        <div class="row w3-row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-success">List Of Free Tip</h4>
                    </div>
                        <?php 
                            include '../pageControllers/Addpost.php';
                                 $add=new Addpost();
                         ?>

                        <?Php echo $add->getid();?>
   
                 </div>
            </div>
        </div>           
    </div>
</form>

