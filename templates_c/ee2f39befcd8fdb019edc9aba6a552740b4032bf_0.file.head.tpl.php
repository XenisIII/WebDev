<?php
/* Smarty version 4.3.0, created on 2023-03-29 09:01:16
  from 'C:\Users\daval\Documents\CESI\Projet\WebDev-mvc\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423e23c60c249_51871402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee2f39befcd8fdb019edc9aba6a552740b4032bf' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\Projet\\WebDev-mvc\\templates\\head.tpl',
      1 => 1680073246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423e23c60c249_51871402 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['DocumentTitle']->value;?>
</title>
    <link rel="icon" href="/../img/Logo.png"/>
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com/3.2.6"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/8ed527737a.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="manifest" href="/../script/manifest.json">
    <?php echo '<script'; ?>
 src="/service_worker.js"><?php echo '</script'; ?>
>
</head>
<?php }
}
