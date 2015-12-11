<?php /* Smarty version 3.1.22-dev/7, created on 2015-12-02 09:11:52
         compiled from "./templates/comment-show.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2055106464565ed1f8e34062_35944804%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e96d1a86859d9a85d042a77141d8229e5420af0' => 
    array (
      0 => './templates/comment-show.tpl',
      1 => 1449054701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2055106464565ed1f8e34062_35944804',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/7',
  'unifunc' => 'content_565ed1f8ea5336_05084814',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565ed1f8ea5336_05084814')) {
function content_565ed1f8ea5336_05084814 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/conrado/git/conrado/smarty/libs/plugins/modifier.date_format.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2055106464565ed1f8e34062_35944804';
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

}

<?php }
}
?>