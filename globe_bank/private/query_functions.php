<?php

  function find_all_subjects() {
    global $db;

    $sql = "SELECT * FROM subjects ";
    $sql .= "ORDER BY position ASC"; // ascending order
    $result = mysqli_query($db, $sql);
    return $result;
  }

?>
