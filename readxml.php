<?php
$xml=new DomDocument ("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("xml_file.xml");
if (!$xml)
{
	$xml_file=$xml->createElement("xml_file");
	$xml->appendChild("xml_file");
}
else
{
	$xml_file=$xml->firstChild;
}
if(isset($_POST['submit']))
{
	$fnume=$_POST['Nume'];
	$fprenume=$_POST['Prenume'];
	$fvarsta=$_POST['Varsta'];
	$fsex=$_POST['Sex'];
	$ftelefon=$_POST['Telefon'];
	$fadresa=$_POST['Adresa'];
	$fnumar_strada=$_POST['Numar Strada'];
	$flocalitate=$_POST['Localitate'];
	$fjudet=$_POST['Judet'];
	$fcod_postal=$_POST['Cod Postal'];
	$ftemperatura_medicamente=$_POST['Temperatura Medicamente'];
	$emp=$xml->createElement("pacienti");
	$xml_file->appendChild($emp);
	$name=$xml->createElement("Nume",$fnume);
	$emp->appendChild($Nume);
	$name=$xml->createElement("Prenume",$fprenume);
	$emp->appendChild($Prenume);
	$name=$xml->createElement("Varsta",$fvarsta);
	$emp->appendChild($Varsta);
	$name=$xml->createElement("Sex",$fsex);
	$emp->appendChild($Sex);
	$name=$xml->createElement("Telefon",$ftelefon);
	$emp->appendChild($Telefon);
	$name=$xml->createElement("Adresa",$fadresa);
	$emp->appendChild($Adresa);
	$name=$xml->createElement("Numar Strada",$fnumar_strada);
	$emp->appendChild($Numar_Strada);
	$name=$xml->createElement("Localitate",$flocalitate);
	$emp->appendChild($Localitate);
	$name=$xml->createElement("Judet",$fjudet);
	$emp->appendChild($Judet);
	$name=$xml->createElement("Cod Postal",$fcod_postal);
	$emp->appendChild($Cod_postal);
	$name=$xml->createElement("Temperatura Medicamente",$ftemperatura_medicamente);
	$emp->appendChild($Temperatura_Medicamente);
	echo"<xmp>".$xml->saveXML()."</xmp>";
	$xml->save("xml_file.xml");
}
?>
	