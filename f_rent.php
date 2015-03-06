<?php
require_once('f_database.php');


function get_url_user($user_name) {
  $connect = connect_db();
  $result = $connect->query("select url
                         from tab
                         where user_name = '".$user_name."'");
  if (!$result) {
    return false;
  }

  $tab_url = array();
  for ($counter = 0; $row = $result->fetch_row(); ++$counter) {
    $tab_url[$counter] = $row[0];
  }
  return $tab_url;
}



?>
