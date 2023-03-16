<?php
/* Smarty version 4.3.0, created on 2023-03-15 14:57:46
  from 'C:\Users\daval\Documents\CESI\A2\Web\mvc\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6411cedaa16b19_75740952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a008dcbf2b3220d94ef07bbc641d924abf9866' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\A2\\Web\\mvc\\templates\\head.tpl',
      1 => 1678888369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411cedaa16b19_75740952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['DocumentTitle']->value;?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16413831716411cedaa156c4_78840320', 'style');
?>

    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com/3.2.6"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/8ed527737a.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15304611466411cedaa16225_55931773', 'body');
?>

</body>
</html><?php }
/* {block 'style'} */
class Block_16413831716411cedaa156c4_78840320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_16413831716411cedaa156c4_78840320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_15304611466411cedaa16225_55931773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15304611466411cedaa16225_55931773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php
}
}
/* {/block 'body'} */
}
