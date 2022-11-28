<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // import model user
use App\Http\Requests\UserRequest;

class UserController extends controller
{
    public function tampil()
    {
        $data_user = User::all();
        return view(view: "tampil-user")
            ->with("data_user", $data_user);
    }
    public function formInput() // Hanya Tampilan form
    {
        return view("form");
    }

    public function simpan(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->get(key: "name");
        $user->email = $request->get(key: "email");
        $user->password = $request->get(key: "password");
        $user->level = $request->get(key: "level");
        $user->save();

        return redirect(route("user_all"));
    }
    public function formEdit($id)
    {
        return view("form-update")->with("id", $id);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get(key: "name");
        $user->email = $request->get(key: "email");
        $user->password = $request->get(key: "password");
        $user->level = $request->get(key: "level");
        $user->save();

        return redirect(route("user_all"));
    }

    public function hapus($id)
    {
        User::destroy($id);
        return redirect(route(name: "user_all"));
    }

    public function show($id)
    {
        $data_user = User::find($id);
        return view(view: "user.show")->with("data_user", $data_user);
    }
}
