<?php

namespace App\Controllers;

use Core\Controller;
use Core\Database;

class AgendamentoController extends Controller
{
  public function agendamento(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $equipamento = $_POST['equipamento'];
        $ambiente = $_POST['ambiente'];
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        $usuario = $_POST['usuario'];
        $db = Database::connect();
        try {
            $query = "SELECT * FROM agendamentos 
                      WHERE equipamento = :equipamento 
                      AND ambiente = :ambiente 
                      AND data = :data 
                      AND horario = :horario";
            $stmt = $db->prepare($query);
            $stmt->execute([
                ':equipamento' => $equipamento,
                ':ambiente' => $ambiente,
                ':data' => $data,
                ':horario' => $horario,
            ]);

            if ($stmt->rowCount() > 0) {
                echo "Erro: O equipamento já está agendado para esse horário!";
            } else {
                $query = "INSERT INTO agendamentos (equipamento, ambiente, data, horario, usuario) 
                          VALUES (:equipamento, :ambiente, :data, :horario, :usuario)";
                $stmt = $db->prepare($query);
                $stmt->execute([
                    ':equipamento' => $equipamento,
                    ':ambiente' => $ambiente,
                    ':data' => $data,
                    ':horario' => $horario,
                    ':usuario' => $usuario,
                ]);
                echo "Agendamento realizado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    $this->view('home/index');
  }

  public function listar(){
    $this->view('list/index');
  }
}