<?php

session_start();

@ $user_name = $_POST['user_name'];
@ $pass = $_POST['pass'];

require_once('f_tabs.php');

create_headline('');

if ($user_name && $pass) {
	log_in($user_name, $pass);

	$_SESSION['correct_id'] = $user_name;
		
}

 if (@ !$_SESSION['correct_id']) {
	
	?>
<div class="row marketing">
	<div class="col-lg-8">
	<p>Tylko zalogowani użytkownicy mogą przeglądać tę stronę.</p>
	</div>

	<?php
	show_menu_nav_main();
	create_footer();
	exit;
}


show_orders();


show_menu_nav_main();

show_user_menu();



create_footer();
?>
