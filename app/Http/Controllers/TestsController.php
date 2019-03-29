<?php

namespace App\Http\Controllers;

use App\User;
use App\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function allUsers()
    {
        $users = Test::all();

        foreach($users as $user) {
            $json[] = array(
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            );
        }

        return json_encode($json);
        // return response()->json($json); can also use
    }

    public function eachUsers($id)
    {
        $user = Test::find($id);

        if($user)
        {
            $json[] = array(
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            );

            return json_encode($json); 
        }
        else
        {
            return response()->json(['404 error'=>'No data available on this ID:'.$id.''], 404);
        }
    }
}
