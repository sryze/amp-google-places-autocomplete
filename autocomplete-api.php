<?php

const API_KEY = 'YOUR_API_KEY';

$query = '';
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
}

$url = 'https://maps.googleapis.com/maps/api/place/autocomplete/json'
    .'?key='.API_KEY
    .'&types=(cities)'
    .'&components=country:us'
    .'&input='.urlencode($query);

header('Content-Type: application/json; charset=utf-8');
echo file_get_contents($url);