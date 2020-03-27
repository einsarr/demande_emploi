<?php
/* Smarty version 3.1.30, created on 2020-03-26 21:43:29
  from "C:\xampp\htdocs\mesProjets\demande_emploi\src\view\users\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d13f14d0046_68505410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b733f0dfe36cffb9d590647df9a3bff353ac6695' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\demande_emploi\\src\\view\\users\\add.html',
      1 => 1585255406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d13f14d0046_68505410 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="col-md-6">
                <!-- /.box -->
                <div class="box ">
                    <div class="box-header">

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/save">
                            <div class="form-group">
                                <label for="nom_complet">Nom complete</label>
                                <input type="text" name="nom_complet" class="form-control" id="nom_complet">
                            </div>
                            <div class="form-group">
                                <label for="description">Téléphone</label>
                                <input type="text" name="telephone" class="form-control" id="telephone">
                            </div>
                            <div class="form-group">
                                <label for="description">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="description">Adresse</label>
                                <input type="text" name="adresse" class="form-control" id="adresse">
                            </div>
                            <div class="form-group">
                                <label for="description">Login</label>
                                <input type="text" name="login" class="form-control" id="login">
                            </div>
                            <div class="form-group">
                                <label for="description">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="">Etat</label>
                                    <select class="form-control" name="profil_id" id="profil_id">
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
            </div>
        </section>
    </div>
</div><?php }
}
