<?php
require "./GovernoSingleton.php";
GovernoSingleton::pegarInstancia()->realizarEleicao();
var_dump(GovernoSingleton::pegarInstancia());
