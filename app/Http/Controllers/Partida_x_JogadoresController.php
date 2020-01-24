<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Partida_x_JogadoresController;
use App\Http\Controllers\PartidasController;

class Partida_x_JogadoresController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('jogo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    static function apresentacao()
    {
       $sql = DB::table('partidas_x_jogadores')
            ->join('partidas', 'id_partida', '=', 'partidas.id')
            ->join('jogadores', 'id_jogadores', '=', 'jogadores.id')
            ->select('partidas_x_jogadores.*', 'jogadores.nome', 'jogadores.pontos', 'partidas.aposta', 'partidas.premissas')
            ->get();
       
       return view('sinuca');
    }
    static function create(Request $request) {
//     $partida_x_jogadores = new Partida_x_Jogadores();

        $id = DB::getPdo()->lastInsertId();
        $j = $request->post("jogadores");

        foreach ($j as $jogadores) {

            DB::insert('insert into partidas_x_jogadores (id_partida, id_jogadores ) '
                    . 'values (?, ?)', [$id, $jogadores]);
        }
        
        Partida_x_JogadoresController::apresentacao();
    }

    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
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
