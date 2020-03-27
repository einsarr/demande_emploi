<?php
/* Smarty version 3.1.30, created on 2020-02-27 21:02:39
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\clients\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e58205fcefa23_07310702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aa66719c244770d584cb07eac45fd7893548ef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\clients\\edit.html',
      1 => 1582833704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58205fcefa23_07310702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">MODIFICATION D'UN CLIENT</h3>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.box -->
        <div class="box">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/update" class="col-md-6">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
 <?php }?>">
                        <input type="hidden" name="login" class="form-control" id="login" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getLogin();?>
 <?php }?>">
                        <input type="hidden" name="password" class="form-control" id="password" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getPassword();?>
 <?php }?>">
                        <input type="text" name="prenom" class="form-control" id="prenom" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="cni">CNI</label>
                        <input type="text" name="cni" class="form-control" id="cni" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getCni();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" name="telephone" class="form-control" id="telephone" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getTelephone();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getEmail();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" class="form-control" id="adresse" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getAdresse();?>
 <?php }?>">
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label class="">L'employeur</label>
                            <select class="form-control" name="employeur_id" id="employeur_id">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employeurs']->value, 'employeur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employeur']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['employeur']->value->getId() == $_smarty_tpl->tpl_vars['client']->value->getEmployeur()->getId()) {?>
                                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['employeur']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['employeur']->value->getNom();?>
 - <?php echo $_smarty_tpl->tpl_vars['employeur']->value->getRaison_social();?>
</option>
                                    <?php } else { ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['employeur']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['employeur']->value->getNom();?>
 - <?php echo $_smarty_tpl->tpl_vars['employeur']->value->getRaison_social();?>
</option>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="action" class="btn btn-warning" value="Mèttre à jour" />
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
