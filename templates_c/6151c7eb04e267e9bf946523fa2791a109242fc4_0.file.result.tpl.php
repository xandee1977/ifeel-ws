<?php /* Smarty version 3.1.22-dev/7, created on 2015-10-20 12:46:46
         compiled from "./templates/result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:596328042562637b6cddcc6_00445915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6151c7eb04e267e9bf946523fa2791a109242fc4' => 
    array (
      0 => './templates/result.tpl',
      1 => 1445343467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '596328042562637b6cddcc6_00445915',
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
  'unifunc' => 'content_562637b7220a31_56298721',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562637b7220a31_56298721')) {
function content_562637b7220a31_56298721 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '596328042562637b6cddcc6_00445915';
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