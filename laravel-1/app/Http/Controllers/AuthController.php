<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
public function showRegister()
{
return view('auth.register');
}


public function register(Request $request)
{
$data = $request->validate([
'name' => 'required|string|max:255',
'username' => 'required|string|max:50|unique:users,username',
'email' => 'required|string|email|max:255|unique:users,email',
'password' => 'required|string|min:6|confirmed',
]);


$user = User::create([
'name' => $data['name'],
'username' => $data['username'],
'email' => $data['email'],
'password' => Hash::make($data['password']),
]);


Auth::login($user);


return redirect()->route('profile.create');
}


public function showLogin()
{
return view('auth.login');
}


public function login(Request $request)
{
$credentials = $request->validate([
'email' => 'required|email',
'password' => 'required',
]);


if (Auth::attempt($credentials, $request->filled('remember'))) {
$request->session()->regenerate();
return redirect()->intended(route('profile.show'));
}


return back()->withErrors(['email' => 'Credentials do not match our records.'])->onlyInput('email');
}


public function logout(Request $request)
{
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect()->route('login');
}
}