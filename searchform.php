<form method="GET" action="<?php echo home_url('/'); ?>">
	<input class="search_input" type="text" name="s" placeholder="Pesquisar" value="<?php the_search_query(); ?>"/>
	<input class="search_submit" type="submit" value="Busca"/>
</form>