<?php include '../include/header_start.php';
    include_once '../functions.php';?>
<title><?php echo page_title("User Register"); ?></title>
<?php require_once '../include/header_end.php';?>


<div class="row" style="margin-top: 20vh">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-4 col-sm-4 w3-card-4 w3-padding-24">
        <form action="" method="POST"  class="w3-margin-top">
            <h2 class="w3-xlarge">Registation</h2>
            <div class="error_messg"></div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Firstname" name="firstname" required/>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Lastname" name="lastname" required/>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Email" name="email" required/>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="Password" name="password" required/>
            </div>
            <div class="form-group">
                <div class="form-group">
                  <label for="plane">select a Plan</label>
                  <select class="form-control" name="plane" id="plane">
                    <option>Free</option>
                    <option>Pro</option>
                    <option>Permium</option>
                  </select>
                </div>
            </div>
            <button class="btn btn-success btn-block w3-round-jumbo" name="" type="submit">Register</button>
        </form>
        <br>
        <p> Already Has An Account <a href="login-wp.php" class="w3-bar-item w3-button w3-text-green w3-round-jumbo">Login</a></p>
    </div>
    <div class="col-md-4 col-sm-4"></div>
</div>
