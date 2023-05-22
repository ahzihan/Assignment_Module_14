<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function StoreUser(Request $request)
    {
        $name = $request->input('name');

        return "User Name is ${name}";
    }

    public function UserAgent(Request $request){
        $userAgent=$request->header('userAgent');
        return "User Agent is ${userAgent}";

    }

    public function getPage(Request $request)
    {
        $page = $request->query('page');
        if ($page === null) {
            $page = null;
        }

        return "Current Page ${page}";
    }

    public function JsonData(Request $request){

        return $request->input();

    }

    public function FileUpload(Request $request):array{
        $img=$request->file('avater');
        $originalName=$img->getClientOriginalName();

        $img->move(public_path('uploads'),$originalName);
    }

    public function getToken(Request $request)
    {
        $rememberToken = $request->cookie('remember_token');

        if ($rememberToken === null) {
            $rememberToken = null;
        }

        return $rememberToken;
    }

    public function FormData(Request $request)
    {
        $email = $request->input('email');

        $response = [
            'success' => true,
            'message' => 'Form submitted successfully.'
        ];

        return new JsonResponse($response);
    }

}


