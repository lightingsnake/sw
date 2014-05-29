<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 14:55:56
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15557180735342bc7c6f8ca3-16709873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b62ccf4e65211105c4beb6c56b8fde2bf40395' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1395083866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15557180735342bc7c6f8ca3-16709873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342bc7c72a967_67535094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bc7c72a967_67535094')) {function content_5342bc7c72a967_67535094($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>