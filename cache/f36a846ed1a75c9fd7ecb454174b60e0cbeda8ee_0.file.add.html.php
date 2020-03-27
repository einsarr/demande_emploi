<?php
/* Smarty version 3.1.30, created on 2020-02-27 18:59:26
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\caisses\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e58037e74d206_74341171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36a846ed1a75c9fd7ecb454174b60e0cbeda8ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\caisses\\add.html',
      1 => 1582826261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58037e74d206_74341171 (Smarty_Internal_Template $_smarty_tpl) {
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
Caisse/save">
                    <div class="form-group">
                        <label for="numero_caisse">Numéro caisse</label>
                        <input type="text" name="numero_caisse" class="form-control" id="numero_caisse">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description">
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
