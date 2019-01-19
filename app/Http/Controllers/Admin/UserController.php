<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Group;
use App\Models\Unity;
use App\Models\UserGroup;

use App\Http\Requests\UserValidationFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate();
        $groups = Group::all(['id', 'name']);
        $unities = Unity::all(['id', 'name']);
        return view('admin.users.index',compact('users','groups','unities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.users.create', compact('groups','unities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserValidationFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserValidationFormRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => $request->status,
            'unities_id' => $request->unity,
        ]);

        foreach ($request->groups as $group){
            UserGroup::create([
                'users_id' => $user->id,
                'groups_id' => $group,
            ]);
        }

        return redirect()->route('admin.users.index')
            ->with('success','Usuário criado com successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'status' => 'required',
            'groups_id' => 'required',
            'unities_id' => 'required',
        ]);

        User::find($id)->update($request->all());

        return redirect()->route('admin.users.index')
            ->with('success','Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('admin.users.index')
            ->with('success','Usuário excluído com sucesso!');
    }

    /**
        Custom Functions
     */
}
