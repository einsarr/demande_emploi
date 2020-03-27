<?php
/* Smarty version 3.1.30, created on 2020-02-27 18:58:14
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\agences\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e580336785937_10340326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2a7ceac778f92fe5e4d195aae5b8c298e495e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\agences\\edit.html',
      1 => 1582822122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e580336785937_10340326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">MODIFICATION D'UNE AGENCE</h3>
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
Agence/update">
                    <div class="form-group">
                        <label for="libelle">Libellé agence</label>
                        <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['agence']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
 <?php }?>">
                        <input type="text" name="libelle" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['agence']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['agence']->value->getLibelle();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Adresse</label>
                        <input type="text" name="adresse" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['agence']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['agence']->value->getAdresse();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="standard">Standard</label>
                        <input type="text" name="standard" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['agence']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['agence']->value->getStandard();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="numero_agence">Numéro</label>
                        <input type="text" name="numero_agence" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['agence']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['agence']->value->getNumero_agence();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="action" class="btn btn-warning" value="Mèttre à jour" />
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
