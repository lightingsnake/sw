<?php /* Smarty version Smarty-3.1.14, created on 2014-06-04 03:01:35
         compiled from "D:\xampp\htdocs\swm\sw\themes\default-bootstrap\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23927538510bb1d8053-13194947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90fa89a7a6c0e406dddc7fd2cba1491644aa0ad7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\themes\\default-bootstrap\\footer.tpl',
      1 => 1401841768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23927538510bb1d8053-13194947',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538510bb255074_20276002',
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_MAKE' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538510bb255074_20276002')) {function content_538510bb255074_20276002($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)){?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			
			<?php echo $_smarty_tpl->tpl_vars['HOOK_MAKE']->value;?>


			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer">
					<div class="container">
						<div class="col-md-12">
							<div class="col-md-4">
								<img id="paymentMethods" src="http://swm.com.co/sw/img/pagos.png" alt="">
							</div>
							<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

							<div class="col-md-3 footerMenu">
								<ul>
									<li><a href="#">INICIO</a></li>
									<li><a href="#">MARCAS</a></li>
									<li><a href="#">COMO PAGAR</a></li>
								</ul>
							</div>
							<div class="col-md-3 footerMenu">
								<ul>
									<li><a href="#">MEDIOS DE PAGO</a></li>
									<li><a href="#">PRODUCTOS</a></li>
									<li><a href="#">CONTACTO</a></li>
								</ul>
							</div>
						</div>
						
						<div class="copy col-md-12">
							<p>
								© 2014 sw importaciones.com registrado  All rights reserved.<br>
							Todos los derechos reservados Sitio web desarrollado por Studiweb And Marketing 
							</p>
						</div>
					</div>
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</body>
</html><?php }} ?>