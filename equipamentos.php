<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/produto.css">
    <title>Farmácia - Equipamentos Médicos</title>
</head>
<body>

    <!-- HEADER -->
    <header class="topo">
        <div class="nome">
            <a href="index.php"><h1><></h1></a>
        </div>

        <div class="pesquisa">
            <div class="CaixaP">
                <input name="barraP" type="text" id="barraP" autocomplete="off" placeholder="pesquisa">
                <div class="lupa">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>

        <div class="login">
            <a href="login.php">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>

        <div class="carrinho">
            <a href="carrinho.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </header>

    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-btn">
        <span></span>
        <span></span>
        <span></span>
    </label>

    <div class="slide-menu">
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="bebes.php">Produtos para bebês</a></li>
            <li><a href="cosmedicos.php">Cosmédicos</a></li>
            <li><a href="descontos.php">Descontos</a></li>
            <li><a href="equipamentos.php">Equipamentos médicos</a></li>
            <li><a href="higiene.php">Higiene</a></li>
            <li><a href="perfumes.php">Perfumes</a></li>
            <li><a href="remedios.php">Remédios</a></li>
            <li><a href="saudesex.php">Saúde sexual</a></li>
            <li><a href="socorros.php">Primeiros socorros</a></li>
            <li><a href="vitaminas.php">Vitaminas e minerais</a></li>
        </ul>
    </div>

    <!-- MAIN: produtos -->
    <main>
        <div class="produtos-container">

            <!-- 1 -->
            <div class="produto">
                <img src="img/estetoscopio.jpeg" alt="">
                <div class="descricao">
                    <h3>Estetoscópio Littmann Classic III</h3>
                    <p>Ausculta cardíaca e pulmonar com alta precisão</p>
                    <p class="preco">R$ 499,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 2 -->
            <div class="produto">
                <img src="img/termometro_infravermelho.jpeg" alt="">
                <div class="descricao">
                    <h3>Termômetro Digital Infravermelho</h3>
                    <p>Medicação rápida e sem contato da temperatura corporal</p>
                    <p class="preco">R$ 129,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 3 -->
            <div class="produto">
                <img src="img/esfigmomanometro.jpeg" alt="">
                <div class="descricao">
                    <h3>Esfigmomanômetro Manual Premium</h3>
                    <p>Medição de pressão arterial com manguito ajustável</p>
                    <p class="preco">R$ 199,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 4 -->
            <div class="produto">
                <img src="img/oximetro.jpeg" alt="">
                <div class="descricao">
                    <h3>Oxímetro de Pulso Fingertip</h3>
                    <p>Mede saturação de oxigênio e frequência cardíaca</p>
                    <p class="preco">R$ 149,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 5 -->
            <div class="produto">
                <img src="img/balanca_digital.jpeg" alt="">
                <div class="descricao">
                    <h3>Balança Digital de Precisão Clínica</h3>
                    <p>Peso corporal preciso com capacidade de até 200kg</p>
                    <p class="preco">R$ 349,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 6 -->
            <div class="produto">
                <img src="img/aparelho_ultrassom.jpeg" alt="">
                <div class="descricao">
                    <h3>Aparelho de Ultrassom Portátil</h3>
                    <p>Imagens médicas em tempo real para diagnósticos rápidos</p>
                    <p class="preco">R$ 4.990,00</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 7 -->
            <div class="produto">
                <img src="img/nebulizador.jpeg" alt="">
                <div class="descricao">
                    <h3>Nebulizador Inalatório Elétrico</h3>
                    <p>Facilita aplicação de medicamentos respiratórios</p>
                    <p class="preco">R$ 249,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 8 -->
            <div class="produto">
                <img src="img/instrumentos_cirurgicos.jpeg" alt="">
                <div class="descricao">
                    <h3>Conjunto de Instrumentos Cirúrgicos</h3>
                    <p>Kit completo para procedimentos médicos</p>
                    <p class="preco">R$ 899,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 9 -->
            <div class="produto">
                <img src="img/mascara_ambu.jpeg" alt="">
                <div class="descricao">
                    <h3>Máscara de Ventilação Ambu</h3>
                    <p>Máscara para ressuscitação manual em emergências</p>
                    <p class="preco">R$ 179,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 10 -->
            <div class="produto">
                <img src="img/bisturi_eletrico.jpeg" alt="">
                <div class="descricao">
                    <h3>Bisturi Elétrico Portátil</h3>
                    <p>Corte preciso com coagulação simultânea</p>
                    <p class="preco">R$ 1.299,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 11 -->
            <div class="produto">
                <img src="img/lampada_cirurgica.jpeg" alt="">
                <div class="descricao">
                    <h3>Lâmpada Cirúrgica LED de Mesa</h3>
                    <p>Iluminação intensa e focada para procedimentos</p>
                    <p class="preco">R$ 1.199,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 12 -->
            <div class="produto">
                <img src="img/desfibrilador_aed.jpeg" alt="">
                <div class="descricao">
                    <h3>Desfibrilador Automático AED</h3>
                    <p>Aplicação de choque seguro para emergência cardíaca</p>
                    <p class="preco">R$ 3.999,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 13 -->
            <div class="produto">
                <img src="img/aparelho_ecg.jpeg" alt="">
                <div class="descricao">
                    <h3>Aparelho de Eletrocardiograma (ECG)</h3>
                    <p>Registro elétrico da atividade cardíaca</p>
                    <p class="preco">R$ 2.499,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 14 -->
            <div class="produto">
                <img src="img/cadeira_rodas.jpeg" alt="">
                <div class="descricao">
                    <h3>Cadeira de Rodas Dobrável</h3>
                    <p>Confortável e portátil para transporte de pacientes</p>
                    <p class="preco">R$ 599,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 15 -->
            <div class="produto">
                <img src="img/termometro_clinico.jpeg" alt="">
                <div class="descricao">
                    <h3>Termômetro Clínico Digital de Testa</h3>
                    <p>Medição rápida e precisa da temperatura corporal</p>
                    <p class="preco">R$ 89,90</p>
                    <button>Comprar</button>
                </div>
            </div>

        </div>
    </main>

</body>
</html>
