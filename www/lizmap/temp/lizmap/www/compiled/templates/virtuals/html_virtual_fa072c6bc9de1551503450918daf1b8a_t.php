<?php 
function template_meta_virtual_fa072c6bc9de1551503450918daf1b8a_t($t){

}
function template_virtual_fa072c6bc9de1551503450918daf1b8a_t($t){
?><p>Bonjour,</p>

<p>L'administrateur du site <a href="<?php echo $t->_vars['website_uri']; ?>" class="notexpandlink"><?php echo $t->_vars['domain_name']; ?><?php echo $t->_vars['basePath']; ?></a>
vous a créé un compte, dont l'identifiant est <em>"<?php echo $t->_vars['user']->login; ?>"</em>.</p>

<p>Pour activer votre compte, vous devez <a href="<?php echo $t->_vars['confirmation_link']; ?>">cliquer sur ce lien</a>
afin d'indiquer un nouveau mot de passe. Ce lien est valide <?php echo $t->_vars['validationKeyTTL']; ?>.</p>

<p>À tout de suite sur <?php echo $t->_vars['domain_name']; ?><?php echo $t->_vars['basePath']; ?> !</p><?php 
}
