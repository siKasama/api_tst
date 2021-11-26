<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AcessoController extends Controller
{
    public function store(Request $request)
    {
        if (strtolower($request->user) === "super" && $request->password === "01234") {
            return response()->json(["value" => true ,"message" => "Usuário logado!"], 200);
        }
        return response()->json(["value" => false, "message" => "Usuário Não Permitido!"], 404);
    }

    public function show($user)
    {
        if (strtolower($user === "super")) {
            return response()->json(["value" => true, "message" => "Usuário Válido!"], 202);
        }
        return response()->json(["value" => false, "message" => "Usuário Sem Permissão!"], 404);
    }

}
