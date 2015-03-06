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
								
								<th>Film Horror</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<td>
									<div>
										<a href="horr1.php"><img src="img/9.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Jako w piekle tak i na ziemi
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="horr2.php"><img src="img/10.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											[REC]4:Apokalipsa
										</h3>
										<p></p>
									</div>
								</td>
							</tr>
							<tr>
								
								<td>
									<div>
										<a href="horr3.php"><img src="img/11.jpg" alt="Photo"
											border="0" align="left" valign="bottom" height="85" width="60" />
										<h3>
											Annabelle
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