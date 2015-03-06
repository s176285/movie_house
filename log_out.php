<?php

session_start();

require_once('f_tabs.php');
$old_user = $_SESSION['correct_id'];

// czy logowanie nastąpilo
unset($_SESSION['correct_id']);
$des_result = session_destroy();

create_headline('');
?>
<div class="row marketing">
	<div class="col-lg-8">
<?php 
if (!empty($old_user)) {
  if ($des_result) {

    echo 'Wylogowano pomyślnie.<br />';
  } else {

    echo 'Wylogowanie niemożliwe.<br />';
  }
} else {

  echo 'Użytkownik niezalogowany.<br />';

}
?>
	</div>
	
 
	<div class="col-lg-4">
	
			<p><button class="btn btn-danger" type="button"
			style="width:400px" onclick="location='index.php'">Strona główna</button></p>
<?php 			
			if (isset($_SESSION['correct_id'])) {
		      echo "<p><button class=\"btn btn-danger\" type=\"button\"
			style=\"width:300px\" onclick=\"location='f_rent.php'\">Zamówienia</button></p>";
		  } else echo "<p><button class=\"btn btn-danger\" type=\"button\"
			style=\"width:300px\" onclick=\"location='index.php'\">Zaloguj</button></p>";
?>		  
		  <p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='animowany.php'">Animowany</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='horror.php'">Horror</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='komedia.php'">Komedia</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='obyczajowy.php'">Obyczajowy</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='sensacyjny.php'">Sensacyjny</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='thriller.php'">Thriller</button>
				</p>
			
<?php 


create_footer();

?>
