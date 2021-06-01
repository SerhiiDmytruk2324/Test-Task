<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Arr;



$reportage = [
    [
        'user' => 'Melissa Jones',
        'reportsTo' => false
    ],
    [
        'user' => 'Sam Little',
        'reportsTo' => 'Jason Beake'
    ],
    [
        'user' => 'Colleen Adams',
        'reportsTo' => 'Amy Barnes'
    ],
    [
        'user' => 'Amy Barnes',
        'reportsTo' => 'Melissa Jones'
    ],
    [
        'user' => 'Allison Meyers',
        'reportsTo' => 'Colleen Adams'
    ],
    [
        'user' => 'Jason Beake',
        'reportsTo' => 'Amy Barnes'
    ],
];
$sorted = array_values(Arr::sort($$reportage, function ($value) {
    return $value['name'];
}));

