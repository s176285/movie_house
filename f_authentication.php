<?php

require_once('f_database.php');

//rejestracja osoby
function register($user_name, $email, $pass) {

// laczenie z baza danych
  $connect = connect_db();

  // sprawdzenie, czy nazwa u�ytkownika nie powtarza si�
  $result = $connect->query("select * from users where user_name='".$user_name."'");
  if (!$result) {
     throw new Exception('Nieprawidlowe zapytanie.');
  }
  // sprawdza czy jest taki uzytkownik
  if (@ $connect->num_rows>0) {
     throw new Exception('Istnieje uzytkownik o takiej nazwie.');
  }

 //zalada uzytkownika
  $result = $connect->query("insert into users values
                       ('".$user_name."', sha1('".$pass."'), '".$email."')");
  if (!$result) {
    throw new Exception('Rejestracja w bazie nie powiodla sie prosze sprobowac pozniej.');
  }

  return true;
}

// logowanie i sprawdzanie czy uzytkownik istnieje
function log_in($user_name, $pass) {

  // laczenie z baza danych
  $connect = connect_db();

  // sprawdzenie uzytkownika i hasla
  $result = $connect->query("select * from users
                         where user_name='".$user_name."'
                         and pass = sha1('".$pass."')");
  if (!$result) {
     throw new Exception('Logowanie nie powiodlo sie.');
  }

  if ($result->num_rows>0) {
     return true;
  } else {
     throw new Exception('Logowanie nie powiod�o sie.');
  }
}
// sprawdzenie czy uzytkownik jest zalogowany 
function check_user() {
  if (isset($_SESSION['correct_id'])) {
      echo "Zalogowano jako <b>".$_SESSION['correct_id'].".</b></br><br />";
  }
}



?>