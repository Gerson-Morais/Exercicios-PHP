<?php
$raw = '22.11.1968';
$start = DateTime::createFromFormat('d.m.Y',$raw);

echo 'Start date: '.$start->format('Y-m-d')."\n";

echo $raw;