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

echo h($id) ;

/*

includes page as parameter in GET query from browser

echo '<br/>';

$page = $_GET['page'];

echo $page;*/

?>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br />
<a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br />
<a href="show.php?name=<?php echo u('!#*?'); ?>">Link</a><br />


