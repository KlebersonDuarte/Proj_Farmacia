<?php
session_start();

require("conexao.php");

$Method = $_SERVER['REQUEST_METHOD'];

switch($Method){

 case "POST":
    $json_string = file_get_contents("php://input");
    $data = json_decode($json_string);
    $acao = $data->acao ?? 'desconhecida';

if ($acao === 'cadastrar') {
    $name  = trim($data->NOME ?? '');
    $email = trim($data->EMAILnew  ?? '');
    $senha = trim($data->SENHAnew  ?? '');
    $cpf = trim($data->CPF  ?? '');

    // Verificar se já existe usuário com o mesmo email
    $preEmail = $mysqli->prepare("SELECT ID_USUARIO FROM tb_usuario WHERE EMAIL_USUARIO = ?");
    $preEmail->bind_param("s", $email);
    $preEmail->execute();
    $preEmail->store_result();

    $preCPF = $mysqli->prepare("SELECT ID_USUARIO FROM tb_usuario WHERE CPF_USUARIO = ?");
    $preCPF->bind_param("s", $cpf);
    $preCPF->execute();
    $preCPF->store_result();

    if ($preEmail->num_rows > 0 || $preCPF->num_rows > 0) {
                $preEmail->close();
 echo json_encode(['Resposta' => true, 'msg' => "Email ou CPF já cadastrado."]);


    } else {
        $preEmail->close();
        // Criar hash seguro da senha
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        // Inserir novo usuário com prepared statement
        $preSenha = $mysqli->prepare("INSERT INTO tb_usuario(NOME_USUARIO, EMAIL_USUARIO, SENHA_USUARIO,CPF_USUARIO) VALUES (?,?,?,?)");
        $preSenha->bind_param("ssss", $name, $email, $hash,$cpf);

        if ($preSenha->execute()) {
       echo json_encode(['Resposta' => true, 'msg' => "Cadastro realizado com sucesso."]);
exit;

        } else {
            echo json_encode(['Resposta' => true, 'msg' => "Erro ao cadastrar: " . $preSenha->error]);
            exit; 
        }
        $preSenha->close();
    }

}

else if($acao === "login"){

    $email = trim($data->EMAIL  ?? '');
    $senha = trim($data->SENHA  ?? '');

    
    $preEmail = $mysqli->prepare("SELECT ID_USUARIO,NOME_USUARIO, SENHA_USUARIO FROM tb_usuario WHERE EMAIL_USUARIO = ?");
    $preEmail->bind_param("s", $email);
    $preEmail->execute();
    $result = $preEmail->get_result();

    if ($result && $result->num_rows === 1) {
        $usuario = $result->fetch_assoc();
        $hash = $usuario['SENHA_USUARIO'];

        if (password_verify($senha, $hash)) {
            $_SESSION['user'] = $usuario['ID_USUARIO'];
            $_SESSION['name'] = $usuario['NOME_USUARIO'];
            session_regenerate_id(true);
echo json_encode(['Resposta' => true, 'msg' => "Login realizado com sucesso."]);

            exit;
        } else {
           echo json_encode(['Resposta' => false, 'msg' => "Email ou senha inválidos"]);
exit;

        }
    } else {
           echo json_encode(['Resposta' => false, 'msg' => "Email ou senha inválidos"]);
exit;

    }
    $preEmail->close();
}

else{
echo json_encode(['Resposta' => false, 'msg' => "Falha no sistema"]);
exit;

}
    break;

    case "GET":
        echo json_encode(['Resposta' => false, 'msg' => "O sistema não suporta GET"]); 
        break;
    default:
    echo json_encode(['Resposta' => false, 'msg' => "Falha no sistema"]); 
    break;
}