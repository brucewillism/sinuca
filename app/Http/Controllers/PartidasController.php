<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partidas;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Partida_x_JogadoresController;
use App\Http\Controllers\PartidasController;

class PartidasController extends Controller {

    private $request;
    private $cliente;

    public function __construct(Request $request, Partidas $partidas) {
        $this->middleware('guest');

        $this->request = $request;
        $this->cliente = $partidas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('partida');
    }

    public function index2() {
        $order = $this->request->get('order', 'ASC');
        $by = $this->request->get('by', 'nome');

        $partidas = $this->cliente->orderBy($by, $order)->paginate();

        return view('lista', compact('partidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {

        $partida = new Partidas();

        $aposta = $request->post("aposta");
        $data_da_partida = $request->post("data_da_partida");
        $premissas = $request->post("premissas");
        $jogadores = $request->post("jogadores");

        DB::insert('insert into partidas (aposta, data_da_partida, premissas ) '
                . 'values (?, ?, ?)', [$aposta, $data_da_partida, $premissas]);

        Partida_x_JogadoresController::create($request);
    }

    static function detalhes_partidas(): View {

        $partidas = Partidas::all();
        return view('lista', ['partidas' => $partidas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View {

        $partidas = partidas::all($id);
        return view('jogo', ['partidas' => $partidas]);
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
        $deleted = DB::delete('delete from partidas where $id = id');
    }

}
