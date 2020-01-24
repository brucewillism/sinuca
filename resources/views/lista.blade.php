<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <a href="{{ route('cadastrar') }}">Cadastrar Jogadores</a><br>
                    <a href="{{ route('partida') }}">Novo Jogo</a><br>
                    <a href="{{ route('lista') }}"> Listar Partidas</a><br> 
                    <a href="{{ route('pontos') }}" </a>Total de Pontos/Jogador</a><br>
                 
                </div>
                    <br>
                <div class="card-header">Lista de Partidas</div>

                    <br> 
                    <?php
                    \App\Http\Controllers\PartidasController::detalhes_partidas();
                    foreach ($partidas as $p):
                        ?>

                        <table border="1px">
                            <tr>
                                <th>Aposta</th>
                                <td><?php echo $p->aposta; ?></td>
                            </tr>
                            <tr>
                                <th>Premissas</th>
                                <td><?php echo $p->premissas; ?></td>
                            </tr>
                            <tr> 
                                <th>Data da Partida</th>
                                <td><?php echo $p->data_da_partida; ?></td>
                            </tr>

                            <tr>
                            <?php endforeach; ?>
                    </table>

                </div>

            </div>
        </div>

    </div>
</div>
</div>
