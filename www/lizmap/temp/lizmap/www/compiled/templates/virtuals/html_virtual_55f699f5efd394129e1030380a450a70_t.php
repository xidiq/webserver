<?php 
function template_meta_virtual_55f699f5efd394129e1030380a450a70_t($t){

}
function template_virtual_55f699f5efd394129e1030380a450a70_t($t){
?><p>Bonjour,</p>

<p>L'administrateur du site <a href="<?php echo $t->_vars['website_uri']; ?>" class="notexpandlink"><?php echo $t->_vars['domain_name']; ?><?php echo $t->_vars['basePath']; ?></a>
vient de lancer une réinitialisation du mot de passe de votre compte <em>"<?php echo $t->_vars['user']->login; ?>"</em>.</p>

<p>Si vous voulez confirmer cette réinitialisation, <a href="<?php echo $t->_vars['confirmation_link']; ?>">cliquez sur ce lien</a>.</p>

<p>Vous pourrez alors indiquer un nouveau mot de passe. Ce lien est valide <?php echo $t->_vars['validationKeyTTL']; ?>.</p>

<p>Si cette demande de réinitialisation est une erreur, ignorez ce mail,
et votre mot de passe actuel sera toujours valide.</p>

<p>À tout de suite sur <?php echo $t->_vars['domain_name']; ?><?php echo $t->_vars['basePath']; ?> !</p><?php 
}
