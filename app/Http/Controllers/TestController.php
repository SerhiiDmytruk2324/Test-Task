<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use function Psy\debug;
use Carbon\Carbon;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
//        $sorted = array_values(Arr::sort($reportage, function ($value) {
//            return $value['reportsTo'];
//        }));


        function my_func($a, $b)
        {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1:-1;
        }
        $result = in_array($reportage, "my_func");
        print_r($result);
    }

}
