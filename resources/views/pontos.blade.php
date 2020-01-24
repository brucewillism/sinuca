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
                <div class="card-header">Lista de Pontos por Jogador</div>
                <br>
                
                    <?php
                App\Http\Controllers\JogadoresController::pontos();
                
                foreach ($jogadores as $p):
                    ?>
                    <table border="1px">
                                       
                        <tr>
                            <th>Nome</th>
                            <td><?php echo $p->nome; ?></td>
                        </tr>
                        <tr>
                            <th>Pontos</th>
                            <td><?php echo $p->pontos; ?></td>
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
