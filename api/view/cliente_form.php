<div class="col-lf-12">
    <form class="form" name="frm_cadastro" id="frm_cadastro" method="post" onsubmit="return false">
        <input type="hidden" name="action" value="add_cliente">
        <fieldset>
            <legend>Cliente Formulário:</legend>
            <div class="col-lg-4">
                nome:<br/>
                <input class="col-lg-12" type="text" name="nome" id="nome" value="">
            </div>
            <div class="col-lg-4">
                e-mail:<br/>
                <input class="col-lg-12" type="text" name="email" id="email" value="">
            </div>
            <div class="col-lg-4">
                <br>
                <input type="submit" class="btn btn-success" value="Salvar">
            </div>
        </fieldset>
    </form>
</div>
<div id="msg-erro" class="col-lg-12 alert alert-danger" style="display: none;">
    mensagem
</div>