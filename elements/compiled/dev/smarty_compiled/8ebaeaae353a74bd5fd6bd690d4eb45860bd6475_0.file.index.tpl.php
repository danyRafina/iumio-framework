<?php
/* Smarty version 3.1.32-dev-1, created on 2017-05-24 21:36:37
  from "/Applications/MAMP/htdocs/iumio-framework/apps/OneApp/Front/views/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_5925e0c5607ea7_88847806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ebaeaae353a74bd5fd6bd690d4eb45860bd6475' => 
    array (
      0 => '/Applications/MAMP/htdocs/iumio-framework/apps/OneApp/Front/views/index.tpl',
      1 => 1495654592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5925e0c5607ea7_88847806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_502572315925e0c5605740_71605110', "parameters");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'template.tpl');
}
/* {block "parameters"} */
class Block_502572315925e0c5605740_71605110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'parameters' => 
  array (
    0 => 'Block_502572315925e0c5605740_71605110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>This is your app </p>
<?php
}
}
/* {/block "parameters"} */
}