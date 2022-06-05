<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\www\lizmap\lizmap/modules/view/templates/edition_form.tpl') > 1648133822){ return false;
} else {
 require_once('C:\webserver\www\lizmap\lizmap/plugins/tpl/html/function.jmessage_bootstrap.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.ctrl_label.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.ctrl_control.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.formreset.php');
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.formsubmit.php');
function template_meta_4db61a76d2f1983eed5b33cbe9e9c6a5($t){
if(isset($t->_vars['form'])) { $builder = $t->_vars['form']->getBuilder( "htmlbootstrap");
    $builder->setOptions( array("errorDecorator"=>"lizEditionErrorDecorator", "plugins"=>$t->_vars['formPlugins'], "attributes"=>array('data-new-feature-action'=>$t->_vars['ajaxNewFeatureUrl']), "widgetsAttributes" => $t->_vars['widgetsAttributes'] ));
    $builder->outputMetaContent($t);}
$t->meta('view~edition_form_container');

}
function template_4db61a76d2f1983eed5b33cbe9e9c6a5($t){
?><div>
  <?php if($t->_vars['title']):?>
  <h3><?php echo $t->_vars['title']; ?></h3>
  <?php else:?>

  <h3><?php echo jLocale::get('view~edition.modal.title.default'); ?></h3>
  <?php endif;?>

</div>

<?php jtpl_function_html_jmessage_bootstrap( $t);?>

<?php  $t->_privateVars['__form'] = $t->_vars['form'];
$t->_privateVars['__formbuilder'] = $t->_privateVars['__form']->getBuilder( "htmlbootstrap");
$t->_privateVars['__formbuilder']->setOptions( array("errorDecorator"=>"lizEditionErrorDecorator", "plugins"=>$t->_vars['formPlugins'], "attributes"=>array('data-new-feature-action'=>$t->_vars['ajaxNewFeatureUrl']), "widgetsAttributes" => $t->_vars['widgetsAttributes'] ));
$t->_privateVars['__formbuilder']->setAction( "lizmap~edition:saveFeature", array());
$t->_privateVars['__formbuilder']->outputHeader();
$t->_privateVars['__formViewMode'] = 0;
$t->_privateVars['__displayed_ctrl'] = array();
?>

<?php if($t->_vars['attributeEditorForm']):?>

    <?php $tplClass=get_class($t);$subTpl = new $tplClass();if (true) { $subTpl->_privateVars = $t->_privateVars;}
$subTpl->assign( array('container'=>$t->_vars['attributeEditorForm'], 'groupVisibilities'=>$t->_vars['groupVisibilities']));$subTpl->display('view~edition_form_container');
?>

<?php else:?>
    <?php if(is_array($t->_vars['fieldNames'])){
                $ctrls_to_display = $t->_vars['fieldNames'];
                $ctrls_notto_display = null;
            }
            else {
                $t->_privateVars['__form'] = $t->_vars['fieldNames'];
                $ctrls_to_display=null;
                $ctrls_notto_display = null;
            }
if (!isset($t->_privateVars['__formbuilder'])) {
    $t->_privateVars['__formViewMode'] = 1;
    $t->_privateVars['__formbuilder'] = $t->_privateVars['__form']->getBuilder('html');
}
if (!isset($t->_privateVars['__displayed_ctrl'])) {
    $t->_privateVars['__displayed_ctrl'] = array();
}
$t->_privateVars['__ctrlref']='';

foreach($t->_privateVars['__form']->getRootControls() as $ctrlref=>$ctrl){
    if(!$t->_privateVars['__form']->isActivated($ctrlref)) continue;
    if($ctrl->type == 'reset' || $ctrl->type == 'hidden') continue;
if($ctrl->type == 'submit') continue;if(!isset($t->_privateVars['__displayed_ctrl'][$ctrlref])
       && (  ($ctrls_to_display===null && $ctrls_notto_display === null)
          || ($ctrls_to_display===null && !in_array($ctrlref, $ctrls_notto_display))
          || (is_array($ctrls_to_display) && in_array($ctrlref, $ctrls_to_display) ))) {
        $t->_privateVars['__ctrlref'] = $ctrlref;
        $t->_privateVars['__ctrl'] = $ctrl;
?>
    <div class="control-group">
        <?php jtpl_function_html_ctrl_label( $t);?>
        <div class="controls">
            <?php jtpl_function_html_ctrl_control( $t);?>
        </div>
    </div>
    <?php }} $t->_privateVars['__ctrlref']='';?>
<?php endif;?>


    <div class="control-group">
        <?php jtpl_function_html_ctrl_label( $t,"liz_future_action");?>
        <div class="controls">
            <?php jtpl_function_html_ctrl_control( $t,"liz_future_action");?>
        </div>
    </div>
    <div class="jforms-submit-buttons form-actions"><?php jtpl_function_html_formreset( $t);?><?php jtpl_function_html_formsubmit( $t);?></div>
<?php $t->_privateVars['__formbuilder']->outputFooter();
unset($t->_privateVars['__form']);
unset($t->_privateVars['__formbuilder']);
unset($t->_privateVars['__formViewMode']);
unset($t->_privateVars['__displayed_ctrl']);?><?php 
}
return true;}
