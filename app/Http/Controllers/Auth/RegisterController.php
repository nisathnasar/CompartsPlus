<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date', 'max:255'],
            'postcode' => ['required', 'string', 'min:5', 'max:7'],
            'address1' => ['required', 'string', 'max:255'],
            'address2' => ['required', 'string', 'max:255'],
            'city_town' => ['required', 'string', 'max:255'],
            'county' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'marketing_emails' => ['boolean'],
            'terms_and_conditions' => ['required', 'boolean'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'date_of_birth' => $data['date_of_birth'],
            'marketing_emails' => $data['marketing_emails'] ?? 0,
            'terms_and_conditions' => $data['terms_and_conditions'],
            // 'cart-id' => $data['cart_id'],
            'postcode' => $data['postcode'],
            'address1' => $data['address1'],
            'address2' => $data['address2'],
            'city_town' => $data['city_town'],
            'county' => $data['county'],
            'country' => $data['country'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }
}
