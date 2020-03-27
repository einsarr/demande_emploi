<?php
/* Smarty version 3.1.30, created on 2020-02-27 17:33:53
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\employeurs\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e57ef71840895_51589507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46caa08b44ab3f5c4b3805b1facfa86967598167' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\employeurs\\add.html',
      1 => 1582820762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57ef71840895_51589507 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">AJOUTER D'UN EMPLOYEUR</h3>
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
Employeur/save">
                    <div class="form-group">
                        <label for="nom"> Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" class="form-control" id="adresse">
                    </div>
                    <div class="form-group">
                        <label for="raison_social">Raison social</label>
                        <input type="text" name="raison_social" class="form-control" id="raison_social">
                    </div>
                    <div class="form-group">
                        <label for="numero_identification">Identification</label>
                        <input type="text" name="numero_identification" class="form-control" id="description">
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
