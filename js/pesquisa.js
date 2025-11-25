// Aguardar o DOM carregar antes de inicializar
document.addEventListener('DOMContentLoaded', function() {
    const barraP = document.getElementById("barraP");
    const caixa = document.getElementById("sugestoes");

    // Dispara a pesquisa enquanto digita
    if (barraP && caixa) {
        barraP.addEventListener("input", () => {
            fPesquisar();
        });

        // Pressionar ENTER também pesquisa e redireciona
        barraP.addEventListener("keydown", (event) => {
            if(event.key === "Enter"){
                event.preventDefault();
                fPesquisarEnter();
            }
        });
    }
});


// Função que pesquisa no PHP
async function fPesquisar() {
    const barraP = document.getElementById("barraP");
    const caixa = document.getElementById("sugestoes");
    
    if (!barraP || !caixa) {
        console.error("Elementos de pesquisa não encontrados");
        return;
    }
    
    const pesquisa = barraP.value.trim();

    if (pesquisa === "") {
        caixa.innerHTML = "";
        caixa.style.display = "none";
        return;
    }

    try {
        const Retorno = await fetch("php/pesquisa.php", {
            method: "POST",
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({acao: "pesquisar", barraP: pesquisa})
        });

        const Resposta = await Retorno.json();

        // Limpa antes de adicionar
        caixa.innerHTML = "";
        caixa.style.display = "none";

        // Se vier vazio, não mostra nada
        if (!Resposta || Resposta.length === 0) {
            return;
        }

        // Mostra a caixa de sugestões
        caixa.style.display = "block";

        // Cria lista de sugestões
        Resposta.forEach(prod => {
            const item = document.createElement("div");
            item.classList.add("sug-item");
            item.innerHTML = `
                <div class="sug-item-content">
                    <strong>${prod.NOME_PRODUTO}</strong>
                    <div class="sug-item-details">
                        <span class="sug-preco">R$ ${parseFloat(prod.PRECO_PRODUTO).toFixed(2)}</span>
                        <span class="sug-categoria">${prod.CATEGORIA_PRODUTO}</span>
                    </div>
                    <small>${prod.DESCRICAO_PRODUTO}</small>
                </div>
            `;

            // Quando clicar → preenche o input e esconde sugestões
            item.addEventListener("click", () => {
                barraP.value = prod.NOME_PRODUTO;
                caixa.innerHTML = "";
                caixa.style.display = "none";
            });

            caixa.appendChild(item);
        });

    } catch (error) {
        console.error("Erro:", error);
    }
}

// Pesquisar e redirecionar para carrinho
async function fPesquisarEnter() {
    const barraP = document.getElementById("barraP");
    if (!barraP) {
        console.error("Barra de pesquisa não encontrada");
        return;
    }
    
    const pesquisa = barraP.value.trim();
    
    if (pesquisa === "") {
        return;
    }

    try {
        const Retorno = await fetch("php/pesquisa.php", {
            method: "POST",
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({acao: "pesquisar", barraP: pesquisa})
        });

        const Resposta = await Retorno.json();

        if (Resposta && Resposta.length > 0) {
            // Adiciona o primeiro produto ao carrinho e abre o modal
            const primeiroProduto = Resposta[0];
            
            // Adicionar ao carrinho
            try {
                const RetornoCarrinho = await fetch("php/carrinho.php", {
                    method: "POST",
                    headers: {"Content-Type": "application/json"},
                    body: JSON.stringify({
                        acao: "adicionar",
                        ID_PRODUTO: primeiroProduto.ID_PRODUTO,
                        QUANTIDADE: 1
                    })
                });
                
                const RespostaCarrinho = await RetornoCarrinho.json();
                
                if (RespostaCarrinho.Resposta) {
                    // Abrir modal do carrinho
                    if (typeof fMostrarCarrinho === 'function') {
                        fMostrarCarrinho();
                    } else {
                        alert("Produto adicionado ao carrinho!");
                    }
                }
            } catch (error) {
                console.error("Erro ao adicionar ao carrinho:", error);
                alert("Produto encontrado: " + primeiroProduto.NOME_PRODUTO);
            }
        } else {
            alert("Nenhum produto encontrado.");
        }
    } catch (error) {
        console.error("Erro:", error);
    }
}

// Fechar sugestões ao clicar fora
document.addEventListener('click', function(event) {
    const barraP = document.getElementById("barraP");
    const caixa = document.getElementById("sugestoes");
    
    if (caixa && barraP && !barraP.closest('.pesquisa')?.contains(event.target) && !caixa.contains(event.target)) {
        caixa.style.display = "none";
    }
});
