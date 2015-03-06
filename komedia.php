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
								
								<th>Film Komedia</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<td>
									<div>
										<a href="kome1.php"><img src="img/12.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Powiedzmy sobie wszystko
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="kome2.php"><img src="img/13.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Dzień dobry Kocham Cię
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="kome3.php"><img src="img/14.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Jak dogonić szczęście
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