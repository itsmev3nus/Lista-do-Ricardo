<?php

$usuario = 'root';
$senha = '';
$basededados = 'loign';
$host = 'localhost';

            $mysqli = new mysqli($host,$usuario,$senha,$basededados);

if($mysqli->error)
{



        die("falha ao conceber conexão" . $mysqli->error);
}