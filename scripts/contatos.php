<?php
    function obterContatos(){
        $arquivo = file("./scripts/contatos.txt");
        $contatos = array();

        foreach($arquivo as $linha){
            $contato = array();

            list($contato["nome"], $contato["email"], $contato["numero"]) = explode("|", $linha);

            $contatos[] = $contato;
        }
        
        return $contatos;
    }
?>