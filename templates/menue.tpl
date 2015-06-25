<ul id="menue">
	{foreach from=$menu key=id item=item}
		<li class="o-menu__item"><a href="{$item.path}" class="o-menu__link {$router->is_active($item.path)}">{$item.label}</a></li>
	{/foreach}
</ul>
