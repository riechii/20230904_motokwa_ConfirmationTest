<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    //フォーム入力ページ
    public function index()
    {
        return view('index');
    }

    //入力確認ページ
    public function confirm(InquiryRequest $request)
    {
        $contact = $request->only(['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);

        return view('confirm', compact('contact'));
    }

    //問合せ完了ページ
    public function store(InquiryRequest $request)
    {
        $contact = $request->only(['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        Inquiry::create($contact);

        if($request->input('back') == 'back'){
        return redirect('/')
                ->withInput();
        }

        return view('thanks');
    }

    
}