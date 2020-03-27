<?php
/* Smarty version 3.1.30, created on 2020-02-27 17:01:20
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\agences\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e57e7d0ab5c09_41707981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aa3dec6eabcd9f724bb7d9c3e8e60ecfb9472b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\agences\\add.html',
      1 => 1582818171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57e7d0ab5c09_41707981 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">AJOUTER D'UNE AGENCE</h3>
    </section>
    <!-- Main content -->
    <section class="content col-md-6">
        <!-- /.box -->
        <div class="box ">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Agence/save">
                    <div class="form-group">
                        <label for="libelle">Libellé agence</label>
                        <input type="text" name="libelle" class="form-control" id="libelle">
                    </div>
                    <div class="form-group">
                        <label for="description">Adresse</label>
                        <input type="text" name="adresse" class="form-control" id="adresse">
                    </div>
                    <div class="form-group">
                        <label for="standard">Standard</label>
                        <input type="text" name="standard" class="form-control" id="standard">
                    </div>
                    <div class="form-group">
                        <label for="numero_agence">Numéro</label>
                        <input type="text" name="numero_agence" class="form-control" id="numero_agence">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="action" class="btn btn-primary" value="Add" />
                        <button type="button" class="btn btn-danger">Fermer</button>
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
