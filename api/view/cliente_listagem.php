<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>ACAO</td>
        </tr>
    </thead>
    <?php foreach($clientes as $cliente): ?>
        <tr>
            <td><?= Helper::zero($cliente['id']) ?></td>
            <td><?= $cliente['nome' ] ?></td>
            <td><?= $cliente['email'] ?></td>
            <td>Editar / Excluir</td>
        </tr>
    <?php endforeach;?>
</table>