<!-- MODULE Block contact infos -->
<div class="col-md-4">
	<h4 class="title_block">{l s='Contact us' mod='blockcontactinfos'}</h4>
	<ul>
		{if $blockcontactinfos_company != ''}<li><strong>{$blockcontactinfos_company|escape:'html':'UTF-8'}</strong></li>{/if}
		{if $blockcontactinfos_address != ''}<li><pre>{$blockcontactinfos_address|escape:'html':'UTF-8'}</pre></li>{/if}
		{if $blockcontactinfos_phone != ''}<li>{$blockcontactinfos_phone|escape:'html':'UTF-8'}</li>{/if}
		{if $blockcontactinfos_email != ''}<li>{mailto address=$blockcontactinfos_email|escape:'html':'UTF-8' encode="hex"}</li>{/if}
	</ul>
</div>
<!-- /MODULE Block contact infos -->
