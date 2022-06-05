<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\www\lizmap\lizmap/var/themes/default/jacl2db_admin/user_rights.tpl') > 1616160726){ return false;
} else {
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/meta.html.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.formurl.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.formurlparam.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.jurl.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/common/function.cycle.php');
function template_meta_0939a0e7ca23157b5658ca5fead0efe1($t){
jtpl_meta_html_html( $t,'css',$t->_vars['j_jelixwww'].'design/records_list.css');
jtpl_meta_html_html( $t,'css',$t->_vars['j_jelixwww'].'design/jacl2.css');
jtpl_meta_html_html( $t,'js',$t->_vars['j_jelixwww'].'js/acl2db_admin.js');

}
function template_0939a0e7ca23157b5658ca5fead0efe1($t){
?>



<h1><?php echo jLocale::get('jacl2db_admin~acl2.user.rights.title'); ?> <?php echo $t->_vars['user']; ?></h1>


<form action="<?php jtpl_function_html_formurl( $t,'jacl2db_admin~users:saverights',array('user'=>$t->_vars['user']));?>" method="post">
<fieldset><legend><?php echo jLocale::get('jacl2db_admin~acl2.rights.title'); ?></legend>

<div><?php jtpl_function_html_formurlparam( $t,'jacl2db_admin~users:saverights',array('user'=>$t->_vars['user']));?></div>
<table class="records-list jacl2-list-user table-striped" id="rights-list"
       data-yes-img="<?php echo $t->_vars['j_jelixwww']; ?>/design/icons/accept.png"
       data-yes-title="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?>"
       data-no-img="<?php echo $t->_vars['j_jelixwww']; ?>/design/icons/cancel.png"
       data-no-title="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.forbidden'); ?>"
>
<thead>
    <tr>
        <th rowspan="2"></th>
        <th class="colreduced" rowspan="2"><?php echo jLocale::get('jacl2db_admin~acl2.col.personnal.rights'); ?></th>
        <th class="colreduced" rowspan="2"><?php echo jLocale::get('jacl2db_admin~acl2.col.personnal.rights.res'); ?></th>
        <?php if($t->_vars['nbgrp']):?>

        <th colspan="<?php echo $t->_vars['nbgrp']; ?>"><?php echo jLocale::get('jacl2db_admin~acl2.col.groups'); ?></th>
        <?php endif;?>

        <th class="colblank" rowspan="2"></th>
        <th class="colreduced" rowspan="2"><?php echo jLocale::get('jacl2db_admin~acl2.col.resulting'); ?> <?php echo $t->_vars['user']; ?></th>
    </tr>
    <tr>
    <?php foreach($t->_vars['groups'] as $t->_vars['group']):?>

        <?php if(isset($t->_vars['groupsuser'][$t->_vars['group']->id_aclgrp])):?>
        <th><?php echo $t->_vars['group']->name; ?> <a class="removegroup" href="<?php jtpl_function_html_jurl( $t,'jacl2db_admin~users:removegroup',array('user'=>$t->_vars['user'],'grpid'=>$t->_vars['group']->id_aclgrp));?>" title="<?php echo jLocale::get('jacl2db_admin~acl2.remove.group.tooltip'); ?>">-</a></th>
        <?php else:?>

        <th class="notingroup"><?php echo $t->_vars['group']->name; ?> <a class="addgroup" href="<?php jtpl_function_html_jurl( $t,'jacl2db_admin~users:addgroup',array('user'=>$t->_vars['user'],'grpid'=>$t->_vars['group']->id_aclgrp));?>" title="<?php echo jLocale::get('jacl2db_admin~acl2.add.group.tooltip'); ?>">+</a></th>
        <?php endif;?>

    <?php endforeach;?>
    </tr>
</thead>
<tfoot>
    <tr>
        <td></td>
        <td><input type="submit" value="<?php echo jLocale::get('jacl2db_admin~acl2.save.button'); ?>" class="btn"/></td>
        <td></td>
        <?php if($t->_vars['nbgrp']):?>

        <td colspan="<?php echo $t->_vars['nbgrp']; ?>"></td>
        <?php endif;?>

        <td></td>
        <td></td>
    </tr>
</tfoot>
<tbody>
<?php $t->_vars['currentsbjgroup'] = '---';?>
<?php foreach($t->_vars['rights'] as $t->_vars['subject']=>$t->_vars['right']):?>

<?php if($t->_vars['subjects'][$t->_vars['subject']]['grp'] && $t->_vars['currentsbjgroup'] != $t->_vars['subjects'][$t->_vars['subject']]['grp']):?>
<tr class="<?php jtpl_function_common_cycle( $t,array('odd','even'));?>">
    <th colspan="<?php echo $t->_vars['nbgrp']*2+4; ?>"><h3><?php echo $t->_vars['sbjgroups_localized'][$t->_vars['subjects'][$t->_vars['subject']]['grp']]; ?></h3></th>
</tr><?php $t->_vars['currentsbjgroup'] = $t->_vars['subjects'][$t->_vars['subject']]['grp'];?>
<?php endif;?>
<tr class="<?php jtpl_function_common_cycle( $t,array('odd','even'));?>">
    <th><label for="<?php echo htmlspecialchars($t->_vars['subject']); ?>"><?php echo htmlspecialchars($t->_vars['subjects'][$t->_vars['subject']]['label']); ?></label></th>
    <?php $t->_vars['resultr']='';?>
    <?php foreach($t->_vars['right'] as $t->_vars['group']=>$t->_vars['r']):?>
        <?php if($t->_vars['hisgroup'] && $t->_vars['group'] == $t->_vars['hisgroup']->id_aclgrp):?>
            <?php if($t->_vars['r']=='y' && $t->_vars['resultr']==''):?><?php $t->_vars['resultr']='y';?><?php endif;?>
            <?php if($t->_vars['r']=='n'):?><?php $t->_vars['resultr']='n';?><?php endif;?>
    <td>
        <select name="rights[<?php echo $t->_vars['subject']; ?>]" id="<?php echo htmlspecialchars($t->_vars['subject']); ?>" class="input-medium user-right-authorization">
        <option value=""  <?php if($t->_vars['r'] == ''):?>selected="selected"<?php endif;?>><?php echo jLocale::get('jacl2db_admin~acl2.group.rights.no'); ?></option>
        <option value="y" <?php if($t->_vars['r'] == 'y'):?>selected="selected"<?php endif;?>><?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?></option>
        <option value="n" <?php if($t->_vars['r'] == 'n'):?>selected="selected"<?php endif;?>><?php echo jLocale::get('jacl2db_admin~acl2.group.rights.forbidden'); ?></option>
        </select>
        <input type="hidden" name="currentrights[<?php echo $t->_vars['subject']; ?>]" value="<?php echo $t->_vars['r']; ?>"/>
    </td>
    <td>    <?php if($t->_vars['rightsWithResources'][$t->_vars['subject']]):?><?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?><?php endif;?></td>
        <?php else:?>

    <td <?php if(!isset($t->_vars['groupsuser'][$t->_vars['group']])):?>class="notingroup">
            <?php if($t->_vars['r'] =='y'):?><img src="<?php echo $t->_vars['j_jelixwww']; ?>/design/icons/accept_disabled.png" alt="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?>"  title="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?>"/>
            <?php elseif($t->_vars['r']=='n'):?><img src="<?php echo $t->_vars['j_jelixwww']; ?>/design/icons/cancel_disabled.png" alt="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.forbidden'); ?>" title="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.forbidden'); ?>" /><?php endif;?>
        <?php else:?> data-right="<?php echo $t->_vars['r']; ?>">
            <?php if($t->_vars['r'] =='y'):?><img src="<?php echo $t->_vars['j_jelixwww']; ?>/design/icons/accept.png" alt="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?>" title="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?>" /><?php if($t->_vars['resultr']==''):?><?php $t->_vars['resultr']='y';?><?php endif;?>
            <?php elseif($t->_vars['r']=='n'):?><img src="<?php echo $t->_vars['j_jelixwww']; ?>/design/icons/cancel.png" alt="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.forbidden'); ?>" title="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.forbidden'); ?>" /><?php $t->_vars['resultr']='n';?><?php endif;?>
        <?php endif;?>
    </td>
    <?php endif;?>
    <?php endforeach;?>
    <td class="colblank"></td>
    <td class="rights-result">
        <?php if($t->_vars['resultr'] =='y'):?><img src="<?php echo $t->_vars['j_jelixwww']; ?>/design/icons/accept.png" alt="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?>" title="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?>" />
        <?php else:?><img src="<?php echo $t->_vars['j_jelixwww']; ?>/design/icons/cancel.png" alt="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.forbidden'); ?>" title="<?php echo jLocale::get('jacl2db_admin~acl2.group.rights.forbidden'); ?>" /><?php endif;?>
    </td>
</tr>
<?php endforeach;?>
</tbody>
</table>
    <div class="legend">
        <ul>
            <li><span class="right-yes"><?php echo jLocale::get('jacl2db_admin~acl2.group.rights.yes'); ?></span> : <?php echo jLocale::get('jacl2db_admin~acl2.group.help.rights.yes'); ?></li>
            <li><span class="right-no"><?php echo jLocale::get('jacl2db_admin~acl2.group.rights.no'); ?></span>: <?php echo jLocale::get('jacl2db_admin~acl2.group.help.rights.no'); ?></li>
            <li><span class="right-forbidden"><?php echo jLocale::get('jacl2db_admin~acl2.group.rights.forbidden'); ?></span>: <?php echo jLocale::get('jacl2db_admin~acl2.group.help.rights.forbidden'); ?></li>
        </ul>
    </div>
<?php if($t->_vars['hasRightsOnResources']):?>

<p><?php echo jLocale::get('jacl2db_admin~acl2.has.rights.on.resources'); ?>. <a href="<?php jtpl_function_html_jurl( $t,'jacl2db_admin~users:rightres',array('user'=>$t->_vars['user']));?>" class="btn"><?php echo jLocale::get('jacl2db_admin~acl2.see.rights.on.resources'); ?></a></p>
<?php endif;?>

</fieldset>
</form>

<?php 
}
return true;}
