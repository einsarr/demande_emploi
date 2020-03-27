<?php
/* Smarty version 3.1.30, created on 2020-03-04 22:31:33
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\comptes\comptes_client.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e601e350ccc35_81321229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f728aa9e0cb7ac1b33cea8ac5f822a84329b8c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\comptes\\comptes_client.html',
      1 => 1583357491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e601e350ccc35_81321229 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h3 class="box-title">LISTE DES COMPTES PAR CLIENT</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>CNI</th>
                            <th>Employeur</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo var_dump($_smarty_tpl->tpl_vars['comptes']->value);?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getTelephone();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getEmail();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getCni();?>
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
