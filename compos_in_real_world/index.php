<?php

    require_once ('JSON.php');
    require_once ('Reader.php');
    require_once ('Link.php');

    $data = new JSON('data.json');
    $link = new Link($data);

    foreach ($link->getContent() as $content) {
        echo $content . PHP_EOL;
    }