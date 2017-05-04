<html>
<head>
<title> Formular "Posta medicala" </title>
</head>
<body>
<form method="POST" action="readxml.php">
<input type="text" name="nume" placeholder="Nume"/><br>
<input type="text" name="prenume" placeholder="Prenume"/><br>
<input type="number" name="varsta" placeholder="Varsta"/><br>
Sex:<br>
<input type="radio" name="sex" value="Masculin" checked> Masculin <br>
<input type="radio" name="sex" value="Feminin"> Feminin<br>
<input type="number" name="data nasterii" placeholder="Data_nasterii"/><br>
<input type="number" name="Telefon" placeholder="Telefon"/><br>
<input type="text" name="Adresa" placeholder="Adresa"/><br>
<input type="number" name="Numar Strada" placeholder="Numar_Strada"/><br>
<input type="text" name="Localitate" placeholder="Localitate"/><br>
<input type="text" name="Judet" placeholder="Judet"/><br>
<input type="number" name="Cod Postal" placeholder="Cod_postal"/><br>
Temperatura Medicamente<br>
<input type="radio" name="Temperatura Medicamente" value="Normala" checked> Normala<br>
<input type="radio" name="Temperatura Medicamente" value="Scazuta"> Scazuta<br>
<input type="submit" name="Trimite" value="Trimite"/>
</form>
</body>
</html>