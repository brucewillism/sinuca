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
                <div class="card-header">Jogo</div>

                <fieldset>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Começa o Jogo</div>

                                    <div class="card-body">
                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                        <p>Começa o Jogo Boa Sorte aos Jogadores!!!!</p>
                                        <p>Lembre de Anotar os Pontos de cada Jogador conforme as Premissas Definidas</p>
                                        <p>Lembando que no Final de cada Partida Clicar em Contabilizar Pontos pra ser Anotados os Pontos de cada Jogador</p>

                                        <div>
                                            <?php
                                            foreach ($jogadores as $p):
                                                ?>
                                                <form action="final" method="POST">
                                                    <div>
                                                        <div>
                                                            <label>Pontos do Jogador 1 {{ $p->nome }}: </label>  
                                                            <div>
                                                                <input name="jogador_pontos1" type="text">
                                                            </div>
                                                        </div> 

                                                    </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <label>Pontos do Jogador 2 {{ $p->nome }}: </label>  
                                                    <div>
                                                        <input name="jogador_pontos2" type="text">
                                                    </div>
                                                </div> 

                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <label>Pontos do Jogador 3 {{ $p->nome }} : </label>  
                                                <div>
                                                    <input name="jogador_pontos3" type="text">
                                                </div>
                                            </div> 

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label>Pontos do Jogador 4 {{ $p->nome }}: </label>  
                                        <div>
                                            <input name="jogador_pontos4" type="text">
                                        </div>
                                    </div> 

                                </div>
                            </div>
                            <!-- Button (Double) -->
                            <div>
                                <label for="btnsalvar"></label>
                                <div>
                                    <button id="btnsalvar" name="btnsalvar">Contabilizar pontos</button>
                                </div>
                            </div>
                    </fieldset>
                <?php endforeach; ?>
                </form>
            </div>

        </div>
    </div>

</div>
</div>
</div>
