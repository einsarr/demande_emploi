<?php
/* Smarty version 3.1.30, created on 2020-04-17 00:36:42
  from "C:\xampp\htdocs\mesProjets\demande_emploi\src\view\users\connect.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e98ddfa221b36_87621467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535ea5a26b5527712ad6628c695aed9dcef7972f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\demande_emploi\\src\\view\\users\\connect.html',
      1 => 1587076597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e98ddfa221b36_87621467 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="col-md-6">
                <b>CONNEXION</b>
                <!-- /.box -->
                <div class="box ">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/login">
                            <div class="form-group">
                                <label for="login">Login</label>
                                <input type="text" name="login" class="form-control" id="login">
                            </div>
                            <div class="form-group">
                                <label for="description">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="action" class="btn btn-primary" value="Se Connecter" />
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </section>
    </div>
</div><?php }
}
