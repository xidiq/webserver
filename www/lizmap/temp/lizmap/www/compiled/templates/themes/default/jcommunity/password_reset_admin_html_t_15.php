<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\www\lizmap\lizmap/var/themes/default/jcommunity/password_reset_admin.tpl') > 1620802989){ return false;
} else {
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.jurl.php');
function template_meta_f2e795ad6152e22713dcf96bb52aa72f($t){

}
function template_f2e795ad6152e22713dcf96bb52aa72f($t){
?><div class="jcommunity-box jcommunity-account-password">
    <h1><?php echo jLocale::get('jcommunity~password.form.title'); ?></h1>
    <?php echo jLocale::get('jcommunity~password.admin.form.reset.html'); ?>

    <form method="post" action="<?php jtpl_function_html_jurl( $t,'jcommunity~password_reset_admin:send');?>">
        <p>
            <input type="hidden" name="pass_login" value="<?php echo $t->_vars['login']; ?>">
            <button><?php echo jLocale::get('jcommunity~password.admin.form.email.button'); ?> <?php echo $t->_vars['login']; ?></button></p>
    </form>

    <p><a href="<?php jtpl_function_html_jurl( $t,'jauthdb_admin~default:view', array('j_user_login'=>$t->_vars['login']));?>"><?php echo jLocale::get('jcommunity~password.admin.form.back.to.account'); ?> <?php echo $t->_vars['login']; ?></a></p>
</div><?php 
}
return true;}
