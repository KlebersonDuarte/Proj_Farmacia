<?php $pageTitle = 'Farmácia - Sua Saúde em Primeiro Lugar'; include 'header.php'; ?>

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


    <!--                  MAIN              -->
    <main>
        <div class="banner-principal">
            <h2>Bem-vindo à HealthFarms</h2>
            <p>Sua saúde é nossa prioridade</p>
        </div>

        <div class="INDEimagens">

            <div class="INDEremedios">
                <a href="remedios.php">
                <img src="img/INDEcomprimidos.jpeg" alt="">
                </a>
                <p>Remédios</p>
            </div>
    
            <div class="INDEcosmedicos">    
                <a href="cosmedicos.php">
                    <img src="img/INDEcreme.jpeg" alt="">
                </a>
                <p>Cosmédicos</p>
            </div>
            
            <div class="INDEhigiene">
                <a href="higiene.php">
                <img src="img/INDEsabonete.jpeg" alt="">
                </a>
                <p>Higiene pessoal</p>
            </div>
            
            <div class="INDEbebes">
                <a href="bebes.php">
                <img src="img/INDEchupeta.jpeg" alt="">
                </a>
                <p>Produtos para bebês</p>
            </div>
            
            <div class="INDEsocorros">
                <a href="socorros.php">
                <img src="img/INDEsocorros.jpeg" alt="">
                </a>
                <p>Primeiros socorros</p>
            </div>
            
            <div class="INDEequipamentos">
                <a href="equipamentos.php">
                <img src="img/INDEseringa.jpeg" alt="">
                </a>
                <p>Equipamentos médicos</p>
            </div>
            
            <div class="INDEvitaminas">
                <a href="vitaminas.php">
                <img src="img/INDEvitaminas.jpeg" alt="">
                </a>
                <p>Vitaminas e minerais</p>
            </div>
            
            <div class="INDEsaudesex">
                <a href="saudesex.php">
                <img src="img/INDEsaudesex.jpeg" alt="">
                </a>
                <p>Saúde sexual</p>
            </div>
            
            <div class="INDEperfumes">
                <a href="perfumes.php">
                <img src="img/INDEperfume.jpeg" alt="">
                </a>
                <p>Perfumes</p>
            </div>

      

    </div>




    </main>

<?php include 'footer.php'; ?>