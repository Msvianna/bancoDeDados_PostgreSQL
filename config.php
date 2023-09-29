<?php 
/* Criei um database no pgadmin com o nome escola (SEM OS NUMEROS INICIAIS)
-schema > QueryTool> CODIGO:
1 -CREATE TABLE ALUNOS (
2 -MATRICULA VARCHAR(8) NOT NULL PRIMARY KEY,
3-	NOME VARCHAR(50),
4-	ENTRADA INT
)
1- CRIOU UMA TABELA CHAMADA ALUNOS(CAMPOS COM NOME MATRICULKA,NOME E ENTRADA)
2- MATRICULA COM 8 POSIÇÕES
3- STRING DE 50 CARACTERES
4- ANO DE ENTRADA INTEIRO

*/
$host = "localhost";
$port = 5432;
$user = "postgres";
$pass = "1234";
$name = "escola";
$dsn = "pgsql:host=$host;port=$port;dbname=$name";

?>