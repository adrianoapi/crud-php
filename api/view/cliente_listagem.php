<table>
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
    </tr>
    <?php foreach($clientes as $cliente): ?>
        <tr>
            <td><?= $cliente['id'   ] ?></td>
            <td><?= $cliente['nome' ] ?></td>
            <td><?= $cliente['email'] ?></td>
        </tr>
    <?php endforeach;?>
</table>