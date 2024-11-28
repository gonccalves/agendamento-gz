<?php
use Core\Database;
$db = Database::connect();
try {
    $query = "SELECT * FROM agendamentos ORDER BY data, horario";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $agendamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar agendamentos: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Agendamentos</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <div cl* Estilo para a tabela */ass="container">
        <h1>Lista de Agendamentos</h1>

        <?php if (count($agendamentos) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Equipamento</th>
                        <th>Ambiente</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Usuário</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($agendamentos as $agendamento): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($agendamento['id']); ?></td>
                            <td><?php echo htmlspecialchars($agendamento['equipamento']); ?></td>
                            <td><?php echo htmlspecialchars($agendamento['ambiente']); ?></td>
                            <td><?php echo htmlspecialchars($agendamento['data']); ?></td>
                            <td><?php echo htmlspecialchars($agendamento['horario']); ?></td>
                            <td><?php echo htmlspecialchars($agendamento['usuario']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum agendamento encontrado.</p>
        <?php endif; ?>

        <a href="/" class="button">Voltar para Agendamento</a>
    </div>
</body>
</html>
