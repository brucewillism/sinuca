<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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
                <div class="card-header">Cadastro de Jogadores</div>

                <br> 

                <form action="jogador" method="POST">
                    <fieldset>

                        <p>Quantos Jogadores</p>
                        <select id="mySelect">
                            <option>Quantos Jogadores</option>
                            <option>2 Jogadores</option>
                            <option>4 Jogadores</option>
                        </select>
                        <div id="inputOculto">
                            <div>
                                <div>
                                    <label>Nome do Jogador : </label>  
                                    <div>
                                        <input name="nome" type="text">
                                    </div>
                                </div> 

                            </div>
                            <div>
                                <div>
                                    <label>Nome do Jogador 2 : </label>  
                                    <div>
                                        <input name="nome2" type="text">
                                    </div>
                                </div> 

                            </div>
                        </div>
                        <div id="inputOculto1">
                            <div>
                                <div>
                                    <label>Nome do Jogador : </label>  
                                    <div>
                                        <input name="nome3" type="text">
                                    </div>
                                </div> 

                            </div>
                            <div>
                                <div>
                                    <label>Nome do Jogador 2 : </label>  
                                    <div>
                                        <input name="nome4" type="text">
                                    </div>
                                </div> 

                            </div><div>
                                <div>
                                    <label>Nome do Jogador 3 : </label>  
                                    <div>
                                        <input name="nome5" type="text">
                                    </div>
                                </div> 

                            </div>
                            <div>
                                <div>
                                    <label>Nome do Jogador 4 : </label>  
                                    <div>
                                        <input name="nome6" type="text">
                                    </div>
                                </div> 

                            </div>
                        </div>        
                        </select>
                        <div>
                            <label for="btnsalvar"></label>
                            <div>
                                <button>Começar Partida</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>

        </div>
    </div>

</div>
</div>
</div>

<script>
    $(document).ready(function () {
        $('#inputOculto').hide();
        $('#inputOculto1').hide();
        $('#mySelect').change(function () {
            if ($('#mySelect').val() == '2 Jogadores') {
                $('#inputOculto').show();
            } else {
                $('#inputOculto').hide();
            }
            if ($('#mySelect').val() == '4 Jogadores') {
                $('#inputOculto1').show();
            } else {
                $('#inputOculto1').hide();
            }
        });
    });
</script>