<?php
/* Smarty version 3.1.33, created on 2023-12-04 23:58:15
  from 'C:\xampp\htdocs\phoneshop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_656e0527601fc6_69050758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92ed404e6c73785c41cc6583e9fe06b31589b8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phoneshop\\themes\\classic\\templates\\index.tpl',
      1 => 1545054348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656e0527601fc6_69050758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1001674328656e05275ff9d8_83951097', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_341286177656e05275fff82_93633257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1994601574656e0527600ce0_79897181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_30839574656e05276007a5_67450327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1994601574656e0527600ce0_79897181', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1001674328656e05275ff9d8_83951097 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1001674328656e05275ff9d8_83951097',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_341286177656e05275fff82_93633257',
  ),
  'page_content' => 
  array (
    0 => 'Block_30839574656e05276007a5_67450327',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1994601574656e0527600ce0_79897181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_341286177656e05275fff82_93633257', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30839574656e05276007a5_67450327', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
