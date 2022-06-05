<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&

filemtime('C:\webserver\www\lizmap\lizmap/var/overloads/jcommunity/forms/registration.form.xml') > 1616160726){ return false;
}else{

class cForm_jcommunity_Jx_registration extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlinput('reg_login');
$ctrl->required=true;
$ctrl->label=jLocale::get('jcommunity~account.form.login');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('reg_email');
$ctrl->datatype= new jDatatypeemail();
$ctrl->required=true;
$ctrl->label=jLocale::get('jcommunity~account.form.email');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('firstname');
$ctrl->required=true;
$ctrl->datatype->addFacet('maxLength',100);
$ctrl->label=jLocale::get('view~user.form.firstname.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('lastname');
$ctrl->required=true;
$ctrl->datatype->addFacet('maxLength',100);
$ctrl->label=jLocale::get('view~user.form.lastname.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('organization');
$ctrl->required=true;
$ctrl->datatype->addFacet('maxLength',100);
$ctrl->label=jLocale::get('view~user.form.organization.label');
$this->addControl($ctrl);
$ctrl= new jFormsControlsecret('reg_password');
$ctrl->datatype->addFacet('minLength',8);
$ctrl->datatype->addFacet('maxLength',120);
$ctrl->required=true;
$ctrl->label=jLocale::get('jcommunity~account.form.password');
$ctrl->help=jLocale::get('jcommunity~account.form.password.help');
$ctrl2 = new jFormsControlSecretConfirm('reg_password_confirm');
$ctrl2->primarySecret = 'reg_password';
$ctrl2->label=jLocale::get('jcommunity~account.form.password.confirm');
$ctrl2->required = $ctrl->required;
$ctrl2->help=$ctrl->help;
$this->addControl($ctrl);
$this->addControl($ctrl2);
$ctrl= new jFormsControltextarea('comment');
$ctrl->required=true;
$ctrl->datatype->addFacet('maxLength',300);
$ctrl->label=jLocale::get('view~user.form.comment.label');
$ctrl->help=jLocale::get('view~user.form.comment.help');
$ctrl->hint=jLocale::get('view~user.form.comment.help');
$this->addControl($ctrl);
$ctrl= new jFormsControlcaptcha('reg_captcha');
$ctrl->label=jLocale::get('jcommunity~account.form.captcha');
$this->addControl($ctrl);
$ctrl= new jFormsControlsubmit('reg_submit');
$ctrl->label=jLocale::get('jcommunity~register.form.create.submit');
$ctrl->datasource= new jFormsStaticDatasource();
$this->addControl($ctrl);
  }
}
 return true;}