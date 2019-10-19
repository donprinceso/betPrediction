<?php
include '../include/header_start.php';
include_once '../functions.php';
?>
<title> <?php echo page_title("User Login"); ?> </title>
<?php require_once '../include/header_end.php';?>

<div class="row" style="margin-top: 20vh">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-4 col-sm-4 w3-card-4 w3-padding-24">
        <form action="" method="POST"  class="w3-margin-top">
            <h2 class="w3-xlarge">Login</h2>
            <div class="error_messg"> </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Email" name="email" required/>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="Password" name="password" required/>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="" value="ON" /> Check Me Out
                </label>
            </div>
            <button class="btn btn-success btn-block" name="" type="submit">Login</button>
        </form>
    </div>
    <div class="col-md-4 col-sm-4"></div>
</div>
