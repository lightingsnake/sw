<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 22:45:43
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/modules/productpaymentlogos/views/templates/hook/productpaymentlogos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196057657453430e77543c85-44426032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e61fa640c0a4c69a1847eb825a714f2bade45cc' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/modules/productpaymentlogos/views/templates/hook/productpaymentlogos.tpl',
      1 => 1395083866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196057657453430e77543c85-44426032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'banner_title' => 0,
    'banner_link' => 0,
    'module_dir' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53430e775b6ec7_03866071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53430e775b6ec7_03866071')) {function content_53430e775b6ec7_03866071($_smarty_tpl) {?>
<!-- Productpaymentlogos module -->
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
<div id="product_payment_logos">
	<div class="box-security">
    <h5 class="product-heading-h5"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h5> 
  	<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/></a>
    </div>
</div>
<?php }?>  
<!-- /Productpaymentlogos module -->
<?php }} ?>