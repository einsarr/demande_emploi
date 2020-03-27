<?php
/* Smarty version 3.1.30, created on 2020-02-27 16:13:35
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\profils\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e57dc9fddcb49_33665807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6bb14a8f7b081da85741a2657a34aa9d1934e3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\profils\\edit.html',
      1 => 1582816409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57dc9fddcb49_33665807 (Smarty_Internal_Template $_smarty_tpl) {
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
Profil/update">
                    <div class="form-group">
                        <label for="libelle">Libellé profil</label>
                        <input type="hidden" name="id" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['profil']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['profil']->value->getId();?>
 <?php }?>">
                        <input type="text" name="libelle" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['profil']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['profil']->value->getLibelle();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['profil']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['profil']->value->getDescription();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label class="">Etat</label>
                            <select class="form-control" name="etat_profil" id="etat_profil">
                                <option value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getEtat();?>
"><?php echo $_smarty_tpl->tpl_vars['profil']->value->getEtat();?>
</option>
                                <option value="actif">actif</option>
                                <option value="bloque">bloqué</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="modifier" class="btn btn-warning" value="Mèttre à jour" />
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
