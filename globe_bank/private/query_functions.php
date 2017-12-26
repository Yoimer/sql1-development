<?php

  function find_all_subjects() {
    global $db;

    $sql = "SELECT * FROM subjects ";
    $sql .= "ORDER BY position ASC"; // ascending order
    //uncomment when troubleshooting
    //echo $sql . "<br>";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

?>
