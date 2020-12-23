<h1>Servidor web funcionando!</h1>
<h3>Página servida por el nodo: <?php echo file_get_contents("/tmp/host-hostname"); ?></h3>
<h3>IP interna del contenedor httpd que sirve la página: <?php echo $_SERVER['SERVER_ADDR']; ?></h3>
