<?php
function conectar()
{
    return new PDO('pgsql:host=localhost;dbname=datos', 'datos', 'JJpv26..');
}
?>