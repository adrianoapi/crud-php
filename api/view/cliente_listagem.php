<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <td>#</td>
            <td>ID</td>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>ACAO</td>
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
                <input type="button" class="btn btn-primary" id="<?= $cliente['id'] ?>" value="Editar">
                <input type="button" class="btn btn-danger" value="Excluir">
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
        <tfoot>
            <tr><td colspan="5"><input type="button" class="btn btn-danger" value="Excluir itens"></td></tr>
        </tfoot>
</table>