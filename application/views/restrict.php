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
          <a id="btn_your_user" class="btn btn-link" user_id="<?=$user_id?>"><i class="fa fa-user">Usuário</i></a>
          <a class="btn btn-link" href="restrict/logoff"><i class="fa fa-sign-out">Sair</i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_clientes" role="tab" data-toggle="tab">Clientes</a></li>
      <li><a href="#tab_produtos" role="tab" data-toggle="tab">Produtos</a></li>
      <li><a href="#tab_pedidos" role="tab" data-toggle="tab">Pedidos</a></li>
      <li><a href="#tab_user" role="tab" data-toggle="tab">Usuários</a></li>
    </ul>

    <div class="tab-content">
      <div id="tab_clientes" class="tab-pane active">
         <div class="container-fluid">
          <h2 class="text-center"><strong>Gerenciar Clientes</strong></h2>
          <a id="btn_add_course" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Clientes</i></a>
          <table id="dt_courses" class="table table-striped table-bordered">
            <thead>
              <tr class="tableheader">
                <th class="dt-center">Nome</th>
                <th class="dt-center">CPF</th>
                <th class="dt-center">Endereço</th>
                <th class="dt-center">Celular</th>
                <th class="no-sort">E-Mail</th>
                <th class="no-sort">Data de Nascimento</th>
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
          <a id="btn_add_member" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Produtos</i></a>
          <table id="dt_team" class="table table-striped table-bordered">
            <thead>
              <tr class="tableheader">
                <th class="dt-center">Nome</th>
                <th class="dt-center no-sort">Codigo de Barras</th>
                <th class="dt-center no-sort">Foto</th>
                <th class="no-sort">Descrição</th>
                <th class="dt-center">Valor</th>
                <th class="dt-center">Quantidade</th>
                <th class="dt-center">Data de Cadastro</th>
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
          <a id="btn_add_member" class="btn btn-primary" href="<?php echo base_url(); ?>pedidos"><i class="fa fa-plus">&nbsp;&nbsp;Fazer Pedidos</i></a>
          <table id="dt_team" class="table table-striped table-bordered">
            <thead>
              <tr class="tableheader">
                <th class="dt-center">Cliente</th>
                <th class="dt-center no-sort">Produtos</th>
                <th class="dt-center no-sort">Foto</th>
                <th class="dt-center">Valor</th>
                <th class="dt-center">Quantidade</th>
                <th class="dt-center">Data de Cadastro</th>
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

<div id="modal_course" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Clientes</h4>
      </div>

      <div class="modal-body">
        <form id="form_course">

          <input id="course_id" name="course_id" hidden>

          <div class="form-group">
            <label class="col-lg-2 control-label">Nome</label>
            <div class="col-lg-10">
              <input id="course_name" name="course_name" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">CPF</label>
            <div class="col-lg-10">
              <input id="course_name" name="course_name" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Endereço</label>
            <div class="col-lg-10">
              <input type="text" step="0.1" id="course_duration" name="course_duration" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>

          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">E-Mail</label>
            <div class="col-lg-10">
              <input type="text" step="0.1" id="course_duration" name="course_duration" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-2 control-label">Data de Nascimento</label>
            <div class="col-lg-10">
              <input type="Date" step="0.1" id="course_duration" name="course_duration" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>



          <div class="form-group text-center">
            <button type="submit" id="btn_save_course" class="btn btn-primary">
              <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
            </button>
            <span class="help-block"></span>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<div id="modal_member" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Produtos</h4>
      </div>

      <div class="modal-body">
        <form id="form_member">

          <input id="member_id" name="member_id" hidden>

          <div class="form-group">
            <label class="col-lg-2 control-label">Nome</label>
            <div class="col-lg-10">
              <input id="member_name" name="member_name" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Codigo de Barras</label>
            <div class="col-lg-10">
              <input id="member_name" name="member_name" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Foto</label>
            <div class="col-lg-10">
              <img id="member_photo_path" src="" style="max-height: 400px; max-height: 400px">
              <label class="btn btn-block btn-info">
                <i class="fa fa-upload"></i>&nbsp;&nbsp;Importar foto
                <input type="file" id="btn_upload_member_photo" accept="image/*" style="display: none;">
              </label>
              <input id="member_photo" name="member_photo" hidden>
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Descrição</label>
            <div class="col-lg-10">
              <textarea id="member_description" name="member_description" class="form-control"></textarea>
              <span class="help-block"></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Valor</label>
            <div class="col-lg-10">
              <input id="member_name" name="member_name" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Quantidade</label>
            <div class="col-lg-10">
              <input id="member_name" name="member_name" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Data de Cadastro</label>
            <div class="col-lg-10">
              <input type="date" id="member_name" name="member_name" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group text-center">
            <button type="submit" id="btn_save_member" class="btn btn-primary">
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
              <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
            </button>
            <span class="help-block"></span>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>