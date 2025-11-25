<?php
$pageTitle = $pageTitle ?? 'Farmácia - HealthFarms';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/7.5.0/imask.min.js"></script>
    <link rel="stylesheet" href="css/inicio.css">
    <?php if (basename($_SERVER['PHP_SELF']) !== 'index.php'): ?>
    <link rel="stylesheet" href="css/produto.css">
    <?php endif; ?>
    <script src="js/pesquisa.js"></script>
    <script src="js/perfil.js"></script>
    <script src="js/produtos.js"></script>
    <script src="js/carrinho.js"></script>
    <script src="js/prod.js"></script>
    <title><?php echo $pageTitle; ?></title>
</head>
<body>

    <!-- HEADER -->
    <header class="topo">
        <div class="nome">
            <a href="index.php"><h1>HealthFarms</h1></a>
        </div>

        <div class="pesquisa">
            <div class="CaixaP">
                <input name="barraP" type="text" id="barraP" autocomplete="off" placeholder="Pesquise produtos...">
                <div class="lupa" onclick="fPesquisarEnter()">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div id="sugestoes" class="sugestoes"></div>
        </div>

        <div class="login">
            <i class="fa-solid fa-user" id="iconePerfil" onclick="fTogglePerfil()"></i>
            <div id="perfilDropdown" class="perfil-dropdown">
                <div id="perfilConteudo">
                    <p>Carregando...</p>
                </div>
            </div>
        </div>

        <div class="carrinho">
            <i class="fa-solid fa-cart-shopping" onclick="fMostrarCarrinho()"></i>
        </div>
    </header>

    <!-- Modal de Login/Cadastro -->
    <div id="modalLogin" class="modal-login">
        <div class="modal-content-login">
            <span class="close-modal" onclick="fFecharModal()">&times;</span>
            <div class="tabs-login">
                <button class="tab-btn active" onclick="fTrocarTab('login')">Login</button>
                <button class="tab-btn" onclick="fTrocarTab('cadastro')">Cadastro</button>
            </div>
            
            <!-- Formulário de Login -->
            <form id="LOGIN" class="form-tab active" onsubmit="event.preventDefault(); fLogin();">
                <h2>Entrar</h2>
                <div class="input-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="EMAIL" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="SENHA" placeholder="Senha" required>
                </div>
                <button type="submit" class="btn-submit">Entrar</button>
            </form>
            
            <!-- Formulário de Cadastro -->
            <form id="CADASTRAR" class="form-tab" onsubmit="event.preventDefault(); fCadastrar();">
                <h2>Cadastrar</h2>
                <div class="input-group">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="NOME" placeholder="Nome completo" required>
                </div>
                <div class="input-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="EMAILnew" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fa-solid fa-id-card"></i>
                    <input type="text" name="CPF" placeholder="CPF (000.000.000-00)" required>
                </div>
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="SENHAnew" placeholder="Senha" required>
                </div>
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="SENHArept" placeholder="Confirmar senha" required>
                </div>
                <button type="submit" class="btn-submit">Cadastrar</button>
            </form>
        </div>
    </div>

    <!-- Modal de Histórico de Compras -->
    <div id="modalHistorico" class="modal-login">
        <div class="modal-content-login">
            <span class="close-modal" onclick="fFecharHistorico()">&times;</span>
            <h2>Histórico de Compras</h2>
            <div id="historicoConteudo" class="historico-conteudo">
                <p>Carregando...</p>
            </div>
        </div>
    </div>

    <!-- Modal Admin -->
    <div id="modalAdmin" class="modal-login">
        <div class="modal-content-login admin-modal">
            <span class="close-modal" onclick="fFecharAdmin()">&times;</span>
            <h2>Painel Administrativo</h2>
            <div class="admin-tabs">
                <button class="admin-tab-btn active" onclick="fTrocarAdminTab('produtos')">Gerenciar Produtos</button>
                <button class="admin-tab-btn" onclick="fTrocarAdminTab('historico')">Histórico Geral</button>
            </div>
            
            <div id="adminProdutos" class="admin-tab-content active">
                <h3>Cadastrar Novo Produto</h3>
                <form id="PRODUTOS" onsubmit="event.preventDefault(); fProd();">
                    <div class="input-group">
                        <input type="text" name="NOMEprod" placeholder="Nome do produto" required>
                    </div>
                    <div class="input-group">
                        <input type="number" step="0.01" name="PRECO" placeholder="Preço" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="CATEGORIA" placeholder="Categoria" required>
                    </div>
                    <div class="input-group">
                        <textarea name="DESCRICAO" placeholder="Descrição" required></textarea>
                    </div>
                    <div class="input-group">
                        <label>Data de Fabricação:</label>
                        <input type="date" name="FABRICACAO" required>
                    </div>
                    <div class="input-group">
                        <label>Data de Validade:</label>
                        <input type="date" name="VALIDADE" required>
                    </div>
                    <button type="submit" class="btn-submit">Cadastrar Produto</button>
                </form>
                <div style="margin-top: 20px;">
                    <button onclick="fRenovar()" class="btn-submit">Renovar Produtos Vencidos</button>
                    <div id="ProdsVencidos" style="margin-top: 10px;"></div>
                </div>
            </div>
            
            <div id="adminHistorico" class="admin-tab-content">
                <h3>Histórico de Compras de Todos os Usuários</h3>
                <div id="historicoAdminConteudo" class="historico-conteudo">
                    <p>Carregando...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal do Carrinho -->
    <div id="carrinhoModal" class="modal-login">
        <div class="modal-content-login" style="max-width: 700px;">
            <span class="close-modal" onclick="fFecharCarrinho()">&times;</span>
            <h2>Meu Carrinho</h2>
            <div id="itensCarrinho" class="historico-conteudo" style="max-height: 400px; overflow-y: auto;">
                <p>Carregando...</p>
            </div>
            <div style="margin-top: 20px; padding-top: 20px; border-top: 2px solid #eee;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                    <strong style="font-size: 20px;">Total: R$ <span id="totalCarrinho">0.00</span></strong>
                </div>
                <div style="display: flex; gap: 10px;">
                    <button onclick="fFecharCarrinho()" class="btn-submit" style="flex: 1; background: #999;">Continuar Comprando</button>
                    <button onclick="fPagar()" class="btn-submit" style="flex: 1;">Finalizar Compra</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Carregar informações do perfil ao carregar a página
        window.addEventListener('DOMContentLoaded', function() {
            fCarregarPerfil();
            
            // Configurar máscara de CPF quando o modal for aberto
            function configurarMascaraCPF() {
                const cpfInput = document.querySelector('input[name="CPF"]');
                if (cpfInput && typeof IMask !== 'undefined') {
                    // Remove máscara anterior se existir
                    if (cpfInput._mask) {
                        cpfInput._mask.destroy();
                    }
                    // Aplica nova máscara
                    IMask(cpfInput, {
                        mask: '000.000.000-00'
                    });
                }
            }
            
            // Observar quando o modal de login é aberto
            const modalLogin = document.getElementById('modalLogin');
            if (modalLogin) {
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                            if (modalLogin.style.display === 'block') {
                                setTimeout(configurarMascaraCPF, 100);
                            }
                        }
                    });
                });
                observer.observe(modalLogin, { attributes: true });
            }
            
            // Também configurar quando trocar para a aba de cadastro
            const originalTrocarTab = window.fTrocarTab;
            if (originalTrocarTab) {
                window.fTrocarTab = function(tab) {
                    originalTrocarTab(tab);
                    if (tab === 'cadastro') {
                        setTimeout(configurarMascaraCPF, 100);
                    }
                };
            }
            
            // Configurar imediatamente se o campo já existir
            configurarMascaraCPF();
        });
    </script>
