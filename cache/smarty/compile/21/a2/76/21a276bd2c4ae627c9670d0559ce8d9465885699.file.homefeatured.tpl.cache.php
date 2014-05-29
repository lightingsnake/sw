<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 16:58:50
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21336630755342bd2a9c9c60-62934426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a276bd2c4ae627c9670d0559ce8d9465885699' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1395083866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21336630755342bd2a9c9c60-62934426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342bd2a9ea0c3_61074220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bd2a9ea0c3_61074220')) {function content_5342bd2a9ea0c3_61074220($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/var/www/html/swm.com.co/laravel/public/sw/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php }else{ ?>
<ul id="homefeatured" class="homefeatured tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1){?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>