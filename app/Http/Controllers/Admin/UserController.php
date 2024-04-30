<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(20)->appends(request()->query());

        $categories = Category::paginate(20)->appends(request()->query());

        return view('admin.users.index', [
            'users' => $users,
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());
        return redirect()
            ->route('users.index')
            ->with('success', 'Usuario criado com sucesso!');
    }

    public function edit(string $id)
    {
        if (!$user = User::find($id)) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Usuário não encontrado!');
        }

        return view('admin.users.edit', compact('user'));
    }

    public function update(string $id, UpdateUserRequest $request)
    {
        if (!$user = User::find($id)) {
            return back()->with('error', 'Usuário não encontrado!');
        }

        $data = $request->only(['name', 'email']);

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        // $user->update($request->only([
        //     'name', 'email'
        // ]));

        return back()
            ->with('success', 'Usuário atualizado com sucesso!');
    }

    public function show(string $id)
    {
        if (!$user = User::find($id)) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Usuário não encontrado!');
        }

        return view('admin.users.show', compact('user'));
    }

    public function destroy(string $id)
    {
        // // se não tem permissão para deletar usuários
        // if (Gate::denies('is-admin')) {
        //     return back()
        //     ->with('error', 'Você não é admin.');
        // }

        if (Gate::allows('is-admin')) {
                return back()
                ->with('error', 'Você não é admin.');
            }

        if (!$user = User::find($id)) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Usuário não encontrado!');
        }

        if (Auth::user()->id == $user->id) {
            return back()
                ->with('error', 'Você não pode deletar a si mesmo!');
        }

        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário deletado com sucesso!');
    }

}