<?php

// Esta classe valida os dados inseridos no formuário de cadastro.
// Retorna "false" para dados válidos ou para dados inválidos uma string 
// contendo a descrição do erro.

class valida {

    public static function nome($nome) {
        if (empty($nome))
            return "<h6 style='color: #cc1918'>Insira um nome</h6>";
        if (preg_match('/^[a-zA-Záéíóúâêô ]+$/', $nome))
            return false;
        else
            return "<h6 style='color: #a81ccc'>Somente Letras</h6>";

    }

    public static function sobrenome($sobrenome) {
        if (empty($sobrenome))
            return "<h6 style='color: #cc1918'>Insira um sobrenome</h6>";
        if (preg_match('/^[a-zA-Záéíóúâêô ]+$/', $sobrenome))
            return false;
        else
            return "<h6 style='color: #a81ccc'>Somente Letras</h6>";

    }

    public static function telefone($telefone) {
        if (empty($telefone))
            return "<h6 style='color: #cc1918'>Insira um telefone</h6>";
        if (preg_match('/^[0-9]+$/', $telefone))
            return false;
        else
            return "<h6 style='color: #a81ccc'>Somente Números</h6>";

    }

    public static function cidade($cidade) {
        if (empty($cidade))

            return "<h6 style='color: #cc1918'>Insira uma cidade</h6>";

        if (preg_match('/^[a-zA-Záéíóúâêô ]+$/', $cidade))
            return false;
        else
            return "<h6 style='color: #a81ccc'>Somente Letras</h6>";
    }

    public static function estado($estado) {
        $estados = array('ac', 'al', 'am', 'ap', 'ba', 'ce', 'df', 'es', 'go'
            , 'ma', 'mg', 'ms', 'mt', 'pa', 'pb', 'pe', 'pi', 'pr', 'rj', 'rn'
            , 'ro', 'rr', 'rs', 'sc', 'se', 'sp', 'to');
        if (in_array($estado, $estados))
            return false;
        else

            return "<h6 style='color: #cc1918'>Insira uma Estado</h6>";

    }

    public static function cep($cep) {
        if (empty($cep))
            return "<h6 style='color: #cc1918'>Insira um CEP</h6>";
        if (preg_match('/^[0-9]+$/', $cep))
            return false;
        else
            return "<h6 style='color: #a81ccc'>Somente Números</h6>";

    }

    public static function email($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
            return false;
        else
            return "<h6 style='color: #cc1918'>Email inválido</h6>";

    }

    public static function senha($senha) {
        if (!preg_match('/^[a-zA-Z0-9 ]+$/', $senha))
            return "<h6 style='color: #cc1918'>Somente caracteres alfanumericos</h6>";

        if (strlen($senha) >= 5 && strlen($senha) <= 20)
            return false;
        else
            return "<h6 style='color: #a81ccc'>Mínimo 5 e Máximo 20 caracteres</h6>";
    }

}

?>