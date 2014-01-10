<?php

$linhas = file($_GET['file']);

?>
<table border=1>
<?php
foreach($linhas as $linha) {
	echo ("<tr>");
	$items = explode(";",$linha);
		foreach($items as $item) {
			echo "<td>";
			echo $item;
			echo "</td>";
		}
	echo ("</tr>");
}
?>
</table>