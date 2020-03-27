<?php
/* Smarty version 3.1.30, created on 2020-02-27 22:07:52
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\employes\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e582fa8c982d7_29621977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8cafcdc41bdaf0e7a4c32df3b4394910c24ed60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\employes\\add.html',
      1 => 1582837671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e582fa8c982d7_29621977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">AJOUTER D'UN EMPLOYE</h3>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.box -->
        <div class="box ">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employe/save">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" class="form-control" id="prenom">
                            </div>
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" class="form-control" id="nom">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input type="text" name="telephone" class="form-control" id="telephone">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" name="adresse" class="form-control" id="adresse">
                            </div>
                            <div class="form-group">
                                <label for="login">Login</label>
                                <input type="text" name="login" class="form-control" id="login">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="">L'agence</label>
                                    <select class="form-control" name="agence_id" id="agence_id">
                                        <option value="">---Choisir l'agence---</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agences']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['agence']->value->getLibelle();?>
 - <?php echo $_smarty_tpl->tpl_vars['agence']->value->getAdresse();?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="">Le profil</label>
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
                            </div>
                            <div class="form-group">
                                <input type="submit" name="action" class="btn btn-primary" value="Add" />
                                <button type="button" class="btn btn-danger">Fermer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div><?php }
}
