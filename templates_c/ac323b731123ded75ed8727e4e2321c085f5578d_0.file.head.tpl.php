<?php
/* Smarty version 4.3.0, created on 2023-03-28 21:52:21
  from 'C:\Users\Léo\Documents\A2\Bloc4_Web\Project\web_dev\WebDev-mvc\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64234575049c79_24458859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac323b731123ded75ed8727e4e2321c085f5578d' => 
    array (
      0 => 'C:\\Users\\Léo\\Documents\\A2\\Bloc4_Web\\Project\\web_dev\\WebDev-mvc\\templates\\head.tpl',
      1 => 1680033140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64234575049c79_24458859 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!--<?php echo '<script'; ?>
 src="/service_worker.js"><?php echo '</script'; ?>
>-->
</head>
<?php }
}
