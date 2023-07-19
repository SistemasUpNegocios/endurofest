<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()->privilegio == 'Estándar') {
            return redirect()->to('/admin/inscripciones');
        } else {
            return view('usuario.show');
        }
    }

    public function getUsuario()
    {
        $usuarios = User::all();

        return datatables()->of($usuarios)->addColumn('img', 'usuario.img')->addColumn('btn', 'usuario.buttons')->rawColumns(['btn', 'img'])->toJson();
    }

    public function addUsuario(Request $request)
    {
        if ($request->ajax()) {

            $usuario = new User;

            $usuario->name = $request->input('nombre');
            $usuario->email = $request->input('email');
            $usuario->password = $request->input('contrasena');

            $file = $request->file('foto');

            $filename = $file->getClientOriginalName();
            $file->move(public_path('assets/img/profile-pictures'), $filename);
            $usuario->foto_perfil = $filename;

            $usuario->privilegio = $request->input('privilegio');

            $usuario->save();

            return response($usuario);
        }
    }

    public function editUsuario(Request $request)
    {
        if ($request->ajax()) {
            $usuario = User::find($request->id);

            if ($request->hasFile('foto')) {
                $usuario2 = User::where('id', $request->id)->get();

                foreach ($usuario2 as $usuarios) {
                    $imagen = $usuarios->foto_perfil;
                }

                if (is_file(public_path('assets/img/profile-pictures/') . $imagen)) {
                    chmod(public_path('assets/img/profile-pictures/') . $imagen, 0777);
                    unlink(public_path('assets/img/profile-pictures/') . $imagen);
                }

                $file = $request->file('foto');
                $filename = $file->getClientOriginalName();

                $file->move(public_path('assets/img/profile-pictures'), $filename);
                $usuario->foto_perfil = $filename;
                $usuario->name = $request->input('nombre');
                $usuario->email = $request->input('email');
                $usuario->password = $request->input('contrasena');
                $usuario->privilegio = $request->input('privilegio');
            } else {
                $usuario->name = $request->input('nombre');
                $usuario->email = $request->input('email');
                $usuario->password = $request->input('contrasena');
                $usuario->privilegio = $request->input('privilegio');
            }

            $usuario->update();

            return response($usuario);
        }
    }

    public function deleteUsuario(Request $request)
    {
        if ($request->ajax()) {

            $usuario = User::where('id', $request->id)->get();

            foreach ($usuario as $usuarios) {
                $imagen = $usuarios->foto_perfil;
            }

            if (is_file(public_path('assets/img/profile-pictures/') . $imagen)) {
                chmod(public_path('assets/img/profile-pictures/') . $imagen, 0777);
                unlink(public_path('assets/img/profile-pictures/') . $imagen);
            }

            User::destroy($request->id);
        }
    }
}
