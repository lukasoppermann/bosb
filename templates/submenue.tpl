<ul class="o-menu o-menu--horizontal c-main-submenu">
	{if isset($submenu) }
		{foreach from=$submenu key=myId item=submenue}

	  		<li class="o-menu__item"><a class="o-menu__link {$router->is_active($submenue['path'])}" href="/{$router->get_part(0)}/{$submenue.path}">{$submenue.label}</a></li>
		{/foreach}
	{/if}
</ul>
