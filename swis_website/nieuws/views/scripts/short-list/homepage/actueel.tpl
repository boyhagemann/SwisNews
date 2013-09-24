<section class="nieuws-shortlist span8">
    <div class="row">
        <div class="span8">

            <h1>{"laatste-nieuws-van-mb"|mb_label}</h1>
        </div>
        
        {section name=i loop=$aNieuws}
        <article class="span4">
            <div class="row">
                <header class="span4">
                    <a href="{$aNieuws[i].url}" title="{$aNieuws[i].titel}">
                        <img src="images/croppedpng/370/120/{$aNieuws[i].afbeelding}" alt="{$aNieuws[i].titel}">
                    </a>
                </header>
                <div class="span4">
                    <h1>
                        <a href="{$aNieuws[i].url}">
                            {$aNieuws[i].titel}
                        </a>
                    </h1>

                    <p>
                        {$aNieuws[i].intro}
                    </p>
                    <footer class="more">
                        <span>{$aNieuws[i].datum|date_format:"%d %B %Y"}</span><a href="{$aNieuws[i].url}">{"lees-verder"|mb_label} <span class="icon arrow-right"></span></a>
                    </footer>
                </div>
            </div>
        </article>
        {/section}
    </div>

</section>