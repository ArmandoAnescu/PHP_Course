<?php
/*
Come posso fare per caricare i miei films in un file xml dom usando php?
*/
$films=[
    [
        'title'=>'Batman',
        'year'=>'2022',
        'director'=>'I forgot',
        'plot'=>'Batman vs Riddler'
    ],
    [
        'title'=>'Jurassic Park 3',
        'year'=>'2001',
        'director'=>'Michael',
        'plot'=>'Save kid, escape spino,escape island'
    ]
];
$dom=new DOMDocument('1.0','utf-8');
$root=$dom->createElement('root');
$dom->appendChild($root);//aggiungo l'elemento appena creato 
var_dump($dom->saveXML());