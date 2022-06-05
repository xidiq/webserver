<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\www\lizmap\lizmap/var/themes/default/jauthdb_admin/crud_list.tpl') > 1620802989){ return false;
} else {
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/meta.html.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.formurl.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.jurl.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/common/function.cycle.php');
 require_once('C:\webserver\www\lizmap\lizmap/plugins/tpl/html/function.pagelinks_bootstrap.php');
function template_meta_417655fad46f8fc4885c249fa6cf916c($t){
jtpl_meta_html_html( $t,'js',$t->_vars['j_jelixwww'].'js/authdb_admin.js');

}
function template_417655fad46f8fc4885c249fa6cf916c($t){
?>
<h1><?php echo jLocale::get('jauthdb_admin~crud.title.list'); ?></h1>

<?php if($t->_vars['canview']):?>

<form action="<?php jtpl_function_html_formurl( $t,'jauthdb_admin~default:view');?>" method="get" class="form-inline">
    <div>
        <label for="search-login"><?php echo jLocale::get('jauthdb_admin~crud.title.view'); ?></label>
        <input id="search-login" name="j_user_login" data-link="<?php jtpl_function_html_jurl( $t,'jauthdb_admin~default:autocomplete');?>">
        <button type="submit" class="btn btn-small"><?php echo jLocale::get('jauthdb_admin~crud.link.view.record'); ?></button>
    </div>
</form>
<?php endif;?>

<table class="records-list table table-hover table-condensed">
<thead>
<tr>
    <th><?php echo jLocale::get('jauthdb_admin~crud.list.col.login'); ?></th>
    <th>&nbsp;</th>
</tr>
</thead>
<tbody>
<?php foreach($t->_vars['list'] as $t->_vars['record']):?>

<tr class="<?php jtpl_function_common_cycle( $t,array('odd','even'));?>">
    <td><?php echo htmlspecialchars($t->_vars['record']->login); ?></td>
    <td>
        <?php if($t->_vars['canview']):?>
        <a href="<?php jtpl_function_html_jurl( $t,'jauthdb_admin~default:view',array('j_user_login'=>$t->_vars['record']->login));?>" class="btn btn-small"><?php echo jLocale::get('jauthdb_admin~crud.link.view.record'); ?></a>
        <?php endif;?>
    </td>
</tr>
<?php endforeach;?>
</tbody>
</table>
<?php if($t->_vars['recordCount'] > $t->_vars['listPageSize']):?>
<div class="record-pages-list">Pages : <?php jtpl_function_html_pagelinks_bootstrap( $t,'jauthdb_admin~default:index', array(), $t->_vars['recordCount'], $t->_vars['page'], $t->_vars['listPageSize'], 'offset' );?></div>
<?php endif;?>
<?php if($t->_vars['cancreate']):?>
<p><a href="<?php jtpl_function_html_jurl( $t,'jauthdb_admin~default:precreate');?>" class="crud-link btn"><?php echo jLocale::get('jauthdb_admin~crud.link.create.record'); ?></a></p>
<?php endif;?>

<?php 
}
return true;}
