<?php
/* Smarty version 3.1.30, created on 2020-05-13 13:15:25
  from "C:\wamp\www\demande_emploi\src\view\users\profil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ebbf2edbf3797_14575023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f92aa301e6ce597e1860db0498e1d6050de10c9d' => 
    array (
      0 => 'C:\\wamp\\www\\demande_emploi\\src\\view\\users\\profil.html',
      1 => 1589375700,
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
function content_5ebbf2edbf3797_14575023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/layout_front/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/user4-128x128.jpg" alt="User profile picture">

                            <h3 class="profile-username text-center">Nina Mcintire</h3>

                            <p class="text-muted text-center">Software Engineer</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Followers</b> <a class="pull-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="pull-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Friends</b> <a class="pull-right">13,287</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">About Me</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>

                            <hr>

                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                            <p class="text-muted">Malibu, California</p>

                            <hr>

                            <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                            <p>
                                <span class="label label-danger">UI Design</span>
                                <span class="label label-success">Coding</span>
                                <span class="label label-info">Javascript</span>
                                <span class="label label-warning">PHP</span>
                                <span class="label label-primary">Node.js</span>
                            </p>

                            <hr>

                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                            <li><a href="#timeline" data-toggle="tab">Mon CV</a></li>
                            <li><a href="#settings" data-toggle="tab">Changer le mot de passe</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/user1-128x128.jpg" alt="user image">
                                        <span class="username">
                                  <a href="#">Jonathan Burke Jr.</a>
                                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                </span>
                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers, typographers and the like. Some people hate it and argue for its demise, but others ignore the hate as they create awesome tools to help create filler text for everyone from bacon lovers to Charlie
                                        Sheen fans.
                                    </p>
                                    <ul class="list-inline">
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                        </li>
                                        <li class="pull-right">
                                            <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                (5)</a></li>
                                    </ul>

                                    <input class="form-control input-sm" type="text" placeholder="Type a comment">
                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post clearfix">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/user7-128x128.jpg" alt="User Image">
                                        <span class="username">
                                  <a href="#">Sarah Ross</a>
                                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                </span>
                                        <span class="description">Sent you a message - 3 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers, typographers and the like. Some people hate it and argue for its demise, but others ignore the hate as they create awesome tools to help create filler text for everyone from bacon lovers to Charlie
                                        Sheen fans.
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="form-group margin-bottom-none">
                                            <div class="col-sm-9">
                                                <input class="form-control input-sm" placeholder="Response">
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/user6-128x128.jpg" alt="User Image">
                                        <span class="username">
                                  <a href="#">Adam Jones</a>
                                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                </span>
                                        <span class="description">Posted 5 photos - 5 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="row margin-bottom">
                                        <div class="col-sm-6">
                                            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/photo1.png" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/photo2.png" alt="Photo">
                                                    <br>
                                                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/photo3.jpg" alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/photo4.jpg" alt="Photo">
                                                    <br>
                                                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/photo1.png" alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <ul class="list-inline">
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                        </li>
                                        <li class="pull-right">
                                            <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                (5)</a></li>
                                    </ul>

                                    <input class="form-control input-sm" type="text" placeholder="Type a comment">
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <!-- The timeline -->
                                <ul class="timeline timeline-inverse">
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                        <span class="bg-red">
                                        Octobre 2018 à nos jours
                                        </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-envelope bg-blue"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                            <div class="timeline-body">
                                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo...
                                            </div>
                                            <div class="timeline-footer">
                                                <a class="btn btn-primary btn-xs">Read more</a>
                                                <a class="btn btn-danger btn-xs">Delete</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-user bg-aqua"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                                            </h3>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-comments bg-yellow"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                            <div class="timeline-body">
                                                Take me to your leader! Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood!
                                            </div>
                                            <div class="timeline-footer">
                                                <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                        <span class="bg-green">
                                  3 Jan. 2014
                                </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                            <div class="timeline-body">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <li>
                                        <i class="fa fa-clock-o bg-gray"></i>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/resetPassword">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-4 control-label">Mot de passe actuel</label>

                                        <div class="col-sm-8">
                                            <input type="password" name="password" class="form-control" id="inputName" placeholder="Saisir l'actuel mot de passe">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-4 control-label">Nouveau mot de passe</label>

                                        <div class="col-sm-8">
                                            <input type="password" name="newpassword" class="form-control" id="inputEmail" placeholder="Saisir le nouveau mot de passe">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-4 control-label">Repéter le nouveau mot de passe</label>

                                        <div class="col-sm-8">
                                            <input type="password" name="repeatNewpassword" class="form-control" id="inputName" placeholder="Repéter le nouveau mot de passe">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-10">
                                            <button type="submit" class="btn btn-warning">Valider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
