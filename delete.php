<?php
unlink($_GET['file']);
header("location: listupload.php");
?>