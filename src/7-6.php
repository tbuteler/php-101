<?php

use Illuminate\Foundation\Validation\ValidatesRequests;

class FormController extends Controller
{
    use ValidatesRequests;
    
    public function postForm()
    {
        $this->validate(request(), [
            'name'       => 'required|max:255|regex:/(\D){1,}\s{1,}(\D){1,}/',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|min:12|confirmed',
            'kitten_id'  => 'exists:kittens,id',
            'kitten_gif' => 'required_with:kitten_id,max:1000,mimes:gif',
        ]);

        Person::create(request()->except('_token', 'kitten_gif'));
        // ...
    }
}
