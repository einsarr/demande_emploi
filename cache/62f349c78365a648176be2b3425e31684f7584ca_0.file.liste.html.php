<?php
/* Smarty version 3.1.30, created on 2020-02-27 17:33:52
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\employeurs\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e57ef7092e1c5_03350617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f349c78365a648176be2b3425e31684f7584ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\employeurs\\liste.html',
      1 => 1582821229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57ef7092e1c5_03350617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employeur/add" class="btn btn-primary">
                <span class="fa fa-plus"></span> Nouveau
            </a>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">LISTE DES EMPLOYEURS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Raison social</th>
                            <th>Numéro identification</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('num', 1);
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employeurs']->value, 'employeur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employeur']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employeur']->value->getNom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employeur']->value->getAdresse();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employeur']->value->getRaison_social();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employeur']->value->getNumero_identification();?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employeur/delete/<?php echo $_smarty_tpl->tpl_vars['employeur']->value->getId();?>
" class="btn btn-danger" onclick="return confirm('Etez-vous sûre de vouloir supprimer')"><span class="fa fa-trash"></span></a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employeur/edit/<?php echo $_smarty_tpl->tpl_vars['employeur']->value->getId();?>
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
<div class="modal fade" id="modal-profil">
    <div class="modal-dialog">
        <form method="POST" id="profil_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">AJOUT D'UN PROFIL</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="libelle">Libellé profil</label>
                        <input type="text" name="libelle" class="form-control" id="libelle">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label class="">Etat</label>
                            <select class="form-control" name="etat_profil" id="etat_profil">
                                <option value="">---Choisir l'etat du profil---</option>
                                <option value="actif">actif</option>
                                <option value="bloque">bloqué</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="action" class="btn btn-primary" value="Add" />
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div><?php }
}
