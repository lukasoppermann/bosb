<ul class="o-menu o-menu--horizontal c-main-menu">
	{foreach from=$menu key=id item=item}
		<li class="o-menu__item"><a href="/{$item.path}" class="o-menu__link {$router->is_active($item.path)}">{$item.label}</a>
			<ul class="o-menu c-mobile-submenu">
			{if isset($submenu) && $router->get_part(0) === $item.path}
				{foreach from=$submenu key=myId item=submenue}
			  		<li class="o-menu__item"><a class="o-menu__link {$router->is_active($submenue['path'])}" href="/{$router->get_part(0)}/{$submenue.path}">{$submenue.label}</a></li>
				{/foreach}
			{/if}
			</ul>
		</li>
	{/foreach}
</ul>
