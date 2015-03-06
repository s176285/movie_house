<?php
require_once('f_tabs.php');
session_start();


create_headline('');
show_movie_information('Kochanie, chyba Cię zabiłem', 19, 'Zbigniew Zamachowski, Arkadiusz Jakubik, Ireneusz Czop', 6);
show_menu_nav_movie();


create_footer();

?>