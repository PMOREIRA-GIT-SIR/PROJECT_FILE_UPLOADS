<html>
	<body>
<?php
$status = "";

if (isset($_GET['status'])) {
	$status = $_GET['status'];
}

if ($status == "error") {
	echo "<h1> Erro no carregamento do ficheiro </h1>";
} else if ($status == "error2") {
	echo "<h1> Erro no armazenamento do ficheiro </h1>";
} else if ($status == "ok") {
	echo "<h1> ficheiro carregado com sucesso </h1>";
}


$dir = "./uploads/";

if (!file_exists($dir) || !is_dir($dir) ) {
	echo "<hr/>";
	echo "diretoria inexistente";
	echo "<hr/>";
} else {
	$dir2list = dir($dir);
	while($file = $dir2list->read()) {
			if (is_file($dir.$file)) {
				echo "<a href='".$dir.$file."'>".$file."</a>";
				echo " <a href=processa.php?file=".$dir.$file.">"."processar"."</a>";
				echo " <a href=delete.php?file=".$dir.$file.">"."apagar"."</a>";
				echo "<hr/>";
			}
	}
}



?>
<form action="upload.php" method="post" enctype="multipart/form-data">
	</fieldset>
	<input type="hidden" name="MAX_FILE_SIZE" value="100000"/>
	<input type="file" name="userfile"/>
	</fieldset>
	<fieldset>
	<input type="submit"/>
	<input type="reset" />
	</fieldset>
</form>
	</body>
</html>
