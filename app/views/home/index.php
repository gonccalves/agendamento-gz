<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Equipamentos</title>
    <style>
      <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>Agendamento de Equipamentos</h1>
        <form action="/" method="POST">
            <label for="equipamento">Equipamento:</label>
            <select id="equipamento" name="equipamento" required>
                <option value="" disabled selected>Selecione o equipamento</option>
                <option value="DataShow(1)">DataShow(1)</option>
                <option value="DataShow(2)">DataShow(2)</option>
                <option value="DataShow(3)">DataShow(3)</option>
                <option value="Caixa de som(1)">Caixa de som(1)</option>
                <option value="Caixa de som(2)">Caixa de som(2)</option>
                <option value="Televisão(1)">Televisão(1)</option>
                <option value="Televisão(2)">Televisão(2)</option>
                <option value="Televisão(3)">Televisão(3)</option>
            </select>

            <label for="ambiente">Ambiente:</label>
            <select id="ambiente" name="ambiente" required>
                <option value="" disabled selected>Selecione o ambiente</option>
                <option value="Auditório">Auditório</option>
                <option value="Lab. Informática">Lab. Informática</option>
                <option value="Lab. Química">Lab. Química</option>
                <option value="Lab. Física/Matemática">Lab. Física/Matemática</option>
                <option value="Biblioteca">Biblioteca</option>
                <option value="Quadra">Quadra</option>
                <option value="1º Agropecuária">1º Agropecuária</option>
                <option value="2º Agropecuária">2º Agropecuária</option>
                <option value="3º Agropecuária">3º Agropecuária</option>
                <option value="1º Agroindústria">1º Agroindústria</option>
                <option value="2º Agroindústria">2º Agroindústria</option>
                <option value="3º <!-- Botão de submissão --> Agroindústria">3º Agroindústria</option>
                <option value="1º Administração">1º Administração</option>
                <option value="2º Administração">2º Administração</option>
                <option value="3º Administração">3º Administração</option>
                <option value="1º Informática">1º Informática</option>
                <option value="2º Informática">2º Informática</option>
            </select>

            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required>

            <label for="horario">Horário:</label>
            <input type="time" id="horario" name="horario" required>

            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>

            <button type="submit">Agendar</button>
        </form>
        <a href="/agendamentos">Lista de Agendamentos</a>
    </div>
</body>
</html>
