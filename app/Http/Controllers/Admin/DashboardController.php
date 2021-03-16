<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users', $users);
    }

    public function registeredit(Request $request, $id)
    {
        $users =  User::FindOrFail($id);
        return view('admin.register-edit')->with('users', $users);
    }


    public function registerupdate(Request $request, $id)
    {
        $users =  User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();
        return redirect('/usuarios')->with('status', 'Dados alterados com sucesso');
    }

    public function registerdelete($id)
    {
        $users = User::FindOrFail($id);
        $users->delete();

        return redirect('/usuarios')->with('status', 'Usuário excluído com sucesso.');
    }
}
