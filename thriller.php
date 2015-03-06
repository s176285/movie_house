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
								
								<th>Film Thriller</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<td>
									<div>
										<a href="thri1.php"><img src="img/21.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Śmieć
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="thri2.php"><img src="img/22.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Zaginiona dziewczyna
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="thri3.php"><img src="img/23.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											November Man
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