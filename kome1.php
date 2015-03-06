<?php
require_once('f_tabs.php');
session_start();


create_headline('');
show_movie_information('Powiedzmy sobie wszystko', 12, 'Jason Bateman, Tina Fey, Jane Fonda', 8);
show_menu_nav_movie();


create_footer();

?>