<?php
require_once('f_tabs.php');
session_start();


create_headline('');

?>
<div class="row marketing">
	<div class="col-lg-8">
	<p>Tutaj wyswietlane bedą</p>
	
	<table class="table">
						<thead>
							<tr>
								
								<th>Film według gatunku (...)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<td>tytul1</td>
							</tr>
							<tr>
								
								<td>tytul12</td>
							</tr>
							<tr>
								
								<td>tytul13</td>
							</tr>
						</tbody>
					</table>
	
	</div>

<?php

show_menu_nav_main();
create_footer();


?>