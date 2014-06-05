<div class="col-md-12">
<ul id="productList" class="col-md-12">
	<img src="http://swm.com.co/sw/img/c/{$category->id}.jpg" class="col-md-12 categoryImage" alt="">
	<hgroup class="col-md-12">
        <h1 class="categories-title">
            {$category->name}
        </h1>
    </hgroup>
    <div class="top-pagination-content clearfix">
    	{*include file="./product-compare.tpl"*}
		{include file="$tpl_dir./pagination.tpl"}
    </div>
{foreach from=$products item=product name=products}
	{if $i == 0}
	{/if}
			<li class="col-md-3">
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
{/foreach}
</ul>
</div>