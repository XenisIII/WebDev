<?php
/* Smarty version 4.3.0, created on 2023-03-16 11:49:50
  from 'C:\Users\daval\Documents\CESI\A2\Web\mvc\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6412f44e585bd5_62919087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a008dcbf2b3220d94ef07bbc641d924abf9866' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\A2\\Web\\mvc\\templates\\head.tpl',
      1 => 1678963657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6412f44e585bd5_62919087 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="manifest" href="../manifest.json" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/img/krita.png"
    />
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11212069446412f44e581214_31464461', 'style');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2814370026412f44e583c70_02486815', 'body');
?>

<?php echo '<script'; ?>
>
      if('serviceWorker' in navigator){
            navigator.serviceWorker.register('ServiceWorker.js')
                    .then( (sw) => console.log('Le Service Worker a été enregistrer', sw))
                    .catch((err) => console.log('Le Service Worker est introuvable !!!', err));
}

    <?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'style'} */
class Block_11212069446412f44e581214_31464461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_11212069446412f44e581214_31464461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_2814370026412f44e583c70_02486815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2814370026412f44e583c70_02486815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php
}
}
/* {/block 'body'} */
}
