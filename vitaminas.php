<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/produto.css">
    <title>Farmácia - Vitaminas e Minerais</title>
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

    <!-- MENU MOBILE -->
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

<main>
    <div class="produtos-container">

        <!-- 1 -->
        <div class="produto">
            <img src="img/vitamina_c_500mg.jpeg" alt="">
            <div class="descricao">
                <h3>Vitamina C 500mg</h3>
                <p>Auxilia na imunidade e energia diária.</p>
                <p class="preco">R$ 24,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 2 -->
        <div class="produto">
            <img src="img/vitamina_d3_2000ui.jpeg" alt="">
            <div class="descricao">
                <h3>Vitamina D3 2000 UI</h3>
                <p>Contribui para ossos e imunidade.</p>
                <p class="preco">R$ 29,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 3 -->
        <div class="produto">
            <img src="img/magnesio_dimalato.jpeg" alt="">
            <div class="descricao">
                <h3>Magnésio Dimalato 500mg</h3>
                <p>Auxilia no relaxamento muscular.</p>
                <p class="preco">R$ 32,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 4 -->
        <div class="produto">
            <img src="img/omega3_1000mg.jpeg" alt="">
            <div class="descricao">
                <h3>Ômega 3 1000mg</h3>
                <p>Suporte ao coração e memória.</p>
                <p class="preco">R$ 38,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 5 -->
        <div class="produto">
            <img src="img/multivitaminico_adulto.jpeg" alt="">
            <div class="descricao">
                <h3>Multivitamínico Adulto</h3>
                <p>Completo para o bem-estar diário.</p>
                <p class="preco">R$ 34,50</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 6 -->
        <div class="produto">
            <img src="img/zinco_29mg.jpeg" alt="">
            <div class="descricao">
                <h3>Zinco 29mg</h3>
                <p>Auxilia na imunidade e cicatrização.</p>
                <p class="preco">R$ 16,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 7 -->
        <div class="produto">
            <img src="img/ferro_sulfato.jpeg" alt="">
            <div class="descricao">
                <h3>Ferro (Sulfato Ferroso)</h3>
                <p>Auxilia na prevenção da anemia.</p>
                <p class="preco">R$ 12,99</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 8 -->
        <div class="produto">
            <img src="img/calcio_600mg.jpeg" alt="">
            <div class="descricao">
                <h3>Cálcio 600mg + D3</h3>
                <p>Fortalecimento ósseo diário.</p>
                <p class="preco">R$ 28,50</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 9 -->
        <div class="produto">
            <img src="img/acido_folico_400mcg.jpeg" alt="">
            <div class="descricao">
                <h3>Ácido Fólico 400mcg</h3>
                <p>Essencial para gestantes e imunidade.</p>
                <p class="preco">R$ 9,99</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 10 -->
        <div class="produto">
            <img src="img/magnesio_malatotr.jpeg" alt="">
            <div class="descricao">
                <h3>Magnésio Malato</h3>
                <p>Energia, foco e disposição.</p>
                <p class="preco">R$ 36,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 11 -->
        <div class="produto">
            <img src="img/vitamina_b12_2000mcg.jpeg" alt="">
            <div class="descricao">
                <h3>Vitamina B12 2000mcg</h3>
                <p>Auxilia na memória e energia.</p>
                <p class="preco">R$ 22,50</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 12 -->
        <div class="produto">
            <img src="img/colageno_hidrolisado.jpeg" alt="">
            <div class="descricao">
                <h3>Colágeno Hidrolisado</h3>
                <p>Pele firme, unhas e cabelos fortes.</p>
                <p class="preco">R$ 44,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 13 -->
        <div class="produto">
            <img src="img/probiotico_10b.jpeg" alt="">
            <div class="descricao">
                <h3>Probiótico 10B UFC</h3>
                <p>Melhora da flora intestinal.</p>
                <p class="preco">R$ 49,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 14 -->
        <div class="produto">
            <img src="img/vitamina_e_400ui.jpeg" alt="">
            <div class="descricao">
                <h3>Vitamina E 400 UI</h3>
                <p>Antioxidante poderoso.</p>
                <p class="preco">R$ 27,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- 15 -->
        <div class="produto">
            <img src="img/biotina_5000mcg.jpeg" alt="">
            <div class="descricao">
                <h3>Biotina 5000mcg</h3>
                <p>Fortalece cabelo e unhas.</p>
                <p class="preco">R$ 18,90</p>
                <button>Comprar</button>
            </div>
        </div>

    </div>
</main>
</body>
</html>
