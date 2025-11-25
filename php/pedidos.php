<?php
session_start();
require("conexao.php");

$Method = $_SERVER['REQUEST_METHOD'];

switch($Method){
    case "POST":
        $json_string = file_get_contents("php://input");
        $data = json_decode($json_string);
        $acao = $data->acao ?? 'desconhecida';
        
        if ($acao === "listar") {
            // Listar pedidos do usuário logado
            if (!isset($_SESSION['user'])) {
                echo json_encode(['Resposta' => false, 'msg' => "Usuário não logado"]);
                exit;
            }
            
            $idUsuario = $_SESSION['user'];
            
            $pre = $mysqli->prepare("SELECT ID_PEDIDO, TOTAL_PEDIDO, DATA_PEDIDO FROM tb_pedido WHERE ID_USUARIO = ? ORDER BY DATA_PEDIDO DESC");
            $pre->bind_param("i", $idUsuario);
            $pre->execute();
            $result = $pre->get_result();
            
            $pedidos = [];
            while ($row = $result->fetch_assoc()) {
                // Buscar itens do pedido
                $preItens = $mysqli->prepare("SELECT pi.QUANTIDADE_ITEM, pi.PRECO_UNITARIO, pi.TOTAL_ITEM, p.NOME_PRODUTO FROM tb_pedido_item pi JOIN tb_produto p ON pi.ID_PRODUTO = p.ID_PRODUTO WHERE pi.ID_PEDIDO = ?");
                $preItens->bind_param("i", $row['ID_PEDIDO']);
                $preItens->execute();
                $resultItens = $preItens->get_result();
                
                $itens = [];
                while ($item = $resultItens->fetch_assoc()) {
                    $itens[] = $item;
                }
                
                $row['itens'] = $itens;
                $pedidos[] = $row;
            }
            
            echo json_encode(['Resposta' => true, 'pedidos' => $pedidos]);
            exit;
        }
        
        else if ($acao === "listarTodos") {
            // Listar todos os pedidos (admin)
            if (!isset($_SESSION['user'])) {
                echo json_encode(['Resposta' => false, 'msg' => "Usuário não logado"]);
                exit;
            }
            
            // Verificar se é admin
            $idUsuario = $_SESSION['user'];
            $preAdmin = $mysqli->prepare("SELECT EMAIL_USUARIO FROM tb_usuario WHERE ID_USUARIO = ?");
            $preAdmin->bind_param("i", $idUsuario);
            $preAdmin->execute();
            $resultAdmin = $preAdmin->get_result();
            
            if ($resultAdmin && $resultAdmin->num_rows === 1) {
                $userData = $resultAdmin->fetch_assoc();
                if ($userData['EMAIL_USUARIO'] !== 'admpatriotafoda@gmail.com') {
                    echo json_encode(['Resposta' => false, 'msg' => "Acesso negado"]);
                    exit;
                }
            } else {
                echo json_encode(['Resposta' => false, 'msg' => "Acesso negado"]);
                exit;
            }
            
            $pre = $mysqli->prepare("SELECT p.ID_PEDIDO, p.TOTAL_PEDIDO, p.DATA_PEDIDO, u.NOME_USUARIO FROM tb_pedido p LEFT JOIN tb_usuario u ON p.ID_USUARIO = u.ID_USUARIO ORDER BY p.DATA_PEDIDO DESC");
            $pre->execute();
            $result = $pre->get_result();
            
            $pedidos = [];
            while ($row = $result->fetch_assoc()) {
                // Buscar itens do pedido
                $preItens = $mysqli->prepare("SELECT pi.QUANTIDADE_ITEM, pi.PRECO_UNITARIO, pi.TOTAL_ITEM, p.NOME_PRODUTO FROM tb_pedido_item pi JOIN tb_produto p ON pi.ID_PRODUTO = p.ID_PRODUTO WHERE pi.ID_PEDIDO = ?");
                $preItens->bind_param("i", $row['ID_PEDIDO']);
                $preItens->execute();
                $resultItens = $preItens->get_result();
                
                $itens = [];
                while ($item = $resultItens->fetch_assoc()) {
                    $itens[] = $item;
                }
                
                $row['itens'] = $itens;
                $pedidos[] = $row;
            }
            
            echo json_encode(['Resposta' => true, 'pedidos' => $pedidos]);
            exit;
        }
        
        else {
            echo json_encode(['Resposta' => false, 'msg' => "Ação inválida"]);
            exit;
        }
        break;
        
    default:
        echo json_encode(['Resposta' => false, 'msg' => "Método inválido"]);
        break;
}

