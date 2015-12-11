<?php /* Smarty version 3.1.22-dev/7, created on 2015-12-02 11:07:16
         compiled from "./templates/comment-list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1877661555565eed0463eec5_01562680%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ca457e879948c6f8ccfba115a7a9994e57e14c1' => 
    array (
      0 => './templates/comment-list.tpl',
      1 => 1449061634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1877661555565eed0463eec5_01562680',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'list_comments' => 0,
    'comment' => 0,
    'currentItem' => 0,
    'lastItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/7',
  'unifunc' => 'content_565eed0468b981_82805125',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565eed0468b981_82805125')) {
function content_565eed0468b981_82805125 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/conrado/git/conrado/smarty/libs/plugins/modifier.date_format.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1877661555565eed0463eec5_01562680';
?>
[
<?php $_smarty_tpl->tpl_vars["currentItem"] = new Smarty_Variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars["lastItem"] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['list_comments']->value), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
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
        "num_comments":<?php echo json_encode($_smarty_tpl->tpl_vars['comment']->value["num_comments"]);?>
,
        "date":<?php echo json_encode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value["date"],"%d/%m/%Y %H:%M:%S"));?>

    }
    <?php $_smarty_tpl->tpl_vars["currentItem"] = new Smarty_Variable($_smarty_tpl->tpl_vars['currentItem']->value+1, null, 0);?>    
    <?php if ($_smarty_tpl->tpl_vars['currentItem']->value<$_smarty_tpl->tpl_vars['lastItem']->value) {?>,<?php }?>
<?php } ?>
]<?php }
}
?>