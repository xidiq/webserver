<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\www\lizmap\lizmap/vendor/jelix/jcommunity-module/modules/jcommunity/templates/password_reset_admin_error.tpl') > 1641481291){ return false;
} else {
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.jurl.php');
function template_meta_b40c2ad0baa4603ee95f888388993a81($t){

}
function template_b40c2ad0baa4603ee95f888388993a81($t){
?><div class="jcommunity-box jcommunity-account-password">
    <h1><?php echo jLocale::get('jcommunity~password.form.change.title'); ?></h1>
    <p><?php echo jLocale::get('jcommunity~password.form.change.error.admin.'.$t->_vars['error_status'].''); ?></p>
    <p><a href="<?php jtpl_function_html_jurl( $t,'jauthdb_admin~default:view', array('j_user_login'=>$t->_vars['login']));?>"><?php echo jLocale::get('jcommunity~password.admin.form.back.to.account'); ?> <?php echo $t->_vars['login']; ?></a></p>
</div><?php 
}
return true;}
