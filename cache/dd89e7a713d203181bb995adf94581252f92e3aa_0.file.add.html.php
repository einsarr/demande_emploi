<?php
/* Smarty version 3.1.30, created on 2020-05-13 14:33:39
  from "C:\wamp\www\demande_emploi\src\view\users\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ebc0543a640e8_09280888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd89e7a713d203181bb995adf94581252f92e3aa' => 
    array (
      0 => 'C:\\wamp\\www\\demande_emploi\\src\\view\\users\\add.html',
      1 => 1589380383,
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
function content_5ebc0543a640e8_09280888 (Smarty_Internal_Template $_smarty_tpl) {
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

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="text-center">
                            <?php if (isset($_smarty_tpl->tpl_vars['message_success']->value)) {?> <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['message_success']->value;?>
</span> <?php }?>
                        </div>
                        <div class="text-center">
                            <?php if (isset($_smarty_tpl->tpl_vars['message_error']->value)) {?> <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message_error']->value;?>
</span> <?php }?>
                        </div>
                        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/save" enctype="multipart/form-data">
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
                            <!--<div class="form-group">
                                <label for="avatar">Avatar</label>
                                <input type="file" name="avatar" class="form-control" id="avatar">
                            </div>
                        -->
                            <div class="form-group">
                                <label class="">L'employeur</label>
                                <select class="form-control" name="profil_id" id="profil_id">
                                    <option value="">---Choisir le profil---</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profils']->value, 'profil');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profil']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['profil']->value->getLibelle();?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="action" class="btn btn-primary" value="Enrégistrer" />
                            </div>
                            </!--<div>
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
