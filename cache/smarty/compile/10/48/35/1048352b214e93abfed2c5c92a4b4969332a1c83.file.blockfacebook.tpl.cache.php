<?php /* Smarty version Smarty-3.1.14, created on 2014-05-28 00:23:40
         compiled from "D:\xampp\htdocs\swm\sw\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105245385106cc0b6d9-25374076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1048352b214e93abfed2c5c92a4b4969332a1c83' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1400797847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105245385106cc0b6d9-25374076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5385106cc22de9_52682359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5385106cc22de9_52682359')) {function content_5385106cc22de9_52682359($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!=''){?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="http://www.facebook.com/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?><?php }} ?>