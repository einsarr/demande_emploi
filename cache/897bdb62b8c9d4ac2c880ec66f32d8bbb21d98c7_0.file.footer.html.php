<?php
/* Smarty version 3.1.30, created on 2020-03-04 16:04:26
  from "C:\xampp\htdocs\mesProjets\bp_samane\src\view\layout\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5fc37aa78710_24525129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '897bdb62b8c9d4ac2c880ec66f32d8bbb21d98c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesProjets\\bp_samane\\src\\view\\layout\\footer.html',
      1 => 1583334234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fc37aa78710_24525129 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.9.0
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="https://adminlte.io">Samane</a>.</strong> All rights reserved.
</footer>

<!-- jQuery 3 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- jQuery UI 1.11.4 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<?php echo '<script'; ?>
>
    $.widget.bridge('uibutton', $.ui.button);
<?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Morris.js charts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/raphael/raphael.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/morris.js/morris.min.js"><?php echo '</script'; ?>
>
<!-- Sparkline -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
<!-- jvectormap -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
<!-- jQuery Knob Chart -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery-knob/dist/jquery.knob.min.js"><?php echo '</script'; ?>
>
<!-- daterangepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/moment/min/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!-- datepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap WYSIHTML5 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
<!-- Slimscroll -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/js/demo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/datatables.net/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function() {

        $(document).on('submit', '#form_cpt_courant', function(event) {
            event.preventDefault();
            var prenom = $('#prenom').val();
            var nom = $('#nom').val();
            var cni = $('#cni').val();
            var telephone = $('#telephone').val();
            var email = $('#email').val();
            var adresse = $('#adresse').val();
            var login = $('#login').val();
            var password = $('#password').val();
            var type_compte = $('#type_compte').val();
            var employeur_id = $('#employeur_id').val();
            var etat_compte = $('#etat_compte').val();
            if (prenom != '' && nom != '' && cni != "" && telephone != "" &&
                adresse != "" && login != "" && password != "" && type_compte != "" &&
                etat_compte != "") {
                $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/save_cpt_courant",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        alert(data);
                        $('#form_cpt_courant')[0].reset();
                        $('#modal_cpt_courant').modal('hide');
                    }
                });
            } else {
                alert("Veuillez saisir tous les champs svp.");
            }
        });

        $(document).on('submit', '#form_virement', function(event) {
            event.preventDefault();
            var montant = $('#montant').val();
            var compte_id = $('#compte_id').val();
            var compte2_id = $('#compte2_id').val();
            if (montant != '' && compte_id != '' && compte2_id != "") {
                $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Operation/add",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        alert(data);
                        $('#form_virement')[0].reset();
                        $('#modal_virement').modal('hide');
                    }
                });
            } else {
                alert("Veuillez saisir tous les champs svp.");
            }
        });








        $(document).on('submit', '#profil_form', function(event) {
            event.preventDefault();
            var libelle = $('#libelle').val();
            var description = $('#description').val();
            var etat_profil = $('#etat_profil').val();

            if (libelle != '' && description != '' && etat_profil != '') {
                $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Profil/add",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        alert(data);
                        $('#profil_form')[0].reset();
                        $('#modal-profil').modal('hide');
                        $('#example1').DataTable().reload();
                        //DataTable.ajax.reload();

                    }
                });

            } else {
                alert('All field are required');
            }
        });





        // compte courant
        $('#montant_agios_h').hide();
        $('#employeur_h').hide();
        // compte bloque
        $('#frais_ouverture_h').hide();
        $('#depot_initial_h').hide();
        $('#montant_blocage_h').hide();
        // compte epargne
        $('#montant_initial_h').hide();
        $('#date_gele_h').hide();

        $('select[name="type_compte"]').change(function() { // lorsqu'on change de valeur dans la liste
            var valeur = $(this).val(); // valeur sélectionnée
            if (valeur != '') { // si non vide
                if (valeur == 'Compte_courant') { // si "oui"
                    $('#montant_agios_h').show();
                    $('#employeur_h').show();
                    //Cacher les autres
                    $('#frais_ouverture_h').hide();
                    $('#depot_initial_h').hide();
                    $('#montant_blocage_h').hide();
                    $('#montant_initial_h').hide();
                    $('#date_gele_h').hide();
                } else if (valeur == 'Compte_epargne') {
                    $('#frais_ouverture_h').show();
                    $('#depot_initial_h').show();
                    $('#montant_blocage_h').show();
                    //Cacher les autres
                    $('#montant_initial_h').hide();
                    $('#date_gele_h').hide();
                    $('#montant_agios_h').hide();
                    $('#employeur_h').hide();
                } else if (valeur == 'Compte_bloque') {
                    $('#montant_initial_h').show();
                    $('#date_gele_h').show();
                    //Cacher les autres
                    $('#frais_ouverture_h').hide();
                    $('#depot_initial_h').hide();
                    $('#montant_blocage_h').hide();
                    $('#montant_agios_h').hide();
                    $('#employeur_h').hide();
                }
            }
        });

        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
