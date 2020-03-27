<?php
/* Smarty version 3.1.30, created on 2020-03-02 15:42:59
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\agences\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5d1b734ff833_29437134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9041dab0d7c915197dc3d68aac3dcc54b067b09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\agences\\liste.html',
      1 => 1583160173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5d1b734ff833_29437134 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Agence/add" class="btn btn-primary">
                <span class="fa fa-plus"></span> Nouveau
            </a>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">LISTE DES AGENCES</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Libellé</th>
                            <th>Adresse</th>
                            <th>Standard</th>
                            <th>Numéro</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('num', 1);
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agences']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['agence']->value->getLibelle();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['agence']->value->getAdresse();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['agence']->value->getStandard();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['agence']->value->getNumero_agence();?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Agence/delete/<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
" class="btn btn-danger" onclick="return confirm('Etez-vous sûre de vouloir supprimer')"><span class="fa fa-trash"></span></a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Agence/edit/<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
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
