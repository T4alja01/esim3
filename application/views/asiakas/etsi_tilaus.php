<!--
7.11 lisätty
-->
<h1>Valitun asiakkaan tilaukset</h1>
<form method="POST" action="etsi_tilaus">
<select name="valittu_id">
<?php
foreach ($asiakkaat as $rivi) {
	echo '<option value="'.$rivi['id_asiakas'].'">'.
	$rivi['etunimi'].' '.
	$rivi['sukunimi'].'</option>';
}
?>
</select>
<input type="submit" name="btnEtsi" value="Etsi"/>
</form>
<br>
<?php
if(isset($tilaus)) {
	echo "<TABLE BORDER=1>";
	echo "<TR><TD>Sukunimi</TD><TD>Tuote</TD></TR>";
	foreach ($tilaus as $rivi) {
		echo '<tr><td>'.$rivi['sukunimi'].'</td><td>'.$rivi['tuote'].'</td></tr>';
	}
	echo "</TABLE>";
}
?>