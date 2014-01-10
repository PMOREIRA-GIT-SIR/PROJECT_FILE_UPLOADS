<?php
$destino = "./uploads/";

if (!isset($_FILES['userfile']) || empty($_FILES['userfile']['name'])) {
header ("location: listupload.php?status=error");	
}

if ($_FILES['userfile']['error']) {
header ("location: listupload.php?status=error");
}
// testar se existe pasta destino

if (!file_exists($destino) || !is_dir($destino)) {
	mkdir($destino);
}

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
	if (@move_uploaded_file($_FILES['userfile']['tmp_name'], $destino.$_FILES['userfile']['name'])) {
		header ("location: listupload.php?status=ok");
	} else {
		header ("location: listupload.php?status=error2");
	}
} else {
	header ("location: listupload.php?status=error");
}
/*
echo "<hr/>";
echo "nome original: ".$_FILES['userfile']['name'];

echo "<hr/>";
echo "nome tep: ".$_FILES['userfile']['tmp_name'];


echo "<hr/>";
echo "tamanho: ".$_FILES['userfile']['size'];


echo "<hr/>";
echo "tipo : ".$_FILES['userfile']['type'];


echo "<hr/>";
echo "cod. erro: ".$_FILES['userfile']['error'];

 */

?>