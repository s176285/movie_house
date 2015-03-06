<?php
// wyswietlanie naglowka
function create_headline($title) {
	?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />


<title><?php echo $title;?></title>


<!-- CSS - definicja -->
<link rel="stylesheet" type="text/css" href="css.css" />



<!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="sticky-footer.css" rel="stylesheet">

<!-- my css -->
<link href="./css/main.css" type ="text/css" rel="stylesheet">

</head>

<body>

	<div class="container">
		<div class="header">



			<div class="jumbotron" style="background-color: black; color: white">
				<h2 style="text-align: center">
					<b>Movie House</b>
				</h2>

				<h3 style="text-align: center; font-style: italic;">
					Witamy w naszej wypozyczalni filmów. Posiadamy bogatą kolekcję 
					filmów na różnego rodzaju nosnikach. Tutaj każdy znajdzie coś dla siebie.
				</h3>

				<!--wciecie w menu-->
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<blockquote>

						<h3 style="text-align: center; font-style: italic;">Nowości w naszej ofercie:</h3>

						<p class="lead">
							<img src="img/n1.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n2.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n3.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" />
							<img src="img/n4.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n5.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n6.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n7.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n8.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n9.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n10.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n11.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n12.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n13.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n14.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
							<img src="img/n15.jpg"
								alt="photo" border="0" align="left" valign="bottom" height="85"
								width="60" /> 
						</p>
					</blockquote>
				</div>
			</div>
		</div>


		<hr />
<?php
	if ($title) {
		create_title ( $title );
	}
}
function create_footer() {
	// wyświetlenie stopki HTML
	?>
  </div>
	</div>
	</div>
	<p></p>
	<footer class="footer">
		<div class="container" style="background: black">
			<p class="muted credit" style="color: white; text-align: center">&copy; Movie House 
				Wszystkie prawa zastrzeżone</p>
		</div>
	</footer>
	<!-- sktypty odpowiadaja za tworzenie tabeli -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script
		src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
function create_title($title) {
	// wyświetlenie tytułu
	?>
<h2><?php echo $title;?></h2>
<?php
}
function create_url($url, $name) {
	// wyświetlenie URL-a jako łącza i nowa linia
	?>
<br />
<a href="<?php echo $url;?>"><?php echo $name;?></a>
<br />
<?php
}
function show_information() {
	?>
<div class="row marketing" style="background: white">
	<div class="col-lg-8">
		</br></br>
		<h2>TOP 5</h2>
		<h3>
			<div>
			<a href="t1.php"><img src="img/1.jpg" alt="Photo"
				border="0" align="left" valign="bottom" height="85" width="60" />
			<h3>
				Bez litości</a>
			</h3>
			<p>Obsada: Denzel Washington, Marton Csokas, Chloë Grace Moretz</p>
		</div>
		<br>

		<div>
			<a href="t2.php"><img src="img/2.jpg" alt="Photo"
				border="0" align="left" valign="bottom" height="85" width="60" />
			<h3>
				Nie jesteś sobą</a>
			</h3>
			<p>Obsada: Josh Duhamel, Emmy Rossum, Hilary Swank</p>
		</div>
		<br>

		<div>
			<a href="t3.php"><img src="img/3.jpg" alt="Photo"
				border="0" align="left" valign="bottom" height="85" width="60" />
			<h3>
				Magia w blasku księżyca</a>
			</h3>
			<p>Obsada: Emma Stone, Colin Firth, Simon McBurney</p>
		</div>
		<br>
		
		<div>
			<a href="t4.php"><img src="img/4.jpg" alt="Photo"
				border="0" align="left" valign="bottom" height="85" width="60" />
			<h3>
				Zanim zasnę</a>
			</h3>
			<p>Obsada:  Nicole Kidman, Colin Firth, Mark Strong</p>
		</div>
		<br> 

		<div>
			<a href="t5.php"><img src="img/5.jpg" alt="Photo"
				border="0" align="left" valign="bottom" height="85" width="60" />
			<h3>
				Bardzo poszukiwany człowiek</a>
			</h3>
			<p>Obsada:  Philip Seymour Hoffman, Rachel McAdams</p>
		</div>
		<br>
	</div>  
</h3>



  <?php
}

function show_orders() {
	?>
<div class="row marketing">
		<div class="col-lg-8">
			<div>
		<?php 
			if ($tab_url = get_url_user($_SESSION['correct_id'])) {
			  show_url_user($tab_url);
			}
			?>
		</div>
		</div>  

  <?php
}

function show_movie_information($title, $foto_no, $actors, $price) {
	?>
<div class="row marketing">
			<div class="col-lg-8">
				<h2><?php echo $title;?></h2>
				<div>
					<img src="img/<?php echo $foto_no ?>.jpg" alt="Photo" border="0"
						align="left" valign="bottom" height="200" width="150" />
					<p>
					
					
					<h3>Obsada:</h3>
					</p>
					<p><?php echo $actors ?></p>
					<br>
					<p>
					
					
					<h3>Koszt wypożyczenia <?php echo $price ?> złotych.</h3>
					</p>
					<br>

					<button class="btn btn-sm btn-primary" type="button"
						onclick="location='f_rent.php'">Wypożycz</button>
					<br> <br> <br>


				</div>
				<div>
				
				<!-- Kod odposiada za tworzenie recenzji oraz ich wyswietlanie -->
					<table class="table">
						<thead>
							<tr>
								<th>Użytkownik</th>
								<th>Recenzja</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Bartek</td>
								<td>Super film polecam!!!</td>
							</tr>
							<tr>
								<td>Ola</td>
								<td>Ekstra</td>
							</tr>
							<tr>
								<td>Michał</td>
								<td>Fajna gra aktorska...</td>
							</tr>
						</tbody>
					</table>

					<form role="form" method="post" action="./?book=refleksje">
						<div class="form-group">
							<label>Recenzja:</label>
							<textarea name="tresc" class="form-control" rows="3"></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-default">Wyślij</button>
					</form>
				</div>


			</div>  



  <?php
}

function show_menu_nav_movie() {
	?>
 
	<div class="col-lg-4">

				<p>
					<button class="btn btn-danger" type="button"
						style="width: 400px" onclick="location='../index.php'">Strona
						główna</button>
				</p>
<?php 			
			if (isset($_SESSION['correct_id'])) {
		      echo "<p><button class=\"btn btn-danger\" type=\"button\"
			style=\"width:400px\" onclick=\"location='../rents.php'\">Wypożyczenia</button></p>";
		  } else echo "<p><button class=\"btn btn-danger\" type=\"button\"
			style=\"width:400px\" onclick=\"location='../index.php'\">Zaloguj</button></p>";
?>		  
		  <p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='animowany.php'">Animowany</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='horror.php'">Horror</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='komedia.php'">Komedia</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='obyczajowy.php'">Obyczajowy</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='sensacyjny.php'">Sensacyjny</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='thriller.php'">Thriller</button>
				</p>
				
			
<?php 
if (isset($_SESSION['correct_id'])) {
	echo "<p><button class=\"btn btn-danger\" type=\"button\"
			style=\"width:150px\" onclick=\"location='../log_out.php'\">wyloguj</button></p>";
}
?>
	</div>

<?php
}
function show_menu_nav_main() {
	?>
 
	<div class="col-lg-4">
<?php 
check_user();
?>
				<p>
					<button class="btn btn-danger" type="button"
						style="width: 400px" onclick="location='index.php'">Strona główna</button>
				</p>
<?php 			
			if (isset($_SESSION['correct_id'])) {
		      echo "<p><button class=\"btn btn-danger\" type=\"button\"
			style=\"width:400px\" onclick=\"location='rents.php'\">Wypożyczenia</button></p>";
		  } else echo "<p><button class=\"btn btn-danger\" type=\"button\"
			style=\"width:400px\" onclick=\"location='index.php'\">Zaloguj</button></p>";
?>		  
		  <p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='animowany.php'">Animowany</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='horror.php'">Horror</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='komedia.php'">Komedia</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='obyczajowy.php'">Obyczajowy</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='sensacyjny.php'">Sensacyjny</button>
				</p>
				<p>
					<button class="btn btn-warning" type="button"
						style="width: 400px" onclick="location='thriller.php'">Thriller</button>
				</p>
			
<?php 
if (isset($_SESSION['correct_id'])) {
	echo "<p><button class=\"btn btn-danger\" type=\"button\"
			style=\"width:400px\" onclick=\"location='log_out.php'\">wyloguj</button></p>";
}
?>
	</div>

<?php
}

function show_form_log() {
	?>
 
	<div class="col-lg-8" style="background: white">

				<p>
					<a href="form_registration.php">Zarejestruj się</a>
				</p>
				<form method="post" action="index.php" style="margin: auto; text-align: center;">
					<table bgcolor="#cccccc" >
						<tr>
							<td colspan="2"><b>Logowanie:</b></td>
						
						
						<tr>
							<td>Nazwa użytkownika:</td>
							<td><input type="text" name="user_name" /></td>
						</tr>
						<tr>
							<td>Hasło:</td>
							<td><input type="password" name="pass" /></td>
						</tr>
						<tr>
							<td colspan="2" align=center><input type="submit"
								value="Logowanie" /></td>
						</tr>
						<tr>
							<td colspan="2"><a href="remind_pass.php">Zapomniałeś
									hasła?</a></td>
						</tr>
					</table>
				</form>
			</div>

<?php
}
function show_reg_form() {
	?>
 <form method="post" action="new_registration.php">
				<table bgcolor="#cccccc">
					<tr>
						<td>Adres poczty elektronicznej:</td>
						<td><input type="text" name="email" size="30" maxlength="100"></td>
					</tr>
					<tr>
						<td>Preferowana nazwa użytkownika <br />(maksymalnie 25 znaków):
						</td>
						<td valign="top"><input type="text" name="user_name" size="25"
							maxlength="25" /></td>
					</tr>
					<tr>
						<td>Hasło <br />(pomiędzy 6 i 50 znaków):
						</td>
						<td valign="top"><input type="password" name="pass" size="50"
							maxlength="50" /></td>
					</tr>
					<tr>
						<td>Potwierdź hasło:</td>
						<td><input type="password" name="pass2" size="50" maxlength="50" /></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit"
							value="Rejestracja"></td>
					</tr>
				</table>
			</form>
<?php
}
function show_url_user($tab_url) {
	// wyswietlenie URL-i użytkownika
	
	// ustawienie zmiennej globalnej, aby możliwe było sprawdzanie strony
	global $tab_zak;
	$tab_zak = true;
	?>
  <br />
			<form name="tab_zak" action="del_tab.php" method="post">
				<table width="300" cellpadding="2" cellspacing="0">
  <?php
	$kolor = "#cccccc";
	echo "<tr bgcolor=\"" . $kolor . "\"><td><strong>Aktualnie Wypożyczone :</strong></td>";	
	if ((is_array ( $tab_url )) && (count ( $tab_url ) > 0)) {
		foreach ( $tab_url as $url ) {
			if ($kolor == "#cccccc") {
				$kolor = "#ffffff";
			} else {
				$kolor = "#cccccc";
			}
			echo "<tr bgcolor=\"" . $kolor . "\"><td><a href=\"" . $url . "\">" . htmlspecialchars ( $url ) . "</a></td></tr>";
		}
	} else {
		echo "<tr><td>Brak zapisanych zakładek</td></tr>";
	}
	?>
  </table>
			</form>
<?php
}

function show_add_tab_form() {
	// wyświetlenie formularza do dodania nowych zakładek
	?>
<form name="tab_zak" action="add_tab.php" method="post">
				<table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
					<tr>
						<td>Nowa zakładka:</td>
						<td><input type="text" name="new_url" value="http://" size="30"
							maxlength="255"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit"
							value="Dodaj zakładkę"></td>
					</tr>
				</table>
			</form>
<?php
}
function show_pass_form() {
	// wyświetlenie formularza zmiany hasła
	?>
<div class="row marketing">
				<div class="col-lg-8">
					<br />
					<form action="change_pass.php" method="post">
						<table width="250" cellpadding="2" cellspacing="0"
							bgcolor="#cccccc">
							<tr>
								<td>Poprzednie hasło:</td>
								<td><input type="password" name="old_pass" size="50"
									maxlength="50" /></td>
							</tr>
							<tr>
								<td>Nowe hasło:</td>
								<td><input type="password" name="new_pass" size="50"
									maxlength="50" /></td>
							</tr>
							<tr>
								<td>Powtorzenie nowego hasła:</td>
								<td><input type="password" name="new_pass2" size="50"
									maxlength="50" /></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="submit"
									value="Zmiana hasła" /></td>
							</tr>
						</table>
						<br />
					</form>
				</div>
<?php
}
;
function show_remind_form() {
	// wyświetlenie formularza HTML do ustawiania nowych haseł
	?>
   <br />
				<form action="remind_pass.php" method="post">
					<table width="250" cellpadding="2" cellspacing="0"
						bgcolor="#cccccc">
						<tr>
							<td>Nazwa użytkownika</td>
							<td><input type="text" name="user_name" size="25" maxlength="25" /></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit"
								value="Zmiana hasła" /></td>
						</tr>
					</table>
					<br />
<?php
}
function show_recommend_url($tab_url) {
	// zamiast wyświetlać URL-e użytkownika, wyświetla rekomendacje
	?>
  <br />
					<table width="300" cellpadding="2" cellspacing="0">
<?php
	$kolor = "#cccccc";
	echo "<tr bgcolor=\"" . $kolor . "\"><td><strong>Rekomendacje</strong></td></tr>";
	if ((is_array ( $tab_url ) && count ( $tab_url ) > 0)) {
		foreach ( $tablica_url as $url ) {
			if ($kolor == "#cccccc") {
				$kolor = "#ffffff";
			} else {
				$kolor = "#cccccc";
			}
			echo "<tr bgcolor=\"" . $kolor . "\">
            <td><a href=\"" . $url . "\">" . htmlspecialchars ( $url ) . "</a></td></tr>";
		}
	} else {
		echo "<tr><td>Aktualnie brak rekomendacji.</td></tr>";
	}
	?>
  </table>
<?php
}

?>