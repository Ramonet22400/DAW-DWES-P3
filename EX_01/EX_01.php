<?php
echo('Edge');
// Haga un código que detecte el navegador que utiliza el cliente y lo envíe como
//respuesta.

$browser = get_browser(null, true);

echo($browser["browser"]);

