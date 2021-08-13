<?php

class ConexionBD {
    
    //En curso dice solo public

     public static function cBD()
     {
            $bd = new PDO("mysql:host=localhost;dbname=crud", "root", "");
            return $bd;

        }

}

/*
host: localhost
nombre bd: cursocrud
usuario: root
contrasena: */