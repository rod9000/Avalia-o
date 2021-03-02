
<section style="min-height: calc(100vh - 83px)" class="light-bg">
  
  <div class="container">
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 text-center">
        <div class="section-title">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-offset-5 col-lg-3 text-center">
        <div class="form-group">
          <a id="btn_your_user" class="btn btn-link" user_id="<?=$user_id?>"><i class="fa fa-user"> Usuário</i></a>
          <a class="btn btn-link" href="restrict/logoff"><i class="fa fa-sign-out"> Sair</i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  <!-- Abas de Navegação -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_clientes" role="tab" data-toggle="tab">Clientes</a></li>
      <li><a href="#tab_produtos" role="tab" data-toggle="tab">Produtos</a></li>
      <li><a href="#tab_pedidos" role="tab" data-toggle="tab">Pedidos</a></li>
      <li><a href="#tab_user" role="tab" data-toggle="tab">Usuários</a></li>
    </ul>
    <!-- Tabelas de dados -->
    <div class="tab-content">
      <div id="tab_clientes" class="tab-pane active">
         <div class="container-fluid">
          <h2 class="text-center"><strong>Gerenciar Clientes</strong></h2>
          <a id="btn_add_clientes" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Clientes</i></a>
          <table id="dt_clientes" class="table table-striped table-bordered">
            <thead>
              <tr class="tableheader">
                <th class="dt-center">Nome</th>
                <th class="no-sort">CPF</th>
                <th class="dt-center">Endereço</th>
                <th class="dt-center">E-Mail</th>
                <th type="date" class="dt-center">Data de Nascimento</th>
                <th class="dt-center no-sort">Ações</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
         </div>
      </div>

      <div id="tab_produtos" class="tab-pane">
        <div class="container-fluid">
          <h2 class="text-center"><strong>Gerenciar Produtos</strong></h2>
          <a id="btn_add_produtos" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Produtos</i></a>
          <table id="dt_produtos" class="table table-striped table-bordered">
            <thead>
              <tr class="tableheader">
                <th class="dt-center">Nome</th>
                <th class="dt-center no-sort">Codigo de Barras</th>
                <th class="no-sort">Descrição</th>
                <th class="dt-center">Valor</th>
                <th class="dt-center">Quantidade</th>
                <th type="date" class="dt-center">Data de Cadastro</th>
                <th class="dt-center no-sort">Ações</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
         </div>
      </div>

      <div id="tab_pedidos" class="tab-pane">
        <div class="container-fluid">
          <h2 class="text-center"><strong>Gerenciar Pedidos</strong></h2>
          <a id="btn_add_pedidos" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Criar Pedidos</i></a>
          <table id="dt_pedidos" class="table table-striped table-bordered">
            <thead>
              <tr class="tableheader">
                <th class="dt-center">Cliente</th>
                <th class="dt-center no-sort">Produtos</th>
                <th class="dt-center">Valor</th>
                <th class="dt-center">Quantidade</th>
                <th class="dt-center">Total</th>
                <th type="date" class="dt-center">Data de Cadastro</th>
                <th class="dt-center no-sort">Ações</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
         </div>
      </div>
      <div id="tab_user" class="tab-pane">
        <div class="container-fluid">
          <h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
          <a id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Usuário</i></a>
          <table id="dt_users" class="table table-striped table-bordered">
            <thead>
              <tr class="tableheader">
                <th>Login</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th class="dt-center no-sort">Ações</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
         </div>
      </div>
    </div>
  </div>
</section>
<!-- Forms e modais -->
<div id="modal_clientes" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Clientes</h4>
      </div>

      <div class="modal-body">
        <form id="form_clientes">

          <input id="clientes_id" name="clientes_id" hidden>

          <div class="form-group">
            <label class="col-lg-2 control-label">Nome</label>
            <div class="col-lg-10">
              <input id="cl_nome" name="cl_nome" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">CPF</label>
            <div class="col-lg-10">
              <input id="cl_cpf" name="cl_cpf" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Endereço</label>
            <div class="col-lg-10">
              <input type="text" step="0.1" id="cl_endereco" name="cl_endereco" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>

          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">E-Mail</label>
            <div class="col-lg-10">
              <input type="text" step="0.1" id="cl_email" name="cl_email" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-2 control-label">Data de Nascimento</label>
            <div class="col-lg-10">
              <input type="Date" step="0.1" id="cl_datadenascimento" name="cl_datadenascimento" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group text-center">
            <button type="submit" id="btn_save_clientes" class="btn btn-primary">
              <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
            </button>
            <span class="help-block"></span>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<div id="modal_produtos" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Produtos</h4>
      </div>

      <div class="modal-body">
        <form id="form_produtos">

          <input id="produtos_id" name="produtos_id" hidden>

          <div class="form-group">
            <label class="col-lg-2 control-label">Nome</label>
            <div class="col-lg-10">
              <input id="pd_nome" name="pd_nome" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Codigo de Barras</label>
            <div class="col-lg-10">
              <input id="pd_codigodebarras" name="pd_codigodebarras" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Descrição</label>
            <div class="col-lg-10">
              <textarea id="pd_descricao" name="pd_descricao" class="form-control"></textarea>
              <span class="help-block"></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Valor</label>
            <div class="col-lg-10">
              <input id="pd_valor" name="pd_valor" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Quantidade</label>
            <div class="col-lg-10">
              <input id="pd_quantidade" name="pd_quantidade" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Data de Cadastro</label>
            <div class="col-lg-10">
              <input type="date" id="pd_datadecadastro" name="pd_datadecadastro" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group text-center">
            <button type="submit" id="btn_save_produtos" class="btn btn-primary">
              <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
            </button>
            <span class="help-block"></span>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<div id="modal_pedidos" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Pedidos</h4>
      </div>

      <div class="modal-body">
        <form id="form_pedidos">

          <input id="pedidos_id" name="pedidos_id" hidden>

          <div class="form-group">
            <label class="col-lg-2 control-label">Cliente</label>
            <div class="col-lg-10">
              <input id="pdd_cliente" name="pdd_cliente" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Produto</label>
            <div class="col-lg-10">
              <input id="pdd_produtos" name="pdd_produtos" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Valor</label>
            <div class="col-lg-10">
              <input id="pdd_valor" name="pdd_valor" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Quantidade</label>
            <div class="col-lg-10">
              <input id="pdd_quantitade" name="pdd_quantitade" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Total</label>
            <div class="col-lg-10">
              <input id="pdd_total" name="pdd_total" class="form-control" vaule=""maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Data de cadastro</label>
            <div class="col-lg-10">
              <input type="date" id="pdd_datadecadastro" name="pdd_datadecadastro" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group text-center">
            <button type="submit" id="btn_save_pedidos" class="btn btn-primary">
              <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
            </button>
            <span class="help-block"></span>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<div id="modal_user" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Usuário</h4>
      </div>

      <div class="modal-body">
        <form id="form_user">

          <input id="user_id" name="user_id" hidden>

          <div class="form-group">
            <label class="col-lg-2 control-label">Login</label>
            <div class="col-lg-10">
              <input id="user_login" name="user_login" class="form-control" maxlength="30">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Nome Completo</label>
            <div class="col-lg-10">
              <input id="user_full_name" name="user_full_name" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">E-mail</label>
            <div class="col-lg-10">
              <input id="user_email" name="user_email" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Confirmar E-mail</label>
            <div class="col-lg-10">
              <input id="user_email_confirm" name="user_email_confirm" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Senha</label>
            <div class="col-lg-10">
              <input type="password" id="user_password" name="user_password" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Confirmar Senha</label>
            <div class="col-lg-10">
              <input type="password" id="user_password_confirm" name="user_password_confirm" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group text-center">
            <button type="submit" id="btn_save_user" class="btn btn-primary">
              <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar</button>
            <span class="help-block"></span>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>