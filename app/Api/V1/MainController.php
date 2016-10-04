<?php

namespace App\Api\V1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Campaign;

class MainController extends \App\Http\Controllers\Controller
{
    public function campaigns(Request $request) {

        $itemsAll = Campaign::paginate(2);
        return response()->json(
            array(
                'api'=>'v1',
                'apiUrl'=>'/api/v1',

                'data'=>
                    ['items'=>$itemsAll->toArray()['data'],

                    'count'        => $itemsAll->Total(), // count all record
                    //'per_page'     => $itemsAll->PerPage(),
                    'page'         => $itemsAll->CurrentPage(),
                    //'last_page'    => $itemsAll->LastPage(),
                    'pages'        => $itemsAll->LastPage(),
                    //'to'           => $itemsAll->LastPage()
                ]

            )
        );
    }
}
