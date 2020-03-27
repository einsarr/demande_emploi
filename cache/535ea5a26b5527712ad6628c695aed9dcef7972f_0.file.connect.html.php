<?php
/* Smarty version 3.1.30, created on 2020-03-26 22:11:23
  from "C:\xampp\htdocs\mesProjets\demande_emploi\src\view\users\connect.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d1a7bab6c34_39465096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535ea5a26b5527712ad6628c695aed9dcef7972f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\demande_emploi\\src\\view\\users\\connect.html',
      1 => 1585257082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d1a7bab6c34_39465096 (Smarty_Internal_Template $_smarty_tpl) {
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
User/save">
                            <div class="form-group">
                                <label for="nom_complet">Login</label>
                                <input type="text" name="nom_complet" class="form-control" id="nom_complet">
                            </div>
                            <div class="form-group">
                                <label for="description">Password</label>
                                <input type="text" name="telephone" class="form-control" id="telephone">
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
