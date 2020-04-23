<?php
/* Smarty version 3.1.30, created on 2020-03-28 21:32:56
  from "C:\xampp\htdocs\mesProjets\demande_emploi\src\view\users\connection.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7fb478e8c4b6_82489337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaa39e5ab8f890aa6b8757eceb7e1ee480d731a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\demande_emploi\\src\\view\\users\\connection.html',
      1 => 1585427572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7fb478e8c4b6_82489337 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="col-md-6">
                <b>CONNEXION</b>
                <!-- /.box -->
                <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

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
