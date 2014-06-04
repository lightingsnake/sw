<!--Marcas-->
	<div id="make">
		<div class="container">
			<div id="carousel-example-generic" class="manufacturer" data-ride="carousel">
				<div class="carousel-inner">
					{assign var="i" value=0}
					{foreach from=$makers item=maker}
					{if $i == 0}
						<div class="item">
					{/if}
						<img src="http://swm.com.co/sw/img/{$maker.id_manufacturer}.jpg" alt="">
					<!--{$i++}-->
					{if $i == 10}
						</div>
						{assign var="i" value=0}
					{/if}
					{/foreach}
					{if $i != 0}
					</div>
					{/if}
				</div>
			</div>
		</div>
	</div>
	<script>
		$('.manufacturer .carousel-inner .item').first().addClass('active')
		$('.manufacturer').carousel()
	</script>