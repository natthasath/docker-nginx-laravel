<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class LoginRegisterController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess('You have successfully registered & logged in!');
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = strtolower($request->email);
        $password = $request->password;
        $header = [
            'access_token' => env('API_KEY'),
        ];
        //ldap/auth
        $responseLdap = Http::withHeaders($header)->asForm()->post(env('URL_LDAP_AUTH'),[
                'username' => $email,
                'password' => $password,
        ]);

        $arrayMessageLdap = json_decode($responseLdap->body(),true);

        if($arrayMessageLdap['message']!="true"){
            return redirect()->route('login')->with('error', $arrayMessageLdap['message'].'!!');
        }
        else{
            $user = User::where('email',$email)->first();

            if(!$user){
                $responsePerson = Http::withHeaders($header)->asForm()
                ->post(env('URL_PERSON_SEARCH'),[
                    'username' => $email
                ]);
                $arrayresPerson = json_decode($responsePerson->body(),true);
                $user = new User();
                $user->name = $arrayresPerson[0]['FNAME'].' '.$arrayresPerson[0]['LNAME'];
                $user->password = bcrypt($password);
                $user->email = $email;
                $user->save();
            }
            else{
                // var_dump($user);//exit;
                $user = DB::table('users')->where('email',$email)->update(['password'=>bcrypt($password)]);
            }
        }

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            //return redirect()->route('pdpa');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');

    }

    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    // public function dashboard()
    // {
    //     if(Auth::check())
    //     {
    //         return view('auth.home');
    //     }

    //     return redirect()->route('login')
    //         ->withErrors([
    //         'email' => 'Please login to access the dashboard.',
    //     ])->onlyInput('email');
    // }

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }


}
