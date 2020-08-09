<?php

class homeController extends controller
{
    
    /*
     * O exemplo a seguir manda o nome da pagina que será carregada e
     * os dados que serão usados na mesma.
    */

    public function index()
    {
        $dados = array();
        $dados['nome'] = "cristiano";
        $dados['idade'] = 26;

        $this->loadView('home', $dados);
    }
}