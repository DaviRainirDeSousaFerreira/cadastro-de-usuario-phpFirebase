<?php
require 'vendor/autoload.php';

use Kreait\Firebase\Factory;

// Configuração do Firebase
$firebase = (new Factory)
    ->withServiceAccount('firebase/firebase-config.json')  // Caminho correto do arquivo JSON
    ->withDatabaseUri('https://trabalho-faculdade-98437-default-rtdb.firebaseio.com/');  // URL do Realtime Database com o sufixo '-default-rtdb'

// Agora, você já tem a instância do banco de dados
$database = $firebase->createDatabase();  // A instância correta do banco de dados
?>
