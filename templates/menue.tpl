<ul id="menue">
	{foreach from=$menu key=id item=item}
		<!-- {if $menue.seite eq $url} -->
		<li><a href="{$item.path}" class="passive">{$item.label}</a></li>
		<!-- {else}
		<li><a href="{$menue.path}?id={$menue.seite}" class="passive">{$menue.label}</a></li>
		{/if} -->
	{/foreach}
</ul>
