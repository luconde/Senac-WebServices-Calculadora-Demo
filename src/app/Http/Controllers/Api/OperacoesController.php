<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperacoesController extends Controller
{
    public function somar(Request $request) {
        $resultado =  $request->primeiro + $request->segundo;


        return response() -> json([
            'status' => 200,
            'mensagem' => 'soma executada com sucesso',
            'resultado' => $resultado
        ], 200);
    }

    public function subtrair(Request $request) {
        $resultado = $request->primeiro - $request->segundo;

        return response() -> json([
            'status' => 200,
            'mensagem' => 'substração executada com sucesso',
            'resultado' => $resultado
        ], 200);        
    }

    public function multiplicar(Request $request) {
        $resultado = $request->primeiro * $request->segundo;

        return response() -> json([
            'status' => 200,
            'mensagem' => 'multiplicação executada com sucesso',
            'resultado' => $resultado
        ], 200);        
    }

    public function dividir(Request $request) {
        $resultado = $request->primeiro / $request->segundo;

        return response() -> json([
            'status' => 200,
            'mensagem' => 'divisão executada com sucesso',
            'resultado' => $resultado
        ], 200);        
    }

    public function potencializar(Request $request) {
        $resultado = pow($request->base, $request->expoente);

        return response() -> json([
            'status' => 200,
            'mensagem' => 'a potência executada com sucesso',
            'resultado' => $resultado
        ], 200);      
    }

    public function raizquadrada(Request $request) {
        $resultado = sqrt($request->radicando);

        return response() -> json([
            'status' => 200,
            'mensagem' => 'a raiz quadrada executada com sucesso',
            'resultado' => $resultado
        ], 200);      
    }


    public function raizqualquer(Request $request) {
        
        $indicedivisao = 1.0 / $request->indice;

        $resultado = pow($request->radicando, $indicedivisao);

        return response() -> json([
            'status' => 200,
            'mensagem' => 'a raiz executada com sucesso',
            'resultado' => $resultado
        ], 200);      
    }
}
