//adicionar o produto ao banco de dados
async function fProd() {
    const prod = document.getElementById("PRODUTOS");
    const dadosEstoque = new FormData(prod);
    const estoque = Object.fromEntries(dadosEstoque.entries()); 
    estoque.acao = "armazenar";

    if (!estoque.NOMEprod || !estoque.PRECO || !estoque.DESCRICAO || !estoque.CATEGORIA || !estoque.FABRICACAO || !estoque.VALIDADE) {
        alert("Preencha todos os campos.");
        return; 
    }

    try {
        const Retorno = await fetch("php/prod.php",{
            method: "POST",
            headers: {'Content-Type': 'application/json' },
            body: JSON.stringify (estoque)
        })

        const Resposta = await Retorno.json();

        alert(Resposta.msg)
    } catch (error) {
        console.error("Error:",error)
    }
}

//renovar produto vencido
async function fRenovar() {
    const caixa = document.getElementById("ProdsVencidos");
    if (!caixa) {
        alert("Erro: elemento não encontrado. Certifique-se de que o painel admin está aberto.");
        console.error("Elemento ProdsVencidos não encontrado");
        return;
    }
    
    caixa.innerHTML = "<p style='color: #667eea;'>🔄 Processando renovação...</p>";
    const renovar = {acao : "renovar"};

    try {
        console.log("Enviando requisição de renovar...");
        const Retorno = await fetch("php/prod.php",{
            method: "POST",
            headers: {'Content-Type': 'application/json' },
            body: JSON.stringify(renovar)
        });

        console.log("Status da resposta:", Retorno.status);

        if (!Retorno.ok) {
            const errorText = await Retorno.text();
            console.error("Erro na resposta:", errorText);
            throw new Error("Erro na requisição: " + Retorno.status + " - " + errorText);
        }

        const textoResposta = await Retorno.text();
        console.log("Texto da resposta:", textoResposta);
        
        let Resposta;
        try {
            Resposta = JSON.parse(textoResposta);
        } catch (parseError) {
            console.error("Erro ao fazer parse do JSON:", parseError);
            console.error("Texto recebido:", textoResposta);
            caixa.innerHTML = '<p style="color: red;">Erro: Resposta inválida do servidor. Verifique o console.</p>';
            return;
        }

        console.log("Resposta parseada:", Resposta);

        if (Resposta.Resposta === true) {
            if (Array.isArray(Resposta.msg) && Resposta.msg.length > 0) {
                let html = '<p style="color: green; font-weight: bold; margin-bottom: 10px;">✓ Produtos renovados com sucesso:</p><ul style="list-style: none; padding: 0;">';
                Resposta.msg.forEach(prod => {
                    const dataFormatada = new Date(prod.NOVA_VALIDADE + 'T00:00:00').toLocaleDateString('pt-BR');
                    html += `<li style="padding: 8px 0; border-bottom: 1px solid #eee;"><strong>${prod.NOME_PRODUTO}</strong><br><small style="color: #666;">Validade antiga: ${new Date(prod.VALIDADE_ANTIGA + 'T00:00:00').toLocaleDateString('pt-BR')} → Nova: ${dataFormatada}</small></li>`;
                });
                html += '</ul>';
                caixa.innerHTML = html;
            } else if (typeof Resposta.msg === 'string') {
                caixa.innerHTML = '<p style="color: orange;">ℹ️ ' + Resposta.msg + '</p>';
            } else {
                caixa.innerHTML = '<p style="color: green;">✓ Produtos renovados com sucesso!</p>';
            }
        } else {
            caixa.innerHTML = '<p style="color: red;">❌ Erro: ' + (Resposta.msg || "Erro desconhecido") + '</p>';
        }
    } catch (error) {
        console.error("Erro completo:", error);
        caixa.innerHTML = '<p style="color: red;">❌ Erro ao renovar produtos: ' + error.message + '</p><p style="color: #666; font-size: 12px; margin-top: 5px;">Verifique o console para mais detalhes.</p>';
    }
}