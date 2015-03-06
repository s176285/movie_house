<?php

function fill_in($var_form) { //czy zmienna maja value
  foreach ($var_form as $key => $value) {
     if ((!isset($key)) || ($value == '')) {
        return false;
     }
  }
  return true;
}

function correct_mail($address) {
  if (@ ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $address)) { // sprawdzenie adresu
    return true;
  } else {
    return false;
  }
}

?>
