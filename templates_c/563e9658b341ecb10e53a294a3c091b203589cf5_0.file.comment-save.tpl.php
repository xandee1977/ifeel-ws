<?php /* Smarty version 3.1.22-dev/7, created on 2015-12-02 09:12:08
         compiled from "./templates/comment-save.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:55367588565ed208369f88_96275667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '563e9658b341ecb10e53a294a3c091b203589cf5' => 
    array (
      0 => './templates/comment-save.tpl',
      1 => 1449054690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55367588565ed208369f88_96275667',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/7',
  'unifunc' => 'content_565ed208394c14_40715141',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565ed208394c14_40715141')) {
function content_565ed208394c14_40715141 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/conrado/git/conrado/smarty/libs/plugins/modifier.date_format.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '55367588565ed208369f88_96275667';
?>
{
    "id":<?php echo json_encode($_smarty_tpl->tpl_vars['comment']->value["id"]);?>
,
    "ip":<?php echo json_encode($_smarty_tpl->tpl_vars['comment']->value["ip"]);?>
,
    "text":<?php echo json_encode($_smarty_tpl->tpl_vars['comment']->value["text"]);?>
,
    "parent":<?php echo json_encode($_smarty_tpl->tpl_vars['comment']->value["parent"]);?>
,
    "gcm":<?php echo json_encode($_smarty_tpl->tpl_vars['comment']->value["gcm"]);?>
,
    "date":<?php echo json_encode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value["date"],"%d/%m/%Y %H:%M:%S"));?>

}<?php }
}
?>