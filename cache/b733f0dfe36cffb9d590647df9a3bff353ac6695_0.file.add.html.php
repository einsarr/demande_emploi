<?php
/* Smarty version 3.1.30, created on 2020-03-27 19:17:57
  from "C:\xampp\htdocs\mesProjets\demande_emploi\src\view\users\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7e435521c1d1_43769370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b733f0dfe36cffb9d590647df9a3bff353ac6695' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\demande_emploi\\src\\view\\users\\add.html',
      1 => 1585333027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7e435521c1d1_43769370 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="col-md-6">
                <!-- /.box -->
                <div class="box ">
                    <div class="box-header">

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/save" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nom_complet">Nom complete</label>
                                <input type="text" name="nom_complet" class="form-control" id="nom_complet">
                            </div>
                            <div class="form-group">
                                <label for="description">Téléphone</label>
                                <input type="text" name="telephone" class="form-control" id="telephone">
                            </div>
                            <div class="form-group">
                                <label for="description">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="description">Adresse</label>
                                <input type="text" name="adresse" class="form-control" id="adresse">
                            </div>
                            <div class="form-group">
                                <label for="description">Login</label>
                                <input type="text" name="login" class="form-control" id="login">
                            </div>
                            <div class="form-group">
                                <label for="description">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="avatar">Avatar</label>
                                <input type="file" name="avatar" class="form-control" id="avatar">
                            </div>
                            <div class="form-group">
                                <label class="">L'employeur</label>
                                <select class="form-control" name="profil_id" id="profil_id">
                                    <option value="">---Choisir le profil---</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profils']->value, 'profil');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profil']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['profil']->value->getLibelle();?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="action" class="btn btn-primary" value="Enrégistrer" />
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
