<?php
/* Smarty version 3.1.30, created on 2020-03-04 13:36:13
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\comptes\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5fa0bde18991_68395459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6654a8d3fde05860e39514e8a5dedeee3dd0dfd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\comptes\\liste.html',
      1 => 1583325370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fa0bde18991_68395459 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h1>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte" class="btn btn-primary">
                        <span class="fa fa-plus"></span> Nouveau
                    </a>
                </h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Numero</th>
                            <th>Solde</th>
                            <th>Etat</th>
                            <th>Agence</th>
                            <th>Type</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('num', 1);
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comptes']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumero();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getSolde();?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['compte']->value->getEtat() == "actif") {?>
                                <span class="text-success">
                                    <i class="fa fa-spin fa-refresh"></i>
                                </span> <?php } elseif ($_smarty_tpl->tpl_vars['compte']->value->getEtat() == "ferme") {?>
                                <span class="text-danger"><i class="fa fa-lock"></i></span> <?php } else { ?>
                                <span class="text-warning">
                                    <i class="fa fa-arrows"></i>
                                </span> <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getAgence()->getLibelle();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getType_compte();?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/delete/<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
" class="btn btn-danger" onclick="return confirm('Etez-vous sûre de vouloir supprimer')"><span class="fa fa-trash"></span></a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/edit/<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
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
</div><?php }
}
