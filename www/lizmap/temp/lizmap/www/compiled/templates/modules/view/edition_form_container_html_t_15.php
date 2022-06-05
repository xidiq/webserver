<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\www\lizmap\lizmap/modules/view/templates/edition_form_container.tpl') > 1640097255){ return false;
} else {
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.ctrl_label.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.ctrl_control.php');
function template_meta_96b3fc0627f3618bb96bfcc78ae20760($t){
$t->meta('view~edition_form_container');
$t->meta('view~edition_form_container');
$t->meta('view~edition_form_container');

}
function template_96b3fc0627f3618bb96bfcc78ae20760($t){
?>

<?php foreach($t->_vars['container']->getChildrenBeforeTab() as $t->_vars['child']):?>
    <?php if($t->_vars['child']->isGroupBox()):?>
        <fieldset id="<?php echo $t->_vars['child']->getHtmlId(); ?>"<?php if(!$t->_vars['groupVisibilities'][$t->_vars['child']->getHtmlId()]):?> style="display:none;"<?php endif;?>>
        <legend style="font-weight:bold;"><?php echo $t->_vars['child']->getName(); ?></legend>
            <div class="jforms-table-group" id="<?php echo $t->_vars['child']->getHtmlId(); ?>">
            <?php $tplClass=get_class($t);$subTpl = new $tplClass();if (true) { $subTpl->_privateVars = $t->_privateVars;}
$subTpl->assign(array('container'=>$t->_vars['child'], 'groupVisibilities'=>$t->_vars['groupVisibilities']));$subTpl->display('view~edition_form_container');
?>

            </div>
        </fieldset>
    <?php else:?>
        <div class="control-group">
            <?php jtpl_function_html_ctrl_label( $t,$t->_vars['child']->getCtrlRef());?>
            <div class="controls">
                <?php jtpl_function_html_ctrl_control( $t,$t->_vars['child']->getCtrlRef());?>
            </div>
        </div>
    <?php endif;?>
<?php endforeach;?>

<?php if($t->_vars['container']->hasTabChildren()):?>
<ul id="<?php echo $t->_vars['container']->getParentId(); ?>-tabs" class="nav nav-tabs">
    <?php foreach($t->_vars['container']->getTabChildren() as $t->_vars['tabChild']):?>

    <li<?php if(!$t->_vars['groupVisibilities'][$t->_vars['tabChild']->getHtmlId()]):?> style="display:none;"<?php endif;?>><a href="#<?php echo $t->_vars['tabChild']->getHtmlId(); ?>"
           data-toggle="tab"><?php echo $t->_vars['tabChild']->getName(); ?></a></li>
    <?php endforeach;?>
</ul>

<div id="<?php echo $t->_vars['container']->getParentId(); ?>-tab-content" class="tab-content">
    <?php foreach($t->_vars['container']->getTabChildren() as $t->_vars['tabChild']):?>

        <div class="tab-pane" id="<?php echo $t->_vars['tabChild']->getHtmlId(); ?>">
            <?php $tplClass=get_class($t);$subTpl = new $tplClass();if (true) { $subTpl->_privateVars = $t->_privateVars;}
$subTpl->assign(array('container'=>$t->_vars['tabChild'], 'groupVisibilities'=>$t->_vars['groupVisibilities']));$subTpl->display('view~edition_form_container');
?>

        </div>
    <?php endforeach;?>
</div>
<?php endif;?>

<?php foreach($t->_vars['container']->getChildrenAfterTab() as $t->_vars['child']):?>
    <?php if($t->_vars['child']->isGroupBox()):?>
        <fieldset id="<?php echo $t->_vars['child']->getHtmlId(); ?>"<?php if(!$t->_vars['groupVisibilities'][$t->_vars['child']->getHtmlId()]):?> style="display:none;"<?php endif;?>>
            <legend style="font-weight:bold;"><?php echo $t->_vars['child']->getName(); ?></legend>
            <div class="jforms-table-group" id="<?php echo $t->_vars['child']->getHtmlId(); ?>">
                <?php $tplClass=get_class($t);$subTpl = new $tplClass();if (true) { $subTpl->_privateVars = $t->_privateVars;}
$subTpl->assign(array('container'=>$t->_vars['child'], 'groupVisibilities'=>$t->_vars['groupVisibilities']));$subTpl->display('view~edition_form_container');
?>

            </div>
        </fieldset>
    <?php else:?>
        <div class="control-group">
            <?php jtpl_function_html_ctrl_label( $t,$t->_vars['child']->getCtrlRef());?>
            <div class="controls">
                <?php jtpl_function_html_ctrl_control( $t,$t->_vars['child']->getCtrlRef());?>
            </div>
        </div>
    <?php endif;?>
<?php endforeach;?><?php 
}
return true;}
