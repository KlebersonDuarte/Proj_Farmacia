// Variáveis globais
let usuarioLogado = null;
let isAdmin = false;

// Carregar informações do perfil
async function fCarregarPerfil() {
    try {
        const Retorno = await fetch("php/usuario.php", {
            method: "GET",
            headers: {'Content-Type': 'application/json'}
        });
        
        const Resposta = await Retorno.json();
        
        if (Resposta.Resposta && Resposta.logado) {
            usuarioLogado = Resposta;
            isAdmin = Resposta.isAdmin || false;
            fAtualizarPerfilUI();
        } else {
            usuarioLogado = null;
            isAdmin = false;
            fAtualizarPerfilUI();
        }
    } catch (error) {
        console.error("Erro ao carregar perfil:", error);
    }
}

// Atualizar UI do perfil
function fAtualizarPerfilUI() {
    const perfilConteudo = document.getElementById("perfilConteudo");
    
    if (!usuarioLogado || !usuarioLogado.logado) {
        perfilConteudo.innerHTML = `
            <button onclick="fAbrirModalLogin()" class="btn-perfil">Entrar / Cadastrar</button>
        `;
    } else {
        let html = `
            <div class="perfil-info">
                <p><strong>${usuarioLogado.NOME_USUARIO}</strong></p>
            </div>
            <button onclick="fAbrirHistorico()" class="btn-perfil">Histórico de Compras</button>
        `;
        
        if (isAdmin) {
            html += `<button onclick="fAbrirAdmin()" class="btn-perfil admin-btn">Painel Admin</button>`;
        }
        
        html += `<button onclick="fDeslogar()" class="btn-perfil btn-sair">Sair</button>`;
        
        perfilConteudo.innerHTML = html;
    }
}

// Toggle do dropdown do perfil
function fTogglePerfil() {
    const dropdown = document.getElementById("perfilDropdown");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
        fCarregarPerfil();
    }
}

// Fechar dropdown ao clicar fora
document.addEventListener('click', function(event) {
    const perfil = document.querySelector('.login');
    const dropdown = document.getElementById("perfilDropdown");
    
    if (perfil && dropdown && !perfil.contains(event.target)) {
        dropdown.style.display = "none";
    }
});

// Abrir modal de login
function fAbrirModalLogin() {
    document.getElementById("modalLogin").style.display = "block";
    fTrocarTab('login');
}

// Fechar modal de login
function fFecharModal() {
    document.getElementById("modalLogin").style.display = "none";
}

// Trocar entre tabs de login e cadastro
function fTrocarTab(tab) {
    const loginForm = document.getElementById('LOGIN');
    const cadastroForm = document.getElementById('CADASTRAR');
    const tabs = document.querySelectorAll('.tab-btn');
    
    if (!loginForm || !cadastroForm) {
        console.error("Formulários não encontrados");
        return;
    }
    
    tabs.forEach(t => t.classList.remove('active'));
    
    if (tab === 'login') {
        loginForm.classList.add('active');
        loginForm.style.display = 'block';
        cadastroForm.classList.remove('active');
        cadastroForm.style.display = 'none';
        if (tabs[0]) tabs[0].classList.add('active');
    } else {
        loginForm.classList.remove('active');
        loginForm.style.display = 'none';
        cadastroForm.classList.add('active');
        cadastroForm.style.display = 'block';
        if (tabs[1]) tabs[1].classList.add('active');
    }
}

// Função de login
async function fLogin() {
    const LOGIN = document.getElementById("LOGIN");
    if (!LOGIN) {
        alert("Erro: formulário não encontrado");
        return;
    }
    
    const DadosLogin = new FormData(LOGIN);
    const entrar = Object.fromEntries(DadosLogin.entries());
    entrar.acao = "login";

    if (!entrar.EMAIL || !entrar.SENHA) {
        alert("Preencha todos os campos.");
        return; 
    }

    try {
        const Retorno = await fetch("php/usuario.php", {
            method: "POST",
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(entrar)
        });

        if (!Retorno.ok) {
            throw new Error("Erro na requisição: " + Retorno.status);
        }

        const Resposta = await Retorno.json();
        alert(Resposta.msg);

        if (Resposta.Resposta) {
            // Limpar formulário
            LOGIN.reset();
            fFecharModal();
            await fCarregarPerfil();
            if (Resposta.redirecionamento && Resposta.redirecionamento !== 'index.php') {
                window.location.href = Resposta.redirecionamento;
            }
        }
    } catch (error) {
        console.error("Erro:", error);
        alert("Erro ao fazer login. Verifique sua conexão.");
    }
}

// Função de cadastro
async function fCadastrar() {
    const CADASTRAR = document.getElementById("CADASTRAR");
    if (!CADASTRAR) {
        alert("Erro: formulário não encontrado");
        return;
    }
    
    const DadosCadas = new FormData(CADASTRAR);
    const dados = Object.fromEntries(DadosCadas.entries());
    dados.acao = "cadastrar";

    // Validar todos os campos
    if (!dados.NOME || !dados.EMAILnew || !dados.SENHAnew || !dados.CPF || !dados.SENHArept) {
        alert("Preencha TODOS os campos: Nome, Email, CPF, Senha e Confirmar Senha.");
        return; 
    }

    // Validar se as senhas coincidem
    if (dados.SENHAnew !== dados.SENHArept) {
        alert("As senhas não coincidem. Por favor, verifique.");
        return;
    }

    try {
        const Retorno = await fetch("php/usuario.php", {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(dados)
        });

        const Resposta = await Retorno.json();
        alert(Resposta.msg);

        if (Resposta.Resposta) {
            // Limpar formulário
            CADASTRAR.reset();
            fFecharModal();
            fTrocarTab('login');
        }
    } catch (error) {
        console.error("Erro:", error);
        alert("Erro ao cadastrar. Verifique sua conexão.");
    }
}

// Função de deslogar
async function fDeslogar() {
    try {
        const sair = { acao: "deslogar" };

        const Retorno = await fetch("php/usuario.php", {
            method: "POST",
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(sair)
        });

        const Resposta = await Retorno.json();
        alert(Resposta.msg);
        
        usuarioLogado = null;
        isAdmin = false;
        fAtualizarPerfilUI();
        
        if (Resposta.redirecionamento && Resposta.redirecionamento !== 'index.php') {
            window.location.href = Resposta.redirecionamento;
        }
    } catch (error) {
        console.error("Erro:", error);
    }
};

// Abrir histórico de compras
async function fAbrirHistorico() {
    if (!usuarioLogado || !usuarioLogado.logado) {
        alert("Você precisa estar logado para ver o histórico.");
        return;
    }
    
    document.getElementById("modalHistorico").style.display = "block";
    await fCarregarHistorico();
}

// Fechar histórico
function fFecharHistorico() {
    document.getElementById("modalHistorico").style.display = "none";
}

// Carregar histórico de compras
async function fCarregarHistorico() {
    const historicoConteudo = document.getElementById("historicoConteudo");
    historicoConteudo.innerHTML = "<p>Carregando...</p>";
    
    try {
        const Retorno = await fetch("php/pedidos.php", {
            method: "POST",
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({acao: "listar", ID_USUARIO: usuarioLogado.ID_USUARIO})
        });
        
        const Resposta = await Retorno.json();
        
        if (Resposta.Resposta && Resposta.pedidos && Resposta.pedidos.length > 0) {
            let html = "<div class='historico-lista'>";
            Resposta.pedidos.forEach(pedido => {
                html += `
                    <div class="historico-item">
                        <div class="historico-header">
                            <strong>Pedido #${pedido.ID_PEDIDO}</strong>
                            <span>${new Date(pedido.DATA_PEDIDO).toLocaleDateString('pt-BR')}</span>
                        </div>
                        <p>Total: R$ ${parseFloat(pedido.TOTAL_PEDIDO).toFixed(2)}</p>
                        <div class="historico-itens">
                            ${pedido.itens.map(item => `
                                <div class="historico-item-produto">
                                    ${item.NOME_PRODUTO} - Qtd: ${item.QUANTIDADE_ITEM} - R$ ${parseFloat(item.TOTAL_ITEM).toFixed(2)}
                                </div>
                            `).join('')}
                        </div>
                    </div>
                `;
            });
            html += "</div>";
            historicoConteudo.innerHTML = html;
        } else {
            historicoConteudo.innerHTML = "<p>Nenhum pedido encontrado.</p>";
        }
    } catch (error) {
        console.error("Erro ao carregar histórico:", error);
        historicoConteudo.innerHTML = "<p>Erro ao carregar histórico.</p>";
    }
}

// Abrir painel admin
function fAbrirAdmin() {
    if (!isAdmin) {
        alert("Acesso negado. Apenas administradores podem acessar.");
        return;
    }
    document.getElementById("modalAdmin").style.display = "block";
    fTrocarAdminTab('produtos');
    fCarregarHistoricoAdmin();
}

// Fechar admin
function fFecharAdmin() {
    document.getElementById("modalAdmin").style.display = "none";
}

// Trocar tabs do admin
function fTrocarAdminTab(tab) {
    const produtosTab = document.getElementById("adminProdutos");
    const historicoTab = document.getElementById("adminHistorico");
    const tabs = document.querySelectorAll('.admin-tab-btn');
    
    tabs.forEach(t => t.classList.remove('active'));
    
    if (tab === 'produtos') {
        produtosTab.classList.add('active');
        historicoTab.classList.remove('active');
        tabs[0].classList.add('active');
    } else {
        produtosTab.classList.remove('active');
        historicoTab.classList.add('active');
        tabs[1].classList.add('active');
    }
}

// Carregar histórico admin
async function fCarregarHistoricoAdmin() {
    const historicoAdminConteudo = document.getElementById("historicoAdminConteudo");
    historicoAdminConteudo.innerHTML = "<p>Carregando...</p>";
    
    try {
        const Retorno = await fetch("php/pedidos.php", {
            method: "POST",
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({acao: "listarTodos"})
        });
        
        const Resposta = await Retorno.json();
        
        if (Resposta.Resposta && Resposta.pedidos && Resposta.pedidos.length > 0) {
            let html = "<div class='historico-lista'>";
            Resposta.pedidos.forEach(pedido => {
                html += `
                    <div class="historico-item">
                        <div class="historico-header">
                            <strong>Pedido #${pedido.ID_PEDIDO}</strong>
                            <span>Usuário: ${pedido.NOME_USUARIO || 'Visitante'}</span>
                            <span>${new Date(pedido.DATA_PEDIDO).toLocaleDateString('pt-BR')}</span>
                        </div>
                        <p>Total: R$ ${parseFloat(pedido.TOTAL_PEDIDO).toFixed(2)}</p>
                        <div class="historico-itens">
                            ${pedido.itens.map(item => `
                                <div class="historico-item-produto">
                                    ${item.NOME_PRODUTO} - Qtd: ${item.QUANTIDADE_ITEM} - R$ ${parseFloat(item.TOTAL_ITEM).toFixed(2)}
                                </div>
                            `).join('')}
                        </div>
                    </div>
                `;
            });
            html += "</div>";
            historicoAdminConteudo.innerHTML = html;
        } else {
            historicoAdminConteudo.innerHTML = "<p>Nenhum pedido encontrado.</p>";
        }
    } catch (error) {
        console.error("Erro ao carregar histórico admin:", error);
        historicoAdminConteudo.innerHTML = "<p>Erro ao carregar histórico.</p>";
    }
}

// Fechar modais ao clicar fora
window.onclick = function(event) {
    const modalLogin = document.getElementById("modalLogin");
    const modalHistorico = document.getElementById("modalHistorico");
    const modalAdmin = document.getElementById("modalAdmin");
    
    if (event.target === modalLogin) {
        fFecharModal();
    }
    if (event.target === modalHistorico) {
        fFecharHistorico();
    }
    if (event.target === modalAdmin) {
        fFecharAdmin();
    }
}

