<?php  
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            // Recebendo dados
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $dataDeNascimento = $_POST["dataDeNascimento"];

            // Salvando dados
            $sql = "INSERT INTO usuario (nome, email, senha, data_de_nascimento) 
                        VALUES ('{$nome}', '{$email}', 
                            '{$senha}', '{$dataDeNascimento}')";

            $res = $conn->query($sql); // Tentando salvar

            if($res == true){
                print "<script>alert('Cadastro realizado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível salvar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $dataDeNascimento = $_POST["dataDeNascimento"];

            $sql = "UPDATE usuario SET nome='{$nome}', email='{$email}', data_de_nascimento='{$dataDeNascimento}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Alterações salvas');</script>";
                print "<script>location.href='?page=#'</script>";
            }else{
                print "<script>alert('Não foi possível salvar alterações');</script>";
                print "<script>location.href='?page=#'</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Deletado com sucesso');</script>";
                print "<script>location.href='?page=listar'</script>";
            }else{
                print "<script>alert('Não foi possível apagar usuário');</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            break;
    }
?>