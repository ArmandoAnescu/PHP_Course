<?php
$url='https://www.sitepoint.com/feed/';
$content=file_get_contents($url);
//echo $content;
$xml=simplexml_load_string($content);
echo $xml->channel->description;//per leggere dei certi elementi
foreach($xml->channel->item as $item){
    echo $item->title;
    echo '<br>'.$item->link;
}