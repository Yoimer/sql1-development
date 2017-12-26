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

$subject = find_subject_by_id($id);

?>

<?php $page_title = 'Show Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <a class="back-link" href="<?php echo url_for ('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

    <div class="subject show">

      <h1>Subject: <?php echo h($subject['menu_name']); ?></h1>

      <div class="attributes">
        <dl>
          <dt>Menu Name</dt>
          <dd><?php echo h($subject['menu_name']); ?></dd>
        </dl>

        <dl>
          <dt>Position</dt>
          <dd><?php echo h($subject['position']); ?></dd>
        </dl>

        <dl>
          <dt>Visible</dt>
          <dd><?php echo $subject['visible'] == '1' ? 'true' : 'false'; ?></dd>
        </dl>
      </div>

    </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
