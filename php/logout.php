<?php
// Redirigir a la página de inicio de sesión, lo que provocará que el navegador vuelva a pedir credenciales
header('HTTP/1.0 401 Unauthorized');
header('WWW-Authenticate: Basic realm="Zona Protegida"');
echo 'Has cerrado sesión, por favor ingresa tus credenciales nuevamente.';
exit;
?>
