<?php

namespace App\Http\Controllers;

use App\Models\UserRequest;
use Illuminate\Http\Request;

class UserRequestsController extends Controller
{
    public function callRequest(Request $request) {
        $request['phone_number'] = str_replace(['(',')','-','+',' '], '', $request['phone_number'] );
        $request->validate([
            'phone_number' => 'required|digits:11',
        ]);
        $request['type'] = 'Звонок';
        $form = $request->all();
        UserRequest::create($form);
        return response()->json();
    }


    public function questionRequest(Request $request) {         // ЕСЛИ ВЫБИВАЕТ 405 (Method not allowed) - проверь web.php!!!!
        $request->validate([
            'email' => 'required|email',
            'text' => 'required|max:65534',
        ]);
        $request['type'] = 'Вопрос';
        $form = $request->all();
        UserRequest::create($form);
        return response()->json();
    }


    public function messageRequest(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'text' => 'required|max:65534',
        ]);
        $request['type'] = 'Сообщение';
        $form = $request->all();
        UserRequest::create($form);
        return response()->json();
    }
}
