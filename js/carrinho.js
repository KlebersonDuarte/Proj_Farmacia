// Carregar produtos do banco
async function fCarregarProdutos() {
    try {
        const Retorno = await fetch("php/carrinho.php", {
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({ acao: "listarProdutos" })
        });

        const Resposta = await Retorno.json();
        
        if (Resposta.Resposta && Resposta.produtos) {
            const container = document.getElementById("produtosContainer");
            container.innerHTML = "";

            if (Resposta.produtos.length === 0) {
                container.innerHTML = "<p>Nenhum produto disponível</p>";
                return;
            }

            Resposta.produtos.forEach(produto => {
                const card = document.createElement("div");
                card.className = "produto-card";
                card.innerHTML = `
                    <div class="card-header">
                        <h3>${produto.NOME_PRODUTO}</h3>
                        <span class="categoria">${produto.CATEGORIA_PRODUTO}</span>
                    </div>
                    <div class="card-body">
                        <p class="descricao">${produto.DESCRICAO_PRODUTO}</p>
                        <div class="preco">R$ ${parseFloat(produto.PRECO_PRODUTO).toFixed(2)}</div>
                    </div>
                    <div class="card-footer">
                        <button type="button" onclick="fAdicionarAoCarrinho(${produto.ID_PRODUTO})" class="btn-adicionar">
                            Adicionar ao Carrinho
                        </button>
                    </div>
                `;
                container.appendChild(card);
            });
        } else {
            alert("Erro ao carregar produtos");
        }
    } catch (error) {
        console.error("Erro:", error);
        alert("Erro ao carregar produtos");
    }
}

// Adicionar produto ao carrinho
async function fAdicionarAoCarrinho(idProduto) {
    try {
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
            alert(Resposta.msg);
            // Atualizar carrinho se estiver aberto
            if (document.getElementById("carrinhoModal").style.display === "block") {
                fMostrarCarrinho();
            }
        } else {
            alert(Resposta.msg || "Erro ao adicionar produto");
        }
    } catch (error) {
        console.error("Erro:", error);
        alert("Erro ao adicionar produto ao carrinho");
    }
}

// Mostrar carrinho (pop-up)
async function fMostrarCarrinho() {
    const modal = document.getElementById("carrinhoModal");
    if (!modal) {
        console.error("Modal do carrinho não encontrado");
        return;
    }
    modal.style.display = "block";
    
    try {
        const Retorno = await fetch("php/carrinho.php", {
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({ acao: "listar" })
        });

        const Resposta = await Retorno.json();
        
        if (Resposta.Resposta) {
            const container = document.getElementById("itensCarrinho");
            let total = 0;

            if (Resposta.itens.length === 0) {
                container.innerHTML = "<p style='text-align: center; padding: 20px; color: #999;'>Carrinho vazio</p>";
                document.getElementById("totalCarrinho").textContent = "0.00";
                return;
            }

            container.innerHTML = "";
            
            Resposta.itens.forEach(item => {
                const itemDiv = document.createElement("div");
                itemDiv.className = "historico-item";
                itemDiv.style.marginBottom = "15px";
                itemDiv.innerHTML = `
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                        <div>
                            <strong>${item.NOME_PRODUTO}</strong>
                            <p style="margin: 5px 0; color: #666; font-size: 14px;">${item.CATEGORIA_PRODUTO}</p>
                            <p style="margin: 5px 0; color: #667eea; font-size: 14px;">R$ ${parseFloat(item.PRECO_UNITARIO).toFixed(2)} cada</p>
                        </div>
                        <div style="text-align: right;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                <button type="button" onclick="fAtualizarQuantidade(${item.ID_ITEM_CARRINHO}, ${item.QUANTIDADE_ITEM - 1})" style="padding: 5px 10px; border: 1px solid #ddd; background: white; cursor: pointer; border-radius: 5px;">-</button>
                                <span style="min-width: 30px; text-align: center;">${item.QUANTIDADE_ITEM}</span>
                                <button type="button" onclick="fAtualizarQuantidade(${item.ID_ITEM_CARRINHO}, ${item.QUANTIDADE_ITEM + 1})" style="padding: 5px 10px; border: 1px solid #ddd; background: white; cursor: pointer; border-radius: 5px;">+</button>
                            </div>
                            <strong style="color: #667eea; font-size: 16px;">R$ ${parseFloat(item.TOTAL_ITEM).toFixed(2)}</strong>
                            <button type="button" onclick="fRemoverItem(${item.ID_ITEM_CARRINHO})" style="margin-top: 5px; padding: 5px 10px; background: #e74c3c; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 12px;">Remover</button>
                        </div>
                    </div>
                `;
                container.appendChild(itemDiv);
                total += parseFloat(item.TOTAL_ITEM);
            });

            document.getElementById("totalCarrinho").textContent = total.toFixed(2);
        } else {
            alert(Resposta.msg || "Erro ao carregar carrinho");
        }
    } catch (error) {
        console.error("Erro:", error);
        alert("Erro ao carregar carrinho");
    }
}

// Fechar carrinho
function fFecharCarrinho() {
    document.getElementById("carrinhoModal").style.display = "none";
}

// Atualizar quantidade
async function fAtualizarQuantidade(idItem, novaQuantidade) {
    if (novaQuantidade <= 0) {
        fRemoverItem(idItem);
        return;
    }

    try {
        const Retorno = await fetch("php/carrinho.php", {
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({
                acao: "atualizar",
                ID_ITEM_CARRINHO: idItem,
                QUANTIDADE: novaQuantidade
            })
        });

        const Resposta = await Retorno.json();
        
        if (Resposta.Resposta) {
            fMostrarCarrinho();
        } else {
            alert(Resposta.msg || "Erro ao atualizar quantidade");
        }
    } catch (error) {
        console.error("Erro:", error);
        alert("Erro ao atualizar quantidade");
    }
}

// Remover item
async function fRemoverItem(idItem) {
    if (!confirm("Deseja remover este item do carrinho?")) {
        return;
    }

    try {
        const Retorno = await fetch("php/carrinho.php", {
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({
                acao: "remover",
                ID_ITEM_CARRINHO: idItem
            })
        });

        const Resposta = await Retorno.json();
        
        if (Resposta.Resposta) {
            alert(Resposta.msg);
            fMostrarCarrinho();
        } else {
            alert(Resposta.msg || "Erro ao remover item");
        }
    } catch (error) {
        console.error("Erro:", error);
        alert("Erro ao remover item");
    }
}

async function fPagar() {
    // Verificar se está logado
    try {
        const RetornoSessao = await fetch("php/usuario.php", {
            method: "GET",
            headers: {'Content-Type': 'application/json'}
        });
        
        const RespostaSessao = await RetornoSessao.json();
        
        if (!RespostaSessao.Resposta || !RespostaSessao.logado) {
            alert("Você precisa estar logado para finalizar a compra.\n\nPor favor, faça login primeiro.");
            // Redirecionar para index ou abrir modal de login
            if (typeof fAbrirModalLogin === 'function') {
                fAbrirModalLogin();
            } else {
                window.location.href = "index.php";
            }
            return;
        }
    } catch (error) {
        console.error("Erro ao verificar sessão:", error);
        alert("Erro ao verificar autenticação. Por favor, tente novamente.");
        return;
    }

    if (!confirm("Deseja finalizar a compra?")) {
        return;
    }

    try {
        const Retorno = await fetch("php/carrinho.php", {
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({ acao: "pagar" })
        });

        const Resposta = await Retorno.json();

        if (Resposta.Resposta) {
            alert("Compra finalizada com sucesso!\n\nPedido Nº: " + Resposta.pedido);

            // Fecha carrinho e limpa exibição
            fFecharCarrinho();
            document.getElementById("itensCarrinho").innerHTML = "";
            document.getElementById("totalCarrinho").textContent = "0.00";

            // Carrinho foi zerado no banco
        } else {
            alert(Resposta.msg || "Erro ao finalizar compra");
        }

    } catch (error) {
        console.error("Erro:", error);
        alert("Não foi possível finalizar a compra");
    }
}
