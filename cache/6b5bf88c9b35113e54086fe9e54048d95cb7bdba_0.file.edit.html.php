<?php
/* Smarty version 3.1.30, created on 2020-02-27 18:57:48
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\caisses\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e58031c11ec51_72487547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b5bf88c9b35113e54086fe9e54048d95cb7bdba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\caisses\\edit.html',
      1 => 1582826255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58031c11ec51_72487547 (Smarty_Internal_Template $_smarty_tpl) {
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
Caisse/update">
                    <div class="form-group">
                        <label for="libelle">Numéro caisse</label>
                        <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['caisse']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['caisse']->value->getId();?>
 <?php }?>">
                        <input type="text" name="numero_caisse" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['caisse']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['caisse']->value->getNumero_caisse();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['caisse']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['caisse']->value->getDescription();?>
 <?php }?>">
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label class="">L'agence</label>
                            <select class="form-control" name="agence_id" id="agence_id">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agences']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['agence']->value->getId() == $_smarty_tpl->tpl_vars['caisse']->value->getAgence()->getId()) {?>
                                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['agence']->value->getLibelle();?>
 - <?php echo $_smarty_tpl->tpl_vars['agence']->value->getAdresse();?>
</option>
                                    <?php } else { ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['agence']->value->getLibelle();?>
 - <?php echo $_smarty_tpl->tpl_vars['agence']->value->getAdresse();?>
</option>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
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
