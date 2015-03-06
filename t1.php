<?php
require_once('f_tabs.php');
session_start();


create_headline('');
show_movie_information('Bez litości:', 1, 'Denzel Washington, Marton Csokas, Chloë Grace Moretz', 10);
show_menu_nav_movie();


create_footer();

?>