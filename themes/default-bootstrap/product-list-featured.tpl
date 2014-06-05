<h3 id="productFeaturedTitle">PRODUCTOS DESCADOS</h3>
<ul id="productFeatured">
{assign var="i" value=0}
<div id="carousel-example-generic" class="products-carousel" data-ride="carousel">
	<div class="carousel-inner">
{foreach from=$products item=product name=products}
	{if $i == 0}
		<div class="item">
	{/if}
			<li>
				<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
					<img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" />
				</a>
				<div class="name">
					<h3>
						<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
							{$product.name|truncate:20:'...'|escape:'html':'UTF-8'}
						</a>
					</h3>
				</div>

				<div class="price">
					{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
				</div>

				<div class="buy">
					<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
						COMPRAR
					</a>
				</div>
			</li>
	<!--{$i++}-->
	{if $i == 5}
		</div>
		{assign var="i" value=0}
	{/if}
{/foreach}
		{if $i < 5 && $i > 0}
			</div>
		{/if}
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
</script>