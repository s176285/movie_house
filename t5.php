<?php
require_once('f_tabs.php');
session_start();


create_headline('');
show_movie_information('Bardzo poszukiwany człowiek', 5, 'Philip Seymour Hoffman, Rachel McAdams', 8);
show_menu_nav_movie();


create_footer();

?>