// Função para adicionar produto ao carrinho pelo nome
async function fAdicionarProdutoPorNome(nomeProduto) {
    try {
        // Buscar o ID do produto pelo nome
        const RetornoBusca = await fetch("php/pesquisa.php", {
            method: "POST",
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({acao: "pesquisar", barraP: nomeProduto})
        });

        const RespostaBusca = await RetornoBusca.json();

        if (!RespostaBusca || RespostaBusca.length === 0) {
            alert("Produto não encontrado no sistema.");
            return;
        }

        // Pegar o primeiro resultado (produto mais próximo)
        const produto = RespostaBusca[0];
        const idProduto = produto.ID_PRODUTO;

        // Adicionar ao carrinho
        const Retorno = await fetch("php/carrinho.php", {
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({
                acao: "adicionar",
                ID_PRODUTO: idProduto,
                QUANTIDADE: 1
            })
        });

        const Resposta = await Retorno.json();
        
        if (Resposta.Resposta) {
            // Mostrar notificação visual
            fMostrarNotificacao(Resposta.msg, "success");
        } else {
            fMostrarNotificacao(Resposta.msg || "Erro ao adicionar produto", "error");
        }
    } catch (error) {
        console.error("Erro:", error);
        fMostrarNotificacao("Erro ao adicionar produto ao carrinho", "error");
    }
}

// Função para mostrar notificação
function fMostrarNotificacao(mensagem, tipo) {
    // Remover notificação anterior se existir
    const notifAnterior = document.getElementById("notificacaoCarrinho");
    if (notifAnterior) {
        notifAnterior.remove();
    }

    // Criar nova notificação
    const notificacao = document.createElement("div");
    notificacao.id = "notificacaoCarrinho";
    notificacao.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${tipo === "success" ? "#4CAF50" : "#f44336"};
        color: white;
        padding: 15px 25px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        z-index: 10000;
        animation: slideInRight 0.3s ease;
        font-weight: 500;
    `;
    notificacao.textContent = mensagem;

    // Adicionar animação CSS se não existir
    if (!document.getElementById("notificacaoStyle")) {
        const style = document.createElement("style");
        style.id = "notificacaoStyle";
        style.textContent = `
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            @keyframes slideOutRight {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }

    document.body.appendChild(notificacao);

    // Remover após 3 segundos
    setTimeout(() => {
        notificacao.style.animation = "slideOutRight 0.3s ease";
        setTimeout(() => {
            if (notificacao.parentNode) {
                notificacao.remove();
            }
        }, 300);
    }, 3000);
}

// Adicionar event listeners aos botões "Comprar" quando a página carregar
document.addEventListener('DOMContentLoaded', function() {
    const botoesComprar = document.querySelectorAll('.produto button, .produtos-container button');
    
    botoesComprar.forEach(botao => {
        // Verificar se o botão já tem onclick definido
        if (!botao.getAttribute('onclick')) {
            botao.addEventListener('click', function() {
                // Encontrar o nome do produto (geralmente no h3 dentro do mesmo container)
                const produtoDiv = botao.closest('.produto') || botao.closest('.produtos-container > div');
                if (produtoDiv) {
                    const nomeElement = produtoDiv.querySelector('h3');
                    if (nomeElement) {
                        const nomeProduto = nomeElement.textContent.trim();
                        fAdicionarProdutoPorNome(nomeProduto);
                    }
                }
            });
        }
    });
});

