<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&

filemtime('C:\webserver\www\lizmap\lizmap/modules/view/forms/edition.form.xml') > 1648133822){ return false;
}else{

class cForm_view_Jx_edition extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlhidden('liz_project');
$this->addControl($ctrl);
$ctrl= new jFormsControlhidden('liz_repository');
$this->addControl($ctrl);
$ctrl= new jFormsControlhidden('liz_layerId');
$this->addControl($ctrl);
$ctrl= new jFormsControlhidden('liz_featureId');
$this->addControl($ctrl);
$ctrl= new jFormsControlhidden('liz_srid');
$this->addControl($ctrl);
$ctrl= new jFormsControlhidden('liz_proj4');
$this->addControl($ctrl);
$ctrl= new jFormsControlhidden('liz_geometryColumn');
$this->addControl($ctrl);
$ctrl= new jFormsControlhidden('liz_status');
$this->addControl($ctrl);
$ctrl= new jFormsControlhidden('_submit');
$this->addControl($ctrl);
$ctrl= new jFormsControlmenulist('liz_future_action');
$ctrl->required=true;
$ctrl->label=jLocale::get('view~edition.form.action.future.label');
$ctrl->datasource= new jFormsStaticDatasource();
$ctrl->datasource->data = array('close'=>jLocale::get('view~edition.form.action.future.close'),'create'=>jLocale::get('view~edition.form.action.future.create'),'edit'=>jLocale::get('view~edition.form.action.future.edit'),);
$this->addControl($ctrl);
$ctrl= new jFormsControlreset('reinit');
$ctrl->label=jLocale::get('view~edition.form.reset.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlsubmit('_submit');
$ctrl->label='';
$ctrl->datasource= new jFormsStaticDatasource();
$ctrl->datasource->data = array('cancel'=>jLocale::get('view~edition.form.cancel.label'),'submit'=>jLocale::get('view~edition.form.submit.label'),);
$ctrl->standalone=false;
$this->addControl($ctrl);
  }
}
 return true;}