<?php
/* Smarty version 3.1.30, created on 2020-03-26 21:35:07
  from "C:\xampp\htdocs\mesProjets\demande_emploi\src\view\layout_front\topbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d11fb36a087_93795901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24df6e0240694ffc6b98664fbe57dda1532a4f13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\demande_emploi\\src\\view\\layout_front\\topbar.html',
      1 => 1585254904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d11fb36a087_93795901 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="../../index2.html" class="navbar-brand"><b>Accueil</b></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Qui sommes-nous ? <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Partenaires</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catégories <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Développeur</a></li>
                            <li><a href="#">Bureautique</a></li>
                            <li><a href="#">Restauration</a></li>
                            <li><a href="#">Assistanat de direction</a></li>
                            <li><a href="#">Webmaster</a></li>
                            <li><a href="#">SIG</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Se connecter</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                    </div>
                </form>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="fa fa-user"> Créer un compte</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome/addCompte" class="btn btn-default btn-flat">Ouvrir un compte</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome/seConnecter" class="btn btn-default btn-flat">Se connecter</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header><?php }
}
