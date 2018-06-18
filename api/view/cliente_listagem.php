<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>ACAO</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($clientes as $cliente): ?>
        <tr>
            <td><input type="checkbox" name="cadastro[]"></td>
            <td><?= $cliente['id'   ] ?></td>
            <td><?= $cliente['nome' ] ?></td>
            <td><?= $cliente['email'] ?></td>
            <td>
                <input type="button" class="btnEdit btn btn-primary " id="<?= $cliente['id'] ?>" value="Editar">
                <input type="button" class="btnDelete btn btn-danger" id="<?= $cliente['id'] ?>" value="Excluir">
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
        <tfoot>
            <tr><td colspan="5"><input type="button" class="btn btn-danger" value="Excluir itens"></td></tr>
        </tfoot>
</table>