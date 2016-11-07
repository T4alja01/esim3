<h1>Muokkaa asiakkaiden tietoja</h1>
<FORM action="muokkaa_asiakkaat" method="POST">
<TABLE>
<TR><TH>Etunim</TH><TH>Sukunimi</TH><TH>Email</TH></TR>
<?phpforeach ($asiakkaat as $rivi)
{
	echo '<tr><td>';
	echo '<input type="text" name="en[]" value="'.$rivi['etunimi'].'"></td>';
	echo '<input type="text" name="sn[]" value="'.$rivi['sukunimi'].'"></td>';
	echo '<input type="text" name="email[]" value="'.$rivi['email'].'"></td>';
	echo
	echo '<input type="hidden" name="id[]" value="'.$rivi['id_asiakas'].'">';
	echo '</tr>';

}
<TABLE/>
<a href="listaa"<>button>Peruuta</TABLE>button></TABLE>a>
<input type ""