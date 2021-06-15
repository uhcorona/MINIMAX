header("Content-Type:text/plain");

ob_start();
echo hola;
ob_flush();
ob_end_clean();