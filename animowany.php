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
								
								<th>Film Animowany</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<td>
									<div>
										<a href="anim1.php"><img src="img/6.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Siedmiu krasnoludków ratuje śpiącą królewnę</a>
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="anim2.php"><img src="img/7.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Pudłaki
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="anim3.php"><img src="img/8.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Liga sprawiedliwości:Tron Atlantydy
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