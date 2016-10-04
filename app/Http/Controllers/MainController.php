<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Campaign;

class MainController extends Controller
{
    public function campaigns(Request $request) {

        $itemsAll = Campaign::paginate(2);
        return response()->json(
            array('data'=>
                ['items'=>$itemsAll->toArray()['data'],
                'pagination' => [
                    'count'        => $itemsAll->Total(), // count all record
                    //'per_page'     => $itemsAll->PerPage(),
                    'page'         => $itemsAll->CurrentPage(),
                    //'last_page'    => $itemsAll->LastPage(),
                    'pages'        => $itemsAll->LastPage(),
                    //'to'           => $itemsAll->LastPage()
                ]
                ]
            )
        );
    }
}
