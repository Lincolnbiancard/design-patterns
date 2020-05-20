<?php 
class GovernoSingleton{
    /* Campos */
    public $nomeDoPais = "Brasil";
    public $proximaEleicao = "2022";

    public function realizarEleicao()
    {
        echo "Realizando...<br>";
    }

    /* Estrutura Singleton */
    private static $instancia = null;
    private function __construct() {}
    public static function pegarInstancia() 
    {
        if(self::$instancia == null) {
            self::$instancia = new GovernoSingleton();
        }
        return self::$instancia;
    } 
}