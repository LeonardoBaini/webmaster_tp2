<?php

echo '<script language="javascript">
	alert("Saliendo del sitio...");
	window.location.href="index.php"</script>';
session_start();
session_destroy();


?>