{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			
			{$HOOK_MAKE}

			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer">
					<div class="container">
						<div class="col-md-12">
							<div class="col-md-4">
								<img id="paymentMethods" src="http://swm.com.co/sw/img/pagos.png" alt="">
							</div>
							{$HOOK_FOOTER}
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
{/if}
{include file="$tpl_dir./global.tpl"}
	</body>
</html>