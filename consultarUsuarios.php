<h1>Listar Usuários</h1>

<?php
    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);

    // Quantidade de resultados
    $qtd = $res->num_rows;

    if($qtd > 0){
        echo "<table class='table table-hover table-striped'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>nome</th>";
        echo "<th>E-mail</th>"; 
        echo "<th>Data de nascimento</th>";
        echo "<th>Ações</th>";
        echo "</tr>";
        while($row = $res->fetch_object()){ // row guarda o retorno da consulta, funciona como array
            echo "<tr>";
            echo "<td>".$row->id ."</td>";
            echo "<td>".$row->nome ."</td>";
            echo "<td>".$row->email ."</td>";
            echo "<td>".$row->data_de_nascimento ."</td>";
            echo "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row -> id."'\"class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                        location.href='?page=salvar&acao=excluir&id=".$row -> id."';}else{false;}\" class='btn btn-danger'>Excluir</button> 
            </td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        print "<script>alert('Nenhum usuário cadastrado'); </script>";
        print "<script>location.href='?page=cadastro'; </script>";
    }
?>