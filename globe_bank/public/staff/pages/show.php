<?php require_once('../../../private/initialize.php'); ?>

<?php
// Values are always strings using super global $_GET


//$page = $_GET['page'];
//echo gettype($page);
// 'string'

//$page_as_int = (int) $_GET['page'];
//echo gettype($page_as_int);
// 'integer'
?>

<?php

//$id = $_GET['id'] ?? '1'; // PHP > 7.0

$id = isset($_GET['id']) ? $_GET['id'] : 'DEFAULT VALUE';

?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <a class="back-link" href="<?php echo url_for ('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

    <div class="page show">

        Page ID: <?php echo h($id); ?>

    </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>