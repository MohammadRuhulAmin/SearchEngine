<?php

namespace App\Http\Controllers;
Use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchUserInfo(Request $request){
        $holdSearch =  $request->searchInfo;
        if($holdSearch!=''){
            $user = User::where('name','LIKE','%'. $holdSearch . '%')
                ->orWhere('email','LIKE','%'. $holdSearch . '%')->get();
            if(count($user)>0){
                return view('searchPage')->withDetails($user)->withQuery($holdSearch);
                    //->with('details',$user);
            }
            else return view('searchPage')->withMessage('No Data Found ');
        }
        return "Please ask Something by Name or email";

    }
}
