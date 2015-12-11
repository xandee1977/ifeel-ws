<?php /* Smarty version 3.1.22-dev/7, created on 2015-10-27 13:40:36
         compiled from "./templates/result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1726004035562f9af4976264_83403011%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cd26928b87b51253ceec2f27c472bd41fc4fcd4' => 
    array (
      0 => './templates/result.tpl',
      1 => 1445344576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1726004035562f9af4976264_83403011',
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
  'unifunc' => 'content_562f9af4c5ef85_52174765',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562f9af4c5ef85_52174765')) {
function content_562f9af4c5ef85_52174765 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1726004035562f9af4976264_83403011';
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