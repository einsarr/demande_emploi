<?php
/* Smarty version 3.1.30, created on 2020-04-25 05:37:28
  from "C:\xampp\htdocs\mesProjets\demande_emploi\src\view\cvs\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea3b0782fc665_50871046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003922f2856ffff1eb4f8829cb80126a4bffc9ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\demande_emploi\\src\\view\\cvs\\add.html',
      1 => 1587785838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea3b0782fc665_50871046 (Smarty_Internal_Template $_smarty_tpl) {
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
    </div><?php }
}
