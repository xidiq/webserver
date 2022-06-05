<?php 
function template_meta_virtual_4d33f8b82b4f347eafd40148a223d6f6_t($t){

}
function template_virtual_4d33f8b82b4f347eafd40148a223d6f6_t($t){
?><p>Bonjour,</p>

<p>Vous venez de vous inscrire sur le site <a href="<?php echo $t->_vars['website_uri']; ?>" class="notexpandlink"><?php echo $t->_vars['domain_name']; ?><?php echo $t->_vars['basePath']; ?></a>.</p>

<p>Pour utiliser votre compte, vous devez d'abord confirmer votre inscription
<a href="<?php echo $t->_vars['confirmation_link']; ?>">en cliquant sur ce lien</a>. Ce lien est valide <?php echo $t->_vars['validationKeyTTL']; ?></p>

<p>À tout de suite sur <?php echo $t->_vars['domain_name']; ?><?php echo $t->_vars['basePath']; ?> !</p><?php 
}
