<?php /* Smarty version Smarty-3.1.14, created on 2014-05-28 00:24:58
         compiled from "D:\xampp\htdocs\swm\sw\themes\default-bootstrap\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5649538510baa0d7b2-79532462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2235a1caa1f2f147f90bcef5581f229baeb06a98' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\themes\\default-bootstrap\\modules\\blockcontact\\nav.tpl',
      1 => 1401157878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5649538510baa0d7b2-79532462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538510baa30a43_67104779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538510baa30a43_67104779')) {function content_538510baa30a43_67104779($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value){?>
	<div class="shop-phone col-md-12">
		<div class="container">
			<i class="icon-colombia"></i><?php echo smartyTranslate(array('s'=>'Call us now toll free:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
		</div>
	</div>
<?php }?><?php }} ?>