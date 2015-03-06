<?php
require_once('f_tabs.php');
session_start();


create_headline('');
show_movie_information('Mój biegun', 16, 'Bartłomiej Topa, Magdalena Walach, Maciej Musiał', 7);
show_menu_nav_movie();


create_footer();

?>