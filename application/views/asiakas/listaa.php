<!--
7.11 lisätty
-->
<h1>Asiakkaat</h1>
<TABLE BORDER=1>
<TR><TH>Etunimi</TH><TH>Sukunimi</TH><TH>Sähköposti</TH><TH<Muokkaa></TR>
<?php
foreach ($asiakkaat as $rivi) {
	echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.
	$rivi['email'].'</td></tr>';
	echo '<a href="naytaMuokattavaAsiakas/'.$rivi[id_asiakas']
	">Muokkaa</a>';
	echo "</td></tr>";
}
?>
</TABLE>

