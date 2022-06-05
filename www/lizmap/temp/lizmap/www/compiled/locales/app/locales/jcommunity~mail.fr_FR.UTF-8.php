<?php $_loaded= array (
  'registration.subject' => 'Activation de votre compte sur le site %s',
  'registration.body.html' => '<p>Bonjour,</p>

<p>Vous venez de vous inscrire sur le site <a href="{$website_uri}" class="notexpandlink">{$domain_name}{$basePath}</a>.</p>

<p>Pour utiliser votre compte, vous devez d\'abord confirmer votre inscription
<a href="{$confirmation_link}">en cliquant sur ce lien</a>. Ce lien est valide {$validationKeyTTL}</p>

<p>À tout de suite sur {$domain_name}{$basePath} !</p>',
  'registration.admin.body.html' => '<p>Bonjour,</p>

<p>L\'administrateur du site <a href="{$website_uri}" class="notexpandlink">{$domain_name}{$basePath}</a>
vous a créé un compte, dont l\'identifiant est <em>"{$user->login}"</em>.</p>

<p>Pour activer votre compte, vous devez <a href="{$confirmation_link}">cliquer sur ce lien</a>
afin d\'indiquer un nouveau mot de passe. Ce lien est valide {$validationKeyTTL}.</p>

<p>À tout de suite sur {$domain_name}{$basePath} !</p>',
  'password.reset.subject' => 'Réinitialisation de votre mot de passe sur le site %s',
  'password.reset.body.html' => '<p>Bonjour,</p>

<p>Vous venez de demander une réinitialisation du mot de passe de votre
compte <em>"{$user->login|eschtml}"</em> sur le site <a href="{$website_uri}" class="notexpandlink">{$domain_name}{$basePath}</a>.</p>

<p>Si vous voulez confirmer cette réinitialisation, <a href="{$confirmation_link}">cliquez sur ce lien</a>.</p>

<p>Vous pourrez alors changer le mot de passe. Ce lien est valide {$validationKeyTTL}.</p>

<p>Si cette demande de réinitialisation est une erreur, ignorez ce mail,
et votre mot de passe actuel sera toujours valide.</p>

<p>À tout de suite sur {$domain_name}{$basePath} !</p>',
  'password.admin.reset.subject' => 'Réinitialisation de votre mot de passe sur le site %s',
  'password.admin.reset.body.html' => '<p>Bonjour,</p>

<p>L\'administrateur du site <a href="{$website_uri}" class="notexpandlink">{$domain_name}{$basePath}</a>
vient de lancer une réinitialisation du mot de passe de votre compte <em>"{$user->login}"</em>.</p>

<p>Si vous voulez confirmer cette réinitialisation, <a href="{$confirmation_link}">cliquez sur ce lien</a>.</p>

<p>Vous pourrez alors indiquer un nouveau mot de passe. Ce lien est valide {$validationKeyTTL}.</p>

<p>Si cette demande de réinitialisation est une erreur, ignorez ce mail,
et votre mot de passe actuel sera toujours valide.</p>

<p>À tout de suite sur {$domain_name}{$basePath} !</p>',
) ?>