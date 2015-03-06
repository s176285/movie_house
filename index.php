<?php
 require_once('f_tabs.php');
 session_start();
 @ $user_name = $_POST['user_name'];
 @ $pass = $_POST['pass'];
 
 if ($user_name && $pass) {
 		loguj($user_name, $pass);
 		$_SESSION['correct_id'] = $user_name; //
 		
   }
 
create_headline('');

  if (!isset($_SESSION['correct_id'])){
 show_form_log();
}

show_information(); 
 

 show_menu_nav_movie();

 create_footer();

?>
