<h1>Servidor web funcionando!</h1>
<h4>Página servida por el nodo: <?php echo file_get_contents("/tmp/host-hostname"); ?></h4>
<h4>IP interna del contenedor httpd que sirve la página: <?php echo $_SERVER['SERVER_ADDR']; ?></h4>
