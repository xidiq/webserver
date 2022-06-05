<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&

filemtime('C:\webserver\www\lizmap\lizmap/modules/lizmap/forms/account_admin.form.xml') > 1616160726){ return false;
}else{

class cForm_lizmap_Jx_account_admin extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlinput('login');
$ctrl->required=true;
$ctrl->datatype->addFacet('minLength',3);
$ctrl->datatype->addFacet('maxLength',50);
$ctrl->label=jLocale::get('jcommunity~account.form.login');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('email');
$ctrl->datatype= new jDatatypeemail();
$ctrl->required=true;
$ctrl->label=jLocale::get('jcommunity~account.form.email');
$this->addControl($ctrl);
$ctrl= new jFormsControlsecret('password');
$ctrl->datatype->addFacet('minLength',8);
$ctrl->datatype->addFacet('maxLength',120);
$ctrl->label=jLocale::get('jcommunity~account.form.password');
$ctrl->help=jLocale::get('jcommunity~account.form.password.help');
$ctrl2 = new jFormsControlSecretConfirm('password_confirm');
$ctrl2->primarySecret = 'password';
$ctrl2->label=jLocale::get('jcommunity~account.form.password.confirm');
$ctrl2->required = $ctrl->required;
$ctrl2->help=$ctrl->help;
$this->addControl($ctrl);
$this->addControl($ctrl2);
$ctrl= new jFormsControlinput('firstname');
$ctrl->datatype->addFacet('maxLength',100);
$ctrl->label=jLocale::get('view~user.form.firstname.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('lastname');
$ctrl->datatype->addFacet('maxLength',100);
$ctrl->label=jLocale::get('view~user.form.lastname.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('organization');
$ctrl->datatype->addFacet('maxLength',100);
$ctrl->label=jLocale::get('view~user.form.organization.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('phonenumber');
$ctrl->datatype->addFacet('maxLength',20);
$ctrl->label=jLocale::get('view~user.form.phonenumber.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('street');
$ctrl->datatype->addFacet('maxLength',150);
$ctrl->label=jLocale::get('view~user.form.street.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('postcode');
$ctrl->datatype->addFacet('maxLength',10);
$ctrl->label=jLocale::get('view~user.form.postcode.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('city');
$ctrl->datatype->addFacet('maxLength',150);
$ctrl->label=jLocale::get('view~user.form.city.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('country');
$ctrl->datatype->addFacet('maxLength',100);
$ctrl->label=jLocale::get('view~user.form.country.label');
$this->addControl($ctrl);
$ctrl= new jFormsControltextarea('comment');
$ctrl->datatype->addFacet('maxLength',300);
$ctrl->label=jLocale::get('admin~user.form.comment.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlmenulist('status');
$ctrl->required=true;
$ctrl->label=jLocale::get('jcommunity~account.form.status');
$ctrl->datasource= new jFormsStaticDatasource();
$ctrl->datasource->data = array('-2'=>jLocale::get('jcommunity~account.form.status.deleted'),'-1'=>jLocale::get('jcommunity~account.form.status.deactivate'),'0'=>jLocale::get('jcommunity~account.form.status.newuser'),'1'=>jLocale::get('jcommunity~account.form.status.valid'),'2'=>jLocale::get('jcommunity~account.form.status.valid.email.changed'),'3'=>jLocale::get('jcommunity~account.form.status.valid.password.changed'),);
$this->addControl($ctrl);
$ctrl= new jFormsControloutput('keyactivate');
$ctrl->label=jLocale::get('jcommunity~account.form.keyactivate');
$this->addControl($ctrl);
$ctrl= new jFormsControloutput('request_date');
$ctrl->label=jLocale::get('jcommunity~account.form.requestdate');
$this->addControl($ctrl);
$ctrl= new jFormsControloutput('create_date');
$ctrl->label=jLocale::get('jcommunity~account.form.createdate');
$this->addControl($ctrl);
$ctrl= new jFormsControlsubmit('_submit');
$ctrl->label=jLocale::get('jcommunity~account.form.submit');
$ctrl->datasource= new jFormsStaticDatasource();
$this->addControl($ctrl);
  }
}
 return true;}