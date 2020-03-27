<?php
/* Smarty version 3.1.30, created on 2020-02-27 20:07:15
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\employes\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e581363982b51_38668428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41db4c050f874c2c20bdbce8915a1a0870d69ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\employes\\edit.html',
      1 => 1582830433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e581363982b51_38668428 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">MODIFICATION D'UNE AGENCE</h3>
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
Employe/update" class="col-md-6">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['employe']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getId();?>
 <?php }?>">
                        <input type="hidden" name="login" class="form-control" id="login" value="<?php if (isset($_smarty_tpl->tpl_vars['employe']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getLogin();?>
 <?php }?>">
                        <input type="hidden" name="password" class="form-control" id="password" value="<?php if (isset($_smarty_tpl->tpl_vars['employe']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getPassword();?>
 <?php }?>">
                        <input type="text" name="prenom" class="form-control" id="prenom" value="<?php if (isset($_smarty_tpl->tpl_vars['employe']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getPrenom();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['employe']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getNom();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" name="telephone" class="form-control" id="telephone" value="<?php if (isset($_smarty_tpl->tpl_vars['employe']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getTelephone();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php if (isset($_smarty_tpl->tpl_vars['employe']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getEmail();?>
 <?php }?>">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" class="form-control" id="adresse" value="<?php if (isset($_smarty_tpl->tpl_vars['employe']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getAdresse();?>
 <?php }?>">
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label class="">L'agence</label>
                            <select class="form-control" name="agence_id" id="agence_id">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agences']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['agence']->value->getId() == $_smarty_tpl->tpl_vars['employe']->value->getAgence()->getId()) {?>
                                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['agence']->value->getLibelle();?>
 - <?php echo $_smarty_tpl->tpl_vars['agence']->value->getAdresse();?>
</option>
                                    <?php } else { ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['agence']->value->getLibelle();?>
 - <?php echo $_smarty_tpl->tpl_vars['agence']->value->getAdresse();?>
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
                        <div class="form-group">
                            <label class="">Le profil</label>
                            <select class="form-control" name="profil_id" id="profil_id">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profils']->value, 'profil');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profil']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['profil']->value->getId() == $_smarty_tpl->tpl_vars['employe']->value->getProfil()->getId()) {?>
                                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['profil']->value->getLibelle();?>
</option>
                                    <?php } else { ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['profil']->value->getLibelle();?>
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
