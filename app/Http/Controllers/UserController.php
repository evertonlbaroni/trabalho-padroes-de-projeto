<?php

namespace App\Http\Controllers;

use App\Entities\User;
use App\UserSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    function create(User $user) {
        return view('user.create', compact('user'));
    }

    /**
     * Store user and notify observers
     *
     * @param Request $request
     * @param User $user
     *
     * @return Redirect
     */
    function store(Request $request, User $user) {
        $user->fill($request->all())->save();
        UserSubject::getInstance()->notifyObservers($user);
        return redirect('/user')
            ->with('message', 'Usuário cadastrado com sucesso!');
    }
}
