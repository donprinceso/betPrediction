<?php require_once '../include/header_start.php';?>
<title></title>
<?php require_once '../include/header_end.php';?>
<?php require_once 'navgetion-bar.php';?>

<section class="w3-padding-12">
    <div class="container">
        <div class="row w3-row">
            <div class="col-md-6">
                <h1><i class="fa fa-book"></i>Most Prediction</h1> 
            </div>
            
            <div class="col-md-6 offset-md-6">
                <form>
                    <div class="form-group input-group">
                        <input class="form-control" name="search" placeholder="Search Something..." type="text"/>
                        <span class="input-group-btn">
                            <button class="btn btn-success">Search</button>
                        </span> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="container w3-white">
    <div class="row w3-row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-success">List Of Most Prediction</h4>
                </div>
                <table class="table w3-table table-striped">
                    <thead class="w3-card-4">
                        <tr>
                            <th>#</th>
                            <th>Country</th>
                            <th>League</th>
                            <th>Date Posted</th>
                            <th>Clubs names</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Home</td>
                            <td>9/9/2018</td>
                        </tr>
                    </tbody>
                </table>
                <nav class="m1-4">
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>