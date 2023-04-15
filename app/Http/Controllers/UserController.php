<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function _construct()
    {
        $this->middleware('can:users.index')->only('index');
        $this->middleware('can:users.edit')->only('edit', 'update');
    }
     
    protected $paginationTheme = "bootstrap";
   
    public function index()
    { 
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    

    public function edit(user $user)
    {
        $roles = Role::all();
         
        return view('users.edit',compact('user', 'roles'));
    }


    public function update(Request $request, user $user)
    {
        $user->roles()->sync($request->roles)   ;

        return redirect()->route('users.edit', $user)
        ->with('info','Rol asignado correctamente');
    }
 
}