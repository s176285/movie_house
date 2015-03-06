<?php
require_once('f_tabs.php');
session_start();


create_headline('');
show_movie_information('W imię...', 17, 'Andrzej Chyra, Mateusz Kościukiewicz, Maja Ostaszewska', 7);
show_menu_nav_movie();


create_footer();

?>