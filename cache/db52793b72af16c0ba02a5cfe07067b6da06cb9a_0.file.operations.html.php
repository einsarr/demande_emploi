<?php
/* Smarty version 3.1.30, created on 2020-03-04 21:50:36
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\comptes\operations.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e60149c58e1a9_73955824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db52793b72af16c0ba02a5cfe07067b6da06cb9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\comptes\\operations.html',
      1 => 1583337450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60149c58e1a9_73955824 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.box -->
        <div class="box">
            <div class="box-header">
                <div class="box-body">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_virement">
                        <span class="fa fa-exchange"></span> VIREMENT
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_cpt_epargne">
                       <span class="fa fa-arrow-left"></span> DEPOT
                    </button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_cpt_bloque">
                       <span class="fa  fa-arrow-right"></span> RETRAIT
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="">
                       <span class="fa  fa-arrow-right"></span> RECUPERER LES AGIOS
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Operatin</th>
                            <th>Montant</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('num', 1);
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['operations']->value, 'operation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['operation']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['operation']->value->getType_operation();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['operation']->value->getMontant();?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Operation/delete/<?php echo $_smarty_tpl->tpl_vars['operation']->value->getId();?>
" class="btn btn-danger" onclick="return confirm('Etez-vous sûre de vouloir supprimer')"><span class="fa fa-trash"></span></a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Operation/edit/<?php echo $_smarty_tpl->tpl_vars['operation']->value->getId();?>
" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>


<div class="modal fade" id="modal_virement">
    <div class="modal-dialog">
        <form method="post" id="form_virement">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">VIREMENT</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="adresse">Montant</label>
                        <input type="text" name="montant" class="form-control" id="montant">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="type_operation" value="virement" id="virement">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label class="">Compte</label>
                            <select class="form-control" name="compte_id" id="compte_id">
                                <option value="">---Choisir le compte---</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comptes']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumero();?>
 - <?php echo $_smarty_tpl->tpl_vars['compte']->value->getType_compte();?>
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
                            <label class="">Compte de destination</label>
                            <select class="form-control" name="compte2_id" id="compte2_id">
                                <option value="">---Choisir le compte---</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comptes']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumero();?>
 - <?php echo $_smarty_tpl->tpl_vars['compte']->value->getType_compte();?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermer</button>
                    <input type="submit" class="btn btn-primary" value="Add" name="action">
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><?php }
}
