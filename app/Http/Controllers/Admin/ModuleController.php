<?php

namespace App\Http\Controllers\Admin;

use App\Models\Module;

use App\Http\Requests\ModuleValidationFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::orderBy('created_at', 'desc')->paginate();
        return view('admin.modules.index',compact('modules'));
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
    public function store(ModuleValidationFormRequest $request)
    {
        Module::create([
            'name' => $request->name,
            'control_class' => $request->control_class,
            'db_name'  => $request->db_name,
        ]);

        return redirect()->route('admin.modules.index')
            ->with('success','Módulo criado com successo!');
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
        Module::find($id)->delete();

        return redirect()->route('admin.modules.index')
            ->with('success','Módulo excluído com sucesso!');
    }
}
