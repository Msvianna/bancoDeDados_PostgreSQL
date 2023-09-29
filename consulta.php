<?php 
require_once 'config.php';

function obterAlunos(){
  global $dsn, $user, $pass; // Usa três variáveis definidas em config.php
  $alunos = [];
  $pdo = null; // Inicialize a variável $pdo fora do bloco try-catch

  try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); // Conecta ao banco de dados
    $sql = "SELECT * FROM alunos";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $alunos = $stm->fetchAll(PDO::FETCH_OBJ); // Armazena os dados coletados em $alunos na forma de objetos
  } catch (PDOException $e) {
    // Em caso de erro, pode ser útil registrar a exceção para debug
    // echo "Erro: " . $e->getMessage(); 
    $alunos = [];
  } finally {
    // Fecha a conexão com o banco de dados
    if ($pdo) {
      $pdo = null;
    }
  }
  
  return $alunos;
}