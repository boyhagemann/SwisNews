<h1>{"laatste-nieuws-van-maastricht-bereikbaar"|mb_label}</h1>
<div class="row nieuws-filter">
	<div class="span8">
		<span class="filter-title">{"toon-nieuws-over"|mb_label}:</span>

		<form method="GET" action="" id="nieuws-filter-form">
		<ul id="filter-options">
			{section name=i loop=$aModaliteiten}
			<li><label><input type="checkbox" name="f[]" value="{$aModaliteiten[i].titel_key}" {if !isset($aFilter) || in_array($aModaliteiten[i].titel_key, $aFilter)} checked{/if}><span><span class="icon {$aModaliteiten[i].icon}"></span>{$aModaliteiten[i].titel_kort}</span></label></li>
			{/section}

		</ul>
		</form>
	</div>
</div>
<div id="nieuws-container">
	{$sItemsHtml}
</div>
