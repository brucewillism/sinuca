<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
                <div class="card-header">Novo Jogo</div>

                <form action="partidaJogador" method="POST">
                    <fieldset>
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif        <!-- Form Name -->
                            <div>
                                <label>Valor da Aposta : </label>  
                                <div>
                                    <input name="aposta" type="text" required="true">
                                </div>
                            </div> 
                            <div>
                                <label>Premissas : </label>  
                                <div>
                                    <textarea name="premissas" type="text" required="true"></textarea>
                                </div>
                            </div> 
                            <div>
                                <label>Data : </label>  
                                <div>
                                    <input name="data_da_partida" type="date" required="true">
                                </div>
                            </div>
                            <p>Selecione os Jogadores</p>
                            <select multiple id="options" name="jogadores[]">

                                <?php

                                use \Illuminate\Support\Facades\DB;

$sql = DB::table('jogadores')->select('id', 'nome', 'pontos')->get();

                                foreach ($sql as $registro) {
                                    $registro->id;
                                    $registro->nome;
                                    echo "<option value='" . $registro->id . "'>" . $registro->nome . "</option>";
                                }
                                ?>
                            </select>

                            <!-- Button (Double) -->
                            <div>
                                <label for="btnsalvar"></label>
                                <div>
                                    <button id="send" name="btnsalvar">Começar Partida</button>
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

<script type="text/javascript">
    $(document).ready(function () {
        $("#options").change(function () {
            var total = $("#options :selected").length;

            if (total > 4) {
                $("#send").prop("disabled", true);
            } else {
                $("#send").prop("disabled", false);
            }
        });
    });
</script>