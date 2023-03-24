<?php
/* Smarty version 4.3.0, created on 2023-03-24 10:04:07
  from '/home/lilian/Documents/git/WebDev-mvc/templates/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641d67870c1565_96379025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '320c7262b114458aaa9a684bde4de5d73ec23a35' => 
    array (
      0 => '/home/lilian/Documents/git/WebDev-mvc/templates/head.tpl',
      1 => 1679648039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d67870c1565_96379025 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['DocumentTitle']->value;?>
</title>
    <link rel="icon" href="../img/Logo.png"/>
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com/3.2.6"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/8ed527737a.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<?php }
}
