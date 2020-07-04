<?php

namespace App\Domain\Users\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
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


    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'username' => ['required', 'string', 'max:255', 'unique:users'],
    //         'role' => ['required', 'enum'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    private $rules =  [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'role' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];

    public function index(){
      $users = User::orderBy('id', 'desc')->paginate(5);
      return view('Users.index', ['users' => $users]);
    }

    public function create(){
      return view('Users.create');
    }

    public function store(Request $request){
      $this->validate($request, $this->rules);
      User::create([
        'name' => $request->name,
        'username' => $request->username,
        'role' => $request->role,
        'email' => $request->email,
        'password' => Hash::make($request->password)
      ]);
      return redirect('users')->with('message', 'Data user berhasil ditambahkan!');
    }

    public function destroy($id){
      $user = User::find($id);

      $user->delete();

      return redirect('users')->with('message', 'Data user berhasil dihapus!');
    }
}
