<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\www\lizmap\lizmap/var/themes/default/jcommunity/registration.tpl') > 1616160726){ return false;
} else {
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.jurl.php');
function template_meta_408cb80c38959d586f3655c66afba62c($t){
if(isset($t->_vars['form'])) { $builder = $t->_vars['form']->getBuilder( 'htmlbootstrap');
    $builder->setOptions(array());
    $builder->outputMetaContent($t);}

}
function template_408cb80c38959d586f3655c66afba62c($t){
?><div class="jcommunity-box jcommunity-account">
    <h1><?php echo jLocale::get('jcommunity~register.form.create.title'); ?></h1>

    <p><?php echo jLocale::get('jcommunity~register.form.create.text.html'); ?></p>

    <?php  $formfull = $t->_vars['form'];
    $formfullBuilder = $formfull->getBuilder( 'htmlbootstrap');
    $formfullBuilder->setOptions(array());
    $formfullBuilder->setAction('jcommunity~registration:save', array());
    $formfullBuilder->outputHeader();
    $formfullBuilder->outputAllControls();
    $formfullBuilder->outputFooter();?>


    <p><a href="<?php jtpl_function_html_jurl( $t,'jcommunity~login:index');?>"  class="btn"><?php echo jLocale::get('jcommunity~login.cancel.and.back.to.login'); ?></a></p>
</div><?php 
}
return true;}
