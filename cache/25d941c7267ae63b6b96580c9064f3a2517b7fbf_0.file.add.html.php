<?php
/* Smarty version 3.1.30, created on 2020-04-23 01:49:00
  from "C:\xampp\htdocs\mesProjets\demande_emploi\src\view\offres\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea0d7ec71bcb7_76015297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d941c7267ae63b6b96580c9064f3a2517b7fbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\demande_emploi\\src\\view\\offres\\add.html',
      1 => 1587599334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea0d7ec71bcb7_76015297 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="col-md-6">
                <!-- /.box -->
                <div class="box ">
                    <div class="box-header">
                        AJOUTER UNE OFFRE
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/save" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="entreprise_id">L'entreprise</label>
                                <input type="text" name="entreprise_id" class="form-control" id="entreprise_id" placeholder="entreprise en session">
                            </div>
                            <div class="form-group">
                                <label class="">La categorie</label>
                                <select class="form-control" name="categorie_id" id="categorie_id">
                                    <option value="">---Choisir le categorie---</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getLibelle();?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="libelle">Intitullé de l'offre</label>
                                <input type="text" name="libelle" class="form-control" id="libelle">
                            </div>
                            <div class="form-group">
                                <label for="favori">Favoris</label>
                                <input type="text" name="favori" class="form-control" id="favori">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="action" class="btn btn-primary" value="Enrégistrer" />
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </section>
    </div>
</div><?php }
}
