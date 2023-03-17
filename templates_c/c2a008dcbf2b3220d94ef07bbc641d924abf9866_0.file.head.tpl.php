<?php
/* Smarty version 4.3.0, created on 2023-03-17 14:00:28
  from 'C:\Users\daval\Documents\CESI\A2\Web\mvc\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6414646ca50131_71209934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a008dcbf2b3220d94ef07bbc641d924abf9866' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\A2\\Web\\mvc\\templates\\head.tpl',
      1 => 1679057966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414646ca50131_71209934 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['DocumentTitle']->value;?>
</title>
    <link rel="manifest" href="../manifest.json" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/img/krita.png"
    />
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com/3.2.6"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/8ed527737a.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<?php }
}
