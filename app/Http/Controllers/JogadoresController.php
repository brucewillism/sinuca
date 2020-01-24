<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jogadores;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class JogadoresController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {

        $jogador = new Jogadores();

        $j = $request->post("nome");
        $j2 = $request->post("nome2");
        $j3 = $request->post("nome3");
        $j4 = $request->post("nome4");
        $j5 = $request->post("nome5");
        $j6 = $request->post("nome6");

        if ($j != null) {
            DB::insert('insert into jogadores (nome) '
                    . 'values (?)', [$j]);
        }
        if ($j2 != null) {
            DB::insert('insert into jogadores (nome) '
                    . 'values (?)', [$j2]);
        }

        if ($j3 != null) {

            DB::insert('insert into jogadores (nome) '
                    . 'values (?)', ["$j3"]);
        }
        if ($j4 != null) {
            DB::insert('insert into jogadores (nome) '
                    . 'values (?)', ["$j4"]);
        }
        if ($j5 != null) {
            DB::insert('insert into jogadores (nome) '
                    . 'values (?)', ["$j5"]);
        }
        if ($j6 != null) {
            DB::insert('insert into jogadores (nome) '
                    . 'values (?)', ["$j6"]);
        }

//        $jogador->save();
        return view('partida');
    }

    static function pontos(): View {

        $jogadores = jogadores::all();
        return view('pontos', ['jogadores' => $jogadores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pontos_final(Request $request) {

        $jogador = new Jogadores();

        $pontos = $request->post("jogador_pontos1");
        $pontos2 = $request->post("jogador_pontos2");
        $pontos3 = $request->post("jogador_pontos3");
        $pontos4 = $request->post("jogador_pontos4");

        if (!empty(pontos)) {
            DB::update('update jogadores set (pontos) '
                    . 'values (?)', ['$pontos']);
        }
        if (!empty(pontos2)) {
            DB::update('update jogadores set (pontos) '
                    . 'values (?)', ['$pontos2']);
        }
        if (!empty(pontos3)) {
            DB::update('update jogadores set (pontos) '
                    . 'values (?)', ['$pontos3']);
        }
        if (!empty(pontos4)) {
            DB::update('update jogadores set (pontos) '
                    . 'values (?)', ['$pontos4']);
        }
        return view('home');
    }

    public function store() {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    static function detalhes_jogador() {

        $jogadores = \App\Jogadores::all();
        foreach ($jogadores as $jogador) {
            echo " Nome: {$jogador->name} <br>";
            echo " Pontos: {$jogador->pontos} <br>";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
//
    }

}
