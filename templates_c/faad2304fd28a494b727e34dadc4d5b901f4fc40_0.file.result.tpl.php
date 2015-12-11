<?php /* Smarty version 3.1.22-dev/7, created on 2015-12-01 15:52:51
         compiled from "./templates/result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:955547481565dde735fb610_33351260%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faad2304fd28a494b727e34dadc4d5b901f4fc40' => 
    array (
      0 => './templates/result.tpl',
      1 => 1445344576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '955547481565dde735fb610_33351260',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'message' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/7',
  'unifunc' => 'content_565dde7369b281_65126670',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565dde7369b281_65126670')) {
function content_565dde7369b281_65126670 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '955547481565dde735fb610_33351260';
?>
{
	"status":"<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
",
	"message":"<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
",
	"request":<?php echo $_smarty_tpl->tpl_vars['request']->value;?>
,
	"data":<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['dataPartial']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

}
<?php }
}
?>