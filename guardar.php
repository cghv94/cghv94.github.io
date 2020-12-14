<?php

$fi=fopen(archivo.txt","a")
or die("problemas al iniciar sesión)

fwrite($fi,"Datos:");
fwrite($fi,"\n");
fwrite($fi,"nombre");
fwrite($fi,"\n");
fwrite($fi,"contraseña");
fwrite($fi,"\n");
fclose($fi);
?>
