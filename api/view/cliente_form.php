<div class="col-lf-12">
    <form class="form" name="frm_cadastro" id="frm_cadastro" method="post" onsubmit="return false">
        <input type="hidden" name="action" value="save_cliente">
        <input type="hidden" name="id" id="id" value="">
        <fieldset>
            <legend>Cliente Formulário:</legend>
            
            <!--Mensagem de erro-->
            <div id="msg-erro" class="col-lg-12 alert alert-danger" style="display: none;">
                mensagem
            </div>
            
            <!--Mensagem de sucesso-->
            <div id="msg-success" class="col-lg-12 alert alert-success" style="display: none;">
                Registro efetuado com sucesso!
            </div>
            
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
                <input type="submit" class="btn btn-default" value="Salvar">
                <input type="reset" class="btnClear btn btn-default" value="Limpar">
            </div>
        </fieldset>
    </form>
</div>