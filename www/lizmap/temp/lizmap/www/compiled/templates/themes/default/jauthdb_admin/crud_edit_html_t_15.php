<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\www\lizmap\lizmap/var/themes/default/jauthdb_admin/crud_edit.tpl') > 1616160726){ return false;
} else {
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.jurl.php');
function template_meta_4000682427be3ac0a45747745824d99a($t){
if(isset($t->_vars['form'])) { $builder = $t->_vars['form']->getBuilder( 'htmlbootstrap');
    $builder->setOptions(array());
    $builder->outputMetaContent($t);}
if(isset($t->_vars['form'])) { $builder = $t->_vars['form']->getBuilder( 'htmlbootstrap');
    $builder->setOptions(array());
    $builder->outputMetaContent($t);}

}
function template_4000682427be3ac0a45747745824d99a($t){
?><?php if($t->_vars['id'] === null):?>

<h1><?php echo jLocale::get('jauthdb_admin~crud.title.create'); ?></h1>
<?php  $formfull = $t->_vars['form'];
    $formfullBuilder = $formfull->getBuilder( 'htmlbootstrap');
    $formfullBuilder->setOptions(array());
    $formfullBuilder->setAction( 'default:savecreate', array());
    $formfullBuilder->outputHeader();
    $formfullBuilder->outputAllControls();
    $formfullBuilder->outputFooter();?>

    <?php if($t->_vars['randomPwd']):?>
        <p><?php echo jLocale::get('jauthdb_admin~crud.form.random.password'); ?> <?php echo $t->_vars['randomPwd']; ?></p>
    <?php endif;?>


    <?php foreach($t->_vars['otherInfo'] as $t->_vars['info']):?>
        <?php echo $t->_vars['info']; ?>

    <?php endforeach;?>

    <p><a href="<?php jtpl_function_html_jurl( $t,'default:index');?>" class="crud-link btn"><?php echo jLocale::get('jauthdb_admin~crud.link.return.to.list'); ?></a></p>

<?php else:?>

<h1><?php echo jLocale::get('jauthdb_admin~crud.title.update'); ?></h1>

<?php  $formfull = $t->_vars['form'];
    $formfullBuilder = $formfull->getBuilder( 'htmlbootstrap');
    $formfullBuilder->setOptions(array());
    $formfullBuilder->setAction( 'default:saveupdate', array('j_user_login'=>$t->_vars['id']));
    $formfullBuilder->outputHeader();
    $formfullBuilder->outputAllControls();
    $formfullBuilder->outputFooter();?>


    <?php foreach($t->_vars['otherInfo'] as $t->_vars['info']):?>
        <?php echo $t->_vars['info']; ?>

    <?php endforeach;?>

    <p><a href="<?php jtpl_function_html_jurl( $t,'default:view', array('j_user_login'=>$t->_vars['id']));?>" class="crud-link btn"><?php echo jLocale::get('jauthdb_admin~crud.link.return.to.view'); ?></a>.</p>
<?php endif;?>



<?php 
}
return true;}
