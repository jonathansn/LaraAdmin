<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unity;

use App\Http\Requests\UnityValidationFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unities = Unity::orderBy('created_at', 'desc')->paginate();
        return view('admin.unities.index',compact('unities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnityValidationFormRequest $request)
    {
        Unity::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.unities.index')
            ->with('success','Unidade criado com successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Group = Group::find($id);
        return view('admin.groups.show',compact('Group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Group = Group::find($id);
        return view('admin.groups.edit',compact('Group'));
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

        Group::find($id)->update($request->all());

        return redirect()->route('admin.groups.index')
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
        Group::find($id)->delete();

        return redirect()->route('admin.groups.index')
            ->with('success','Usuário excluído com sucesso!');
    }
}
