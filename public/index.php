<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>CRUD PHP com MongoDB</title>
</head>
<body>
    <div class="container">
        <h1>CRUD PHP com MongoDB</h1>

        <h2>Adicionar Contato</h2>
        <form action="../includes/create.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <button type="submit">Adicionar Contato</button>
        </form>

        <h2>Atualizar Contato</h2>
        <form action="../includes/update.php" method="post">
            <label for="update_id">ID do Contato:</label>
            <input type="text" id="update_id" name="id" required><br>
            <label for="update_name">Nome:</label>
            <input type="text" id="update_name" name="name" required><br>
            <label for="update_phone">Telefone:</label>
            <input type="text" id="update_phone" name="phone" required><br>
            <label for="update_email">Email:</label>
            <input type="email" id="update_email" name="email" required><br>
            <button type="submit">Atualizar Contato</button>
        </form>

        <h2>Deletar Contato</h2>
        <form action="../includes/delete.php" method="post">
            <label for="delete_id">ID do Contato:</label>
            <input type="text" id="delete_id" name="id" required><br>
            <button type="submit">Deletar Contato</button>
        </form>
        
        <h2>Lista de Contatos</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
            <?php
            require '../config/conn.php';

            $result = $collection->find([]);

            foreach ($result as $contact) {
                echo "<tr>";
                echo "<td>".$contact['_id']."</td>";
                echo "<td>".$contact['name']."</td>";
                echo "<td>".$contact['phone']."</td>";
                echo "<td>".$contact['email']."</td>";
                echo "</tr>";
            }
            ?>
        </table>

    </div>
</body>
</html>
