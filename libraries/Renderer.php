<?php

class Renderer
{
    //Utiliser pour le rendu des articles --> render(articles/show)
    public  static function render(string $path, array $variables = [])
    {
        //Objectif
        //transformer tableau associatif ['var1' => 2, 'var2' => "Lior"] en vrai variable
        //$var1 = 2;
        //$var2 = "Lior";
        // ---> utilisation de la function extract()
        extract($variables);

        ob_start();
        require('templates/' . $path . '.html.php');
        $pageContent = ob_get_clean();

        require('templates/layout.html.php');
    }
}
