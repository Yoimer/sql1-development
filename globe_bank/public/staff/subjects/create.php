<?php

require_once('../../../private/initialize.php');

/* if id is not present, just redirect to index */
$menu_name = '';
$position = '';
$visible = '';

/* if not post request, just show page */

if(is_post_request()) {

    // Handle form values sent by new.php

    $menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : 'DEFAULT VALUE';
    $position  = isset($_POST['position']) ? $_POST['position'] : 'DEFAULT VALUE';
    $visible = isset($_POST['visible']) ? $_POST['visible'] : 'DEFAULT VALUE';

    $result = insert_subject($menu_name, $position, $visible);
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/staff/subjects/show.php?id=' . $new_id));

} else {
  redirect_to(url_for('/staff/subjects/new.php'));
}

?>
