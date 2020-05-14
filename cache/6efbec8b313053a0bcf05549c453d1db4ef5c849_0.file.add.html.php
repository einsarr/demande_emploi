<?php
/* Smarty version 3.1.30, created on 2020-05-14 13:26:36
  from "C:\wamp\www\demande_emploi\src\view\cvs\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ebd470c90dbf3_46050191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6efbec8b313053a0bcf05549c453d1db4ef5c849' => 
    array (
      0 => 'C:\\wamp\\www\\demande_emploi\\src\\view\\cvs\\add.html',
      1 => 1589462792,
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
function content_5ebd470c90dbf3_46050191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/layout_front/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="col-md-12">
                <!-- /.box -->
                <div class="box ">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/save">
                            <div class="form-group">
                                <label>Entete</label>
                                <input type="text" class="form-control" name="entete">
                            </div>
                            <div class="form-group">
                                <label>Contenu</label>
                                <textarea name="contenu" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="action" class="btn btn-primary" value="Enrégistrer" />
                            </div>
                        </form>
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
