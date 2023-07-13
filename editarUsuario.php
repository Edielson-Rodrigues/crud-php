<h1>Editar usuário</h1>

<?php
    $sql = "SELECT * FROM usuario WHERE id =".$_REQUEST["id"];
    
    $res = $conn->query($sql);
    $row = $res->fetch_object();  

?>
<form action="?page=salvar" method="post"> 
    
    <input type="hidden" name="acao" value="editar"> 
    <input type="hidden" name="id" value=<?php echo $row->id?>>
    
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" value=<?php echo $row->nome?>>
    </div>

    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" class="form-control" value=<?php echo $row->email?>>
    </div>


    <div class="mb-3">
        <label for="dataDeNascimento">Data de nascimento</label>
        <input type="date" id="dataDeNascimento" name="dataDeNascimento" class="form-control" value=<?php echo $row->data_de_nascimento?>>
    </div>
    <button style="margin-left: 45%" type="submit" value="Enviar" class="btn btn-danger"> Enviar </button>
    
</form>