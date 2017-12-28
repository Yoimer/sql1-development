<?php

require_once('../../../private/initialize.php');

// find all the records in the database
$subject_set = find_all_subjects();
// count how many rows there are on subjects plus one since we are
// adding a new row in the top position
$subject_count = mysqli_num_rows($subject_set) + 1;
// release memory
mysqli_free_result($subject_set);

$subject = [];
$subject ["position"] = $subject_count;

?>

<?php $page_title = 'Create Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

    <div class="subject new">
        <h1>Create Subject</h1>

        <form action="<?php echo url_for('/staff/subjects/create.php'); ?>" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd><input type="text" name="menu_name" value="" /></dd>
            </dl>

            <dl>
                <dt>Position</dt>
                <dd>
                  <select name="position">
                    <?php
                      for($i=1; $i <= $subject_count; $i++) {
                        echo "<option value=\"{$i}\"";
                        if($subject["position"] == $i) {
                          echo " selected";
                        }
                        echo ">{$i}</option>";
                      }
                    ?>
                  </select>
                </dd>
            </dl>

            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1" />
                </dd>
            </dl>

            <div id="operations">
                <input type="submit" value="Create Subject" />
            </div>
        </form>

    </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
