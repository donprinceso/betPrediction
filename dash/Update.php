<?php 
 include '../include/header_start.php';
         include_once '../functions.php';?>
<title><?php echo page_title("Editing"); ?></title>
<?php require_once '../include/header_end.php';?>
<?php 
    include '../database/controllers.php';
    $cate = new Controllers();
?>

    <?Php echo $cate->GetCategory();?>
