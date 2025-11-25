<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/produto.css">
    <title>Farmácia - Saúde Sexual</title>
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
                <img src="img/preservativo_jontex_lubrificado.jpeg" alt="">
                <div class="descricao">
                    <h3>Preservativo Jontex Lubrificado</h3>
                    <p>Camisinha masculina lubrificada</p>
                    <p class="preco">R$ 14,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 2 -->
            <div class="produto">
                <img src="img/preservativo_olla_sensitive.jpeg" alt="">
                <div class="descricao">
                    <h3>Preservativo Olla Sensitive</h3>
                    <p>Mais sensibilidade e conforto</p>
                    <p class="preco">R$ 12,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 3 -->
            <div class="produto">
                <img src="img/preservativo_prudence_morango.jpeg" alt="">
                <div class="descricao">
                    <h3>Preservativo Prudence Morango</h3>
                    <p>Camisinha com sabor de morango</p>
                    <p class="preco">R$ 10,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 4 -->
            <div class="produto">
                <img src="img/preservativo_prudence_extra_grande.jpeg" alt="">
                <div class="descricao">
                    <h3>Preservativo Prudence Extra Grande</h3>
                    <p>Tamanho especial para conforto</p>
                    <p class="preco">R$ 16,00</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 5 -->
            <div class="produto">
                <img src="img/preservativo_jontex_texturizado.jpeg" alt="">
                <div class="descricao">
                    <h3>Preservativo Jontex Texturizado</h3>
                    <p>Texturas para mais estímulo</p>
                    <p class="preco">R$ 15,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 6 -->
            <div class="produto">
                <img src="img/preservativo_olla_ultra_fino.jpeg" alt="">
                <div class="descricao">
                    <h3>Preservativo Olla Ultra Fino</h3>
                    <p>Maior sensibilidade ao toque</p>
                    <p class="preco">R$ 18,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 7 -->
            <div class="produto">
                <img src="img/preservativo_skyn_sem_latex.jpeg" alt="">
                <div class="descricao">
                    <h3>Preservativo Skyn Sem Látex</h3>
                    <p>Ideal para alérgicos</p>
                    <p class="preco">R$ 22,90</p>
                    <button>Comprar</button>
                </div>
            </div>

                    <!-- 8 -->
        <div class="produto">
            <img src="img/anticoncepcional_trinordiol.jpeg" alt="">
            <div class="descricao">
                <h3>Anticoncepcional Trinordiol</h3>
                <p>Comprimidos hormonais combinados para prevenção da gravidez</p>
                <p class="preco">R$ 49,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 9 -->
        <div class="produto">
            <img src="img/anticoncepcional_diol_35.jpeg" alt="">
            <div class="descricao">
                <h3>Anticoncepcional Diol 35</h3>
                <p>Comprimidos combinados diários para proteção confiável</p>
                <p class="preco">R$ 52,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 10 -->
        <div class="produto">
            <img src="img/anticoncepcional_microvlar.jpeg" alt="">
            <div class="descricao">
                <h3>Anticoncepcional Microvlar</h3>
                <p>Comprimidos hormonais com baixa dosagem para prevenção eficaz</p>
                <p class="preco">R$ 47,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 11 -->
        <div class="produto">
            <img src="img/anticoncepcional_injetavel.jpeg" alt="">
            <div class="descricao">
                <h3>Anticoncepcional Injetável</h3>
                <p>Injeção hormonal mensal para prevenção da gravidez</p>
                <p class="preco">R$ 69,90</p>
                <button>Comprar</button>
            </div>
        </div>


        </div>
    </main>

</body>
</html>
