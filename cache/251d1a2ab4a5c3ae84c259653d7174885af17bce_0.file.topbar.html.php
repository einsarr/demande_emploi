<?php
/* Smarty version 3.1.30, created on 2020-03-02 15:09:06
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\layout\topbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5d13823f1135_25090508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '251d1a2ab4a5c3ae84c259653d7174885af17bce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\layout\\topbar.html',
      1 => 1583158137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5d13823f1135_25090508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Banque</b>peuple</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Banque</b>Samane</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/sarr.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">Moussa SARR</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/sarr.jpg" class="img-circle" alt="User Image">

                            <p>
                                Moussa SARR - Web Developer
                                <small>Since 2016</small>
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-info btn-flat">Mon profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employe/deconnection" class="btn btn-danger btn-flat">Se déconnecter</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header><?php }
}
