<?php
/* Smarty version 3.1.30, created on 2020-05-13 16:17:07
  from "C:\wamp\www\demande_emploi\src\view\offres\offres_categorie.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ebc1d83d0c288_88292390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6bd15b08d01e25a99ebd5a0c941d2e2db998d0' => 
    array (
      0 => 'C:\\wamp\\www\\demande_emploi\\src\\view\\offres\\offres_categorie.html',
      1 => 1587691561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebc1d83d0c288_88292390 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <h1><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getLibelle();?>
</h1>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorie']->value->getOffres(), 'offre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
?>
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3></h3>
                            <?php echo $_smarty_tpl->tpl_vars['offre']->value->getLibelle();?>

                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['offre']->value->getEntreprise()->getNom_complet();?>

                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </section>
    </div>
</div><?php }
}
