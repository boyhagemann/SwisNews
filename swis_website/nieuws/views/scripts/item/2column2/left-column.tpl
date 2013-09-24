<article class="nieuws-item dots-right-light row">
<div class="span7">
<h1>{$aNieuwsItem.titel}</h1>
<header>
    <img src="images/resized/300/{$aNieuwsItem.afbeelding}">
    <time pubdate="pubdate">{$aNieuwsItem.datum|date_format:"%d %B %Y"}</time>

</header>
<p class="intro">{$aNieuwsItem.intro}</p>
{$aNieuwsItem.tekst}
</div>
<div class="span1">
&nbsp;
</div>
</article>