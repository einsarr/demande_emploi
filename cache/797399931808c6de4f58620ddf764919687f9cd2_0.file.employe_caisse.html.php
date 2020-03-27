<?php
/* Smarty version 3.1.30, created on 2020-03-05 12:08:22
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\employes\employe_caisse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e60dda663c6f1_09845373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '797399931808c6de4f58620ddf764919687f9cd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\employes\\employe_caisse.html',
      1 => 1583406500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60dda663c6f1_09845373 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">Affecter un employé à une caisse</h3>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.box -->
        <div class="box">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employe/add_emp_caisse" class="col-md-6">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['employe']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getId();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label class="">L'agence</label>
                        <select class="form-control" name="agence_id" id="agence_id">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agences']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['agence']->value->getId() == $_smarty_tpl->tpl_vars['employe']->value->getAgence()->getId()) {?>
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
                    <div class="form-group">
                        <label class="">La caisse</label>
                        <select class="form-control" name="caisse_id" id="caisse_id">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['caisses']->value, 'caisse');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['caisse']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['caisse']->value->getId() == $_smarty_tpl->tpl_vars['employe']->value->getCaisse()->getId()) {?>
                                <option selected value="<?php echo $_smarty_tpl->tpl_vars['caisse']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['caisse']->value->getNumero_caisse();?>
</option>
                                <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['caisse']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['caisse']->value->getNumero_caisse();?>
</option>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
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
