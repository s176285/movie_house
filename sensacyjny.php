<?php
require_once('f_tabs.php');
session_start();


create_headline('');

?>
<div class="row marketing">
	<div class="col-lg-8">
	<p>Filmy wg kategorii</p>
	
	<table class="table">
						<thead>
							<tr>
								
								<th>Film Sensacyjny</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<td>
									<div>
										<a href="sens1.php"><img src="img/18.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Zakazane imperium - 4
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="sens2.php"><img src="img/19.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Kochanie, chyba Cię zabiłem
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="sens3.php"><img src="img/20.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Tokarev, zabójca z przeszłości
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
	
	</div>

<?php

show_menu_nav_main();
create_footer();


?>