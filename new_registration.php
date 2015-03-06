<?php

  $email=$_POST['email'];
  $user_name=$_POST['user_name'];
  $pass=$_POST['pass'];
  $pass2=$_POST['pass2'];

   require_once('f_tabs.php');

   session_start();
     create_headline('');

     ?>
     <div class="row marketing">
     	<div class="col-lg-8">
     <?php 

   try {

     if (!fill_in($_POST)) {
        throw new Exception('Formularz wypełniony nieprawidłowo. Spróbuj jeszcze raz.');
     }

     if (!correct_mail($email)) {
        throw new Exception('Nieprawidłowy adres poczty elektronicznej. Spróbuj jeszcze raz.');
     }

     if ($pass != $pass2) {
        throw new Exception('Niepasujące do siebie hasła. proszę wrócić i spróbować ponownie.');
     }

     if (strlen($user_name) > 25) {
        throw new Exception('Nazwa uzytkownika nie może mieć więcej niż 25 znaków. Spróbuj jeszcze raz.');
     }

     if ((strlen($pass) < 6) || (strlen($pass) > 50)) {
        throw new Exception('Hasło musi mieć co najmniej 6 i maksymalnie 50 znaków. Spróbuj jescze raz.');
     }

     register($user_name, $email, $pass);

     $_SESSION['correct_id'] = $user_name;


     echo 'Rejestracja zakończyła się sukcesem. ';
     
	
     ?>
          </div>
     <?php 
   
    show_menu_nav_main();
     
    create_footer();
   }
   catch (Exception $e) {
     echo $e->getMessage();
     ?>
     </div>
     <?php 
     show_menu_nav_main();  
     create_footer();
     exit;
   }
?>