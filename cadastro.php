<h1>Novo Usuário</h1>
<form action="?page=salvar" method="post"> <!--Page irá ser mandandopara o index e lá o form será enviado para salvarUsuario, com o valor acao = cadastrar-->
    
    <input type="hidden" name="acao" value="cadastrar"> <!--Ação tá sendo passada com valor cadastrar, junto aos dados do form-->
    
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label for="dataDeNascimento">Data de nascimento</label>
        <input type="date" id="dataDeNascimento" name="dataDeNascimento" class="form-control">
    </div>
    <button style="margin-left: 45%" type="submit" value="Enviar" class="btn btn-danger"> Enviar </button>
    
</form>