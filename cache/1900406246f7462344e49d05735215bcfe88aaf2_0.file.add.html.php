<?php
/* Smarty version 3.1.30, created on 2020-02-27 16:28:53
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\profils\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e57e03522c171_41305618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1900406246f7462344e49d05735215bcfe88aaf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\profils\\add.html',
      1 => 1582817331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57e03522c171_41305618 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">AJOUTER D'UN PROFIL</h3>
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
Profil/save">
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
