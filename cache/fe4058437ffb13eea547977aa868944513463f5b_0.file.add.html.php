<?php
/* Smarty version 3.1.30, created on 2020-05-14 13:15:01
  from "C:\wamp\www\demande_emploi\src\view\offres\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ebd445544b054_20696658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe4058437ffb13eea547977aa868944513463f5b' => 
    array (
      0 => 'C:\\wamp\\www\\demande_emploi\\src\\view\\offres\\add.html',
      1 => 1589462070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/layout_front/header.html' => 1,
    'file:src/view/layout_front/topbar.html' => 1,
    'file:src/view/layout_front/footer.html' => 1,
  ),
),false)) {
function content_5ebd445544b054_20696658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/layout_front/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
</div>
<?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
