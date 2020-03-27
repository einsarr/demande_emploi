<?php
/* Smarty version 3.1.30, created on 2020-02-27 17:51:21
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\employeurs\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e57f389410dd2_77980875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb35a2dc44386c7d4a7e38ee5fdfa6cbeea4f25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\employeurs\\edit.html',
      1 => 1582822272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57f389410dd2_77980875 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">Modification</h3>
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
Employeur/update">
                    <div class="form-group">
                        <label for="nom"> Nom</label>
                        <input type="hidden" name="id" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['employeur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employeur']->value->getId();?>
 <?php }?>">
                        <input type="text" name="nom" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['employeur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employeur']->value->getNom();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['employeur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employeur']->value->getAdresse();?>
 <?php }?>">
                    </div>
                    <fo class="form-group">
                        <label for="raison_social">Raison social</label>
                        <input type="text" name="raison_social" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['employeur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employeur']->value->getRaison_social();?>
 <?php }?>">
            </div>
            <div class="form-group">
                <label for="numero_identification">Identification</label>
                <input type="text" name="numero_identification" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['employeur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employeur']->value->getNumero_identification();?>
 <?php }?>">
            </div>
            <div class="form-group">
                <input type="submit" name="modifier" class="btn btn-warning" value="Mèttre à jour" />
                <button type="button" class="btn btn-danger">Fermer</button>
            </div>
            </form>
            </fo>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div><?php }
}
