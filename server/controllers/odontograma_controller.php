<?php

function postProcedimentoRealizado($data)
{
  include('/xampp/htdocs/SoulClinic/server/connection/connection.php');
  $payload = json_decode($data, true);
  $sql = "INSERT INTO procedimentoRealizado(id_pessoa, id_procedimento, dataprocedimento, detalheprocedimento, id_dente) 
          VALUES(:id_pessoa, :id_procedimento, :dataprocedimento, :detalheprocedimento, :id_dente)";

  try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id_pessoa", $payload['id_pessoa']);
    $stmt->bindParam(":id_procedimento", $payload['id_procedimento']);
    $stmt->bindParam(":dataprocedimento", $payload['dataprocedimento']);
    $stmt->bindParam(":detalheprocedimento", $payload['detalheprocedimento']);
    $stmt->bindParam(":id_dente", $payload['id_dente']);
    if ($stmt->execute()) {
      $procedimento = $stmt->fetchAll();
      return $procedimento;
    } else {
      die("Falha ao executar a SQL");
    };
  } catch (PDOException $e) {
    die($e->getMessage());
  };
};

// BUSCA OS PROCEDIMENTOS CADASTRADOS NO BANCO DE DADOS
function getProcedimentos()
{
  include('/xampp/htdocs/SoulClinic/server/connection/connection.php');
  $procedimentos = array();
  $sql = "SELECT * FROM Procedimento WHERE ativo = 1";
  try {
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute()) {
      $procedimentos = $stmt->fetchAll();
      return $procedimentos;
    } else {
      die("Falha ao executar a SQL");
    };
  } catch (PDOException $e) {
    die($e->getMessage());
  };
};
function getDentesProcedimento()
{
  include('/xampp/htdocs/SoulClinic/server/connection/connection.php');
  $sql = "SELECT id_dente AS numeroDente, desc_procedimento AS procedimento, dataprocedimento, detalheprocedimento 
          FROM procedimentorealizado AS pr 
          INNER JOIN procedimento AS p ON pr.id_procedimento = p.id_procedimento
          WHERE id_pessoa = 1 
          ORDER BY dataprocedimento DESC"; //IMPLEMENTAR LÓGICA PARA BUSCAR DADOS DO RESPECTIVO PACIENTE
  try {
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute()) {
      $procedimentosRealizados = $stmt->fetchAll();
      // array_push($pessoas, $pessoa);
      return $procedimentosRealizados;
    } else {
      die("Falha ao executar a SQL");
    };
  } catch (PDOException $e) {
    die($e->getMessage());
  };
}
$action = isset($_GET['action']) ? $_GET['action'] : '';
if ($action === 'getProcedimentos') {
  $procedimentos = getProcedimentos();
  header('Content-Type: application/json');
  exit(json_encode($procedimentos, JSON_UNESCAPED_UNICODE));
} else if ($action === 'getDentesProcedimento') {
  $dentes = getDentesProcedimento();
  header('Content-Type: application/json');
  exit(json_encode($dentes, JSON_UNESCAPED_UNICODE));
} else if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  $dataReceived = $_POST['data'];
  $procedimento = postProcedimentoRealizado($dataReceived);
  header('Content-Type: application/json');
  exit(json_encode($procedimento, JSON_UNESCAPED_UNICODE));
} else {
  http_response_code(400);
  echo json_encode(["erro" => "Parametro '$action' não encontrado na URL"], JSON_UNESCAPED_UNICODE);
};
