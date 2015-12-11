<?php /* Smarty version 3.1.22-dev/7, created on 2015-10-27 13:40:36
         compiled from "./templates/feed-news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:213778099562f9af4cd53d0_69084701%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e521861d06e366d305137333f0704971a0c08faf' => 
    array (
      0 => './templates/feed-news.tpl',
      1 => 1445344576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213778099562f9af4cd53d0_69084701',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'news_list' => 0,
    'news' => 0,
    'currentItem' => 0,
    'lastItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/7',
  'unifunc' => 'content_562f9af4e4f072_78123733',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562f9af4e4f072_78123733')) {
function content_562f9af4e4f072_78123733 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '213778099562f9af4cd53d0_69084701';
?>
[
<?php $_smarty_tpl->tpl_vars["currentItem"] = new Smarty_Variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars["lastItem"] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['news_list']->value), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
    {
        "news_id":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_id"]);?>
,
        "news_title":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_title"]);?>
,
        "news_description":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_description"]);?>
,
        "news_url":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_url"]);?>
,
        "news_image_url":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_image_url"]);?>
,
        "news_video_url":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_video_url"]);?>
,
        "news_type":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_type"]);?>
,
        "feed_id":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["feed_id"]);?>
,
        "news_active":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_active"]);?>
,
        "news_import_date":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_import_date"]);?>
,
        "news_publish_date":<?php echo json_encode($_smarty_tpl->tpl_vars['news']->value["news_publish_date"]);?>

    }
    <?php $_smarty_tpl->tpl_vars["currentItem"] = new Smarty_Variable($_smarty_tpl->tpl_vars['currentItem']->value+1, null, 0);?>    
    <?php if ($_smarty_tpl->tpl_vars['currentItem']->value<$_smarty_tpl->tpl_vars['lastItem']->value) {?>,<?php }?>
<?php } ?>
]<?php }
}
?>