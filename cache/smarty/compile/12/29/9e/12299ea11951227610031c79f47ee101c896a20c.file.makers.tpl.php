<?php /* Smarty version Smarty-3.1.14, created on 2014-06-04 18:02:31
         compiled from "D:\xampp\htdocs\swm\sw\modules\makers\makers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20942538e6fec7e24f0-78968061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12299ea11951227610031c79f47ee101c896a20c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\modules\\makers\\makers.tpl',
      1 => 1401897748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20942538e6fec7e24f0-78968061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538e6fecbce469_94759645',
  'variables' => 
  array (
    'makers' => 0,
    'i' => 0,
    'maker' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538e6fecbce469_94759645')) {function content_538e6fecbce469_94759645($_smarty_tpl) {?><!--Marcas-->
	<div id="make">
		<div class="container">
			<div id="carousel-example-generic" class="manufacturer" data-ride="carousel">
				<div class="carousel-inner">
					<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['maker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['makers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maker']->key => $_smarty_tpl->tpl_vars['maker']->value){
$_smarty_tpl->tpl_vars['maker']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value==0){?>
						<div class="item">
					<?php }?>
						<img src="http://swm.com.co/sw/img/<?php echo $_smarty_tpl->tpl_vars['maker']->value['id_manufacturer'];?>
.jpg" alt="">
					<!--<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
-->
					<?php if ($_smarty_tpl->tpl_vars['i']->value==10){?>
						</div>
						<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
					<?php }?>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value!=0){?>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<script>
		$('.manufacturer .carousel-inner .item').first().addClass('active')
		$('.manufacturer').carousel()
	</script><?php }} ?>