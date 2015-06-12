<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Link;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Request;

class LinkController extends Controller {


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Requests\LinkRequest $request)
	{
        //if(Request::ajax()) {
            $url = $request->get('url');
            $code = null;

            $exists = Link::where('url', '=', $url);

            if ($exists->count() === 1) {
                $code = $exists->first()->code;
            } else {
                $created = Link::create(array(

                    'url' => $url

                ));

                if ($created) {
                    $code = base_convert($created->id, 10, 36);
                    Link::where('id', '=', $created->id)->update(array(

                        'code' => $code

                    ));
                }
            }

            if ($code) {

               // echo $code;
                return redirect('/')->with('global', url('/', $code));
            }

            return redirect('/')->with('global', 'Something went wrong, please try again');

       // }

	}


	public function show($code)
	{
        $link = Link::where('code', '=', $code);

        if($link->count() === 1)
        {
            return redirect($link->first()->url);
        }

        return redirect('/');
	}



}
