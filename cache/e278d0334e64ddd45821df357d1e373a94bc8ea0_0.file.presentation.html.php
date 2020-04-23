<?php
/* Smarty version 3.1.30, created on 2020-04-23 03:33:36
  from "C:\xampp\htdocs\mesProjets\demande_emploi\src\view\layout_front\presentation.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea0f070959974_23491625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e278d0334e64ddd45821df357d1e373a94bc8ea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\demande_emploi\\src\\view\\layout_front\\presentation.html',
      1 => 1587605614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea0f070959974_23491625 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entreprises']->value, 'entreprise');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entreprise']->value) {
?>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->getNom_complet();?>
</h3>

                            <p>Nombre de compte</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
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
