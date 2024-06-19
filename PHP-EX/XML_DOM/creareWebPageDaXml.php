<html>
    <head>
        <title>XML FEED</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section>

            <?php
            $url='https://www.sitepoint.com/feed/';
            // $content=file_get_contents($url); per evitare questo passaggio in più basta
            // $xml=simplexml_load_string($content);
            $xml=simplexml_load_file($url);
            echo'<h1>'.$xml->channel->title.'</h1>';
            echo '<div class="description">'.$xml->channel->description.'</div>';
            foreach($xml->channel->item as $item):?>
                <article>
                    <h3><?=$item->title?></h3>
                    <ul>
                        <li><a target="_blank" href="<?=$item->link?>"><?=$item->link?></a></li>
                        <li><?=$item->description ?></li>
                    </ul>
                </article>
            <hr>
            <?php
            endforeach;
            ?>        
        </section>
    </body>
</html>

