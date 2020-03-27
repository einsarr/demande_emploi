<?php
/* Smarty version 3.1.30, created on 2020-03-04 15:15:10
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\comptes\type.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5fb7ee61b445_22530850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b05a82d669fbf5681e16ff8c19fa6e98cef8e75a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\comptes\\type.html',
      1 => 1583324988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fb7ee61b445_22530850 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.box -->
        <div class="box ">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="callout callout-info">
                    <h3 class="box-title"> <span class="fa  fa-eur"></span> LES DIFFERENTS TYPE DE COMPTES </h3>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Nouveau compte</h3>
                            </div>
                            <div class="box-body">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_cpt_courant">
                                    <span class="fa fa-cc-mastercard"></span> COMPTE COURANT
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_cpt_epargne">
                                   <span class="fa fa-credit-card"></span> COMPTE EPARGNE
                                </button>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_cpt_bloque">
                                   <span class="fa fa-cc-paypal"></span> COMPTE BLOQUE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal_cpt_courant">
                    <div class="modal-dialog">
                        <form method="post" id="form_cpt_courant">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">COMPTE COURANT</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="prenom">Prénom</label>
                                                <input type="text" name="prenom" class="form-control" id="prenom">
                                            </div>
                                            <div class="form-group">
                                                <label for="nom">Nom</label>
                                                <input type="text" name="nom" class="form-control" id="nom">
                                            </div>
                                            <div class="form-group">
                                                <label for="cni">CNI</label>
                                                <input type="text" name="cni" class="form-control" id="cni">
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone">Téléphone</label>
                                                <input type="text" name="telephone" class="form-control" id="telephone">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" id="email">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="">L'agence</label>
                                                    <select class="form-control" name="agence_id" id="agence_id">
                                                        <option value="">---Choisir l'agence---</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agences']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['agence']->value->getLibelle();?>
 - <?php echo $_smarty_tpl->tpl_vars['agence']->value->getNumero_agence();?>
</option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="adresse">Adresse</label>
                                                <input type="text" name="adresse" class="form-control" id="adresse">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Login</label>
                                                <input type="text" name="login" class="form-control" id="login">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control" id="password">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="type_compte" value="compte courant" id="type_compte">
                                            </div>
                                            <!-- compte courant-->
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="">L'employeur</label>
                                                    <select class="form-control" name="employeur_id" id="employeur_id">
                                                        <option value="">---Choisir l'employeur---</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employeurs']->value, 'employeur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employeur']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['employeur']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['employeur']->value->getNom();?>
 - <?php echo $_smarty_tpl->tpl_vars['employeur']->value->getRaison_social();?>
</option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Etat du compte</label>
                                                <select class="form-control" name="etat_compte" id="etat_compte">
                                                    <option value="">---Choisir l'etat du compte---</option>
                                                    <option value="actif">actif</option>
                                                    <option value="ferme">Fermé</option>
                                                    <option value="bloque">bloqué</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermer</button>
                                    <input type="submit" class="btn btn-primary" value="Add" name="action">
                                </div>
                            </div>
                        </form>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade" id="modal-primary">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Default Modal</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prenom">Prénom</label>
                                            <input type="text" name="prenom" class="form-control" id="prenom">
                                        </div>
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input type="text" name="nom" class="form-control" id="nom">
                                        </div>
                                        <div class="form-group">
                                            <label for="cni">CNI</label>
                                            <input type="text" name="cni" class="form-control" id="cni">
                                        </div>
                                        <div class="form-group">
                                            <label for="telephone">Téléphone</label>
                                            <input type="text" name="telephone" class="form-control" id="telephone">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email">
                                        </div>

                                        <div class="form-group">
                                            <label for="adresse">Adresse</label>
                                            <input type="text" name="adresse" class="form-control" id="adresse">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Login</label>
                                            <input type="text" name="login" class="form-control" id="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="">Type de compte</label>
                                            <select class="form-control" name="type_compte" id="type_compte">
                                                <option value="">---Choisir---</option>
                                                <option value="Compte_courant">Compte courant</option>
                                                <option value="Compte_epargne">Compt épargne</option>
                                                <option value="Compte_bloque">Compte bloqué</option>
                                            </select>
                                        </div>
                                        <!-- compte courant-->
                                        <div class="form-group" id="montant_agios_h">
                                            <label for="montant_agios">Montant agios</label>
                                            <input type="text" name="montant_agios" class="form-control" id="montant_agios">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="">L'employeur</label>
                                                <select class="form-control" name="employeur_id" id="employeur_id">
                                                    <option value="">---Choisir l'employeur---</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employeurs']->value, 'employeur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employeur']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['employeur']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['employeur']->value->getNom();?>
 - <?php echo $_smarty_tpl->tpl_vars['employeur']->value->getRaison_social();?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </select>
                                            </div>
                                        </div>
                                        <!-- compte bloque-->
                                        <div class="form-group" id="frais_ouverture_h">
                                            <label for="frais_ouverture">Frais ouverture</label>
                                            <input type="text" name="frais_ouverture" class="form-control" id="frais_ouverture">
                                        </div>
                                        <div class="form-group" id="depot_initial_h">
                                            <label for="depot_initial">Dépot initial</label>
                                            <input type="text" name="depot_initial" class="form-control" id="depot_initial">
                                        </div>
                                        <div class="form-group" id="montant_blocage_h">
                                            <label for="montant_blocage_h">Montant blocage</label>
                                            <input type="text" name="montant_blocage" class="form-control" id="montant_blocage">
                                        </div>
                                        <!-- compte epargne-->
                                        <div class="form-group" id="montant_initial_h">
                                            <label for="montant_initial">Montant initial</label>
                                            <input type="text" name="montant_initial" class="form-control" id="montant_initial">
                                        </div>
                                        <div class="form-group" id="date_gele_h">
                                            <label for="date_gele">Date gèle</label>
                                            <input type="date" name="date_gele" class="form-control" id="date_gele">
                                        </div>

                                        <div class="form-group" id="date_gele_h">
                                            <label for="solde">Solde du compte</label>
                                            <input type="text" name="solde" class="form-control" id="solde">
                                        </div>
                                        <div class="form-group">
                                            <label class="">Etat du compte</label>
                                            <select class="form-control" name="etat_compte" id="etat_compte">
                                                <option value="">---Choisir l'etat du compte---</option>
                                                <option value="actif">actif</option>
                                                <option value="fermer">Fermé</option>
                                                <option value="bloque">bloqué</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="action" class="btn btn-primary" value="Add" />
                                            <button type="button" class="btn btn-danger">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade" id="modal-warning">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Default Modal</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div><?php }
}
