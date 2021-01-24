<?php

class Http
{
    // Utiliser pour rediriger les utilisateurs 
    // Objectif ---> ex: redirect('index.php);
    public static function redirect(string $uri): void // :void = ne retourne rien
    {
        header("Location: $uri");
        exit();
    }
}
