<?php
/* Smarty version 3.1.30, created on 2020-03-04 12:54:36
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\clients\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5f96fc7664b4_17946618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43c78564edb061a2f45d7f9e6181f3ad03c795fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\clients\\liste.html',
      1 => 1583322870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5f96fc7664b4_17946618 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h3 class="box-title">LISTE DES CLIENTS</h3>
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
                        <?php $_smarty_tpl->_assignInScope('num', 1);
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getTelephone();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getEmail();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getCni();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getEmployeur()->getNom();?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/delete/<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
" class="btn btn-danger" onclick="return confirm('Etez-vous sûre de vouloir supprimer')"><span class="fa fa-trash"></span></a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/edit/<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/add_new_compte/<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
" class="btn btn-primary"><span class="fa fa-credit-card"></span></a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/liste_compte_client/<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
" class="btn btn-success"><span class="fa fa-cc-mastercard"></span></a>
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
