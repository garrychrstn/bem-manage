<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserCont extends Controller {
    public function register(Request $r) {
        $data = $r->validate([
            'name' => ['required', Rule::unique('users', 'name')],
            'email' => 'required',
            'password' => 'required'
        ]);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        auth()->login($user);
        return redirect('/');
    }
    public function logout(Request $r) {
        auth()->logout();
        return redirect('/');
    }
    public function login(Request $r) {
        $user = $r->validate([
            'luser' => ['required'],
            'lpass' => ['required']
        ]);
        if (auth()->attempt(['name' => $r['luser'], 'password' => $r['lpass']])) {
            $r->session()->regenerate();
            return redirect('/');
        } else {
        return redirect('/');}
    }
}
