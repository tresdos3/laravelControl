<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hijos;
class HijosController extends Controller
{
	// obtener toda la tabla Hijos
    public function index($id = null){
    	if ($id == null) {
    		return Hijos::orderBy('id', 'asc')->get();
    	}
    	else{
    		return $this->show($id);
    	}
    }
    // obtener fintrados
    public function filtar($id = null)
    {
    	if ($id != null) {
    		return '{Lista:'. Hijos::where('idusers', $id)->get() .'}';
    	}
    }
    // agregar nuevo
    public function create(Request $request){
    	$hijos = new Hijos;
    	$hijos->name = $request->input('name');
    	$hijos->imei = $request->input('imei');
    	$hijos->image = $request->input('image');
    	$hijos->estado = $request->input('estado');
    	$hijos->idusers = $request->input('idusers');
    	$hijos->save();
    	return 'Hijo Regitrado Correctamente';
    }


    public function show($id){
    	return Hijos::find($id);
    }
    // actulizar hijo
    public function edit(Request $request, $id)
    {
    	$hijos-> Hijos::find($id);
    	$hijos->HijosName = $request->input('HijosName');
    	$hijos->HijosImei = $request->input('HijosImei');
    	$hijos->HijosImage = $request->input('HijosImage');
    	$hijos->HijosEstadoe = $request->input('HijosNEstado');
    	$hijos->HijosIdUsers = $request->input('HijosIdUsers');
    	$hijos->save();
    	return 'Actualizado Correctamente '. $hijos->id;
    }
    // eliminar hijo
    public function destroy($id){
    	$hijos = Hijos::find($id)->delete();
    	return 'Borrado Correctamente';
    }
}
