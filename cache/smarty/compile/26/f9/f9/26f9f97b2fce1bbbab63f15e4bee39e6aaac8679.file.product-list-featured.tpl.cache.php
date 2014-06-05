<?php /* Smarty version Smarty-3.1.14, created on 2014-06-05 05:13:18
         compiled from "D:\xampp\htdocs\swm\sw\themes\default-bootstrap\product-list-featured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30150538fe04ed07d85-02183227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26f9f97b2fce1bbbab63f15e4bee39e6aaac8679' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\themes\\default-bootstrap\\product-list-featured.tpl',
      1 => 1401928657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30150538fe04ed07d85-02183227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'i' => 0,
    'product' => 0,
    'link' => 0,
    'homeSize' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538fe04ee25040_90786563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538fe04ee25040_90786563')) {function content_538fe04ee25040_90786563($_smarty_tpl) {?><h3 id="productFeaturedTitle">PRODUCTOS DESCADOS</h3>
<ul id="productFeatured">
<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
<div id="carousel-example-generic" class="products-carousel" data-ride="carousel">
	<div class="carousel-inner">
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['i']->value==0){?>
		<div class="item">
	<?php }?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
					<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)){?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
				</a>
				<div class="name">
					<h3>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
							<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],20,'...'), ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</h3>
				</div>

				<div class="price">
					<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
				</div>

				<div class="buy">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
						COMPRAR
					</a>
				</div>
			</li>
	<!--<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
-->
	<?php if ($_smarty_tpl->tpl_vars['i']->value==5){?>
		</div>
		<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
	<?php }?>
<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value<5&&$_smarty_tpl->tpl_vars['i']->value>0){?>
			</div>
		<?php }?>
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
</ul>

<script>
	$('.products-carousel .carousel-inner .item').first().addClass('active')
	$('.products-carousel').carousel()
</script><?php }} ?>