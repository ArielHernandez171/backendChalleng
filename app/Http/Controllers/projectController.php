<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class projectController extends Controller
{
    public function create(){
        return view('create.project');
    }
    public function CreateProject(Request $request){
        $request->validate([
            'nameproject'=>'require',
            'decripcion'=>'require',
            'estado'=>'require',
            'colaborador'=>'require'
        ]);
        $project=new project("");
        $project->nameproject=$request->nameproject;
        $project->descripcion=$request->descripcon;
        $project->estado=$request->sestado;
        $user=User::find($request->colaborador);
        $project->colaborador=$user->id;
        //$project->save();
    }
    public function ModificarProject(Request $request){
        $request->validate([
            'nameproject'=>'require',
            'decripcion'=>'require',
            'estado'=>'require',
            'colaborador'=>'require'
        ]);
        $project=new project("");
        $project->nameproject=$request->nameproject;
        $project->descripcion=$request->descripcon;
        $project->estado=$request->sestado;
        $user=User::find($request->colaborador);
        $project->colaborador=$user->id;
        //$project->save();
    }
    public function deleteProject($project){
        $project->delete();
    }
    


}
