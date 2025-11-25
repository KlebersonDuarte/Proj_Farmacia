<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/produto.css">
    <title>Farmácia - Perfumes</title>
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

        <!-- Produto 1 -->
        <div class="produto">
            <img src="img/perfume_floral_doce.jpeg" alt="">
            <div class="descricao">
                <h3>Perfume Floral Doce</h3>
                <p>Mistura de flores e frutas doces.</p>
                <p class="preco">R$ 129,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 2 -->
        <div class="produto">
            <img src="img/colonia_lavanda_relax.jpeg" alt="">
            <div class="descricao">
                <h3>Colônia Lavanda Relax</h3>
                <p>Aroma calmante de lavanda.</p>
                <p class="preco">R$ 109,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 3 -->
        <div class="produto">
            <img src="img/perfume_ambarado_noturno.jpeg" alt="">
            <div class="descricao">
                <h3>Perfume Ambarado Noturno</h3>
                <p>Fragrância quente para a noite.</p>
                <p class="preco">R$ 149,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 4 -->
        <div class="produto">
            <img src="img/body_mist_morango.jpeg" alt="">
            <div class="descricao">
                <h3>Body Mist Morango</h3>
                <p>Brilho frutado para aplicar no corpo.</p>
                <p class="preco">R$ 99,00</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 5 -->
        <div class="produto">
            <img src="img/eau_de_parfum_jasmim.jpeg" alt="">
            <div class="descricao">
                <h3>Eau de Parfum Jasmim</h3>
                <p>Elegância floral de jasmim puro.</p>
                <p class="preco">R$ 159,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 6 -->
        <div class="produto">
            <img src="img/eau_de_parfum_premium_masculino.jpeg" alt="">
            <div class="descricao">
                <h3>Eau de Parfum Premium Masculino</h3>
                <p>Fragrância sofisticada para ocasiões especiais.</p>
                <p class="preco">R$ 179,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 7 -->
        <div class="produto">
            <img src="img/perfume_oceanico_masculino.jpeg" alt="">
            <div class="descricao">
                <h3>Perfume Oceânico Masculino</h3>
                <p>Notas marinhas e frescas para o dia.</p>
                <p class="preco">R$ 139,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 8 -->
        <div class="produto">
            <img src="img/colonia_musk_suave.jpeg" alt="">
            <div class="descricao">
                <h3>Colônia Musk Suave</h3>
                <p>Aroma almíscarado leve para todo dia.</p>
                <p class="preco">R$ 124,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 9 -->
        <div class="produto">
            <img src="img/eau_de_cologne_classica.jpeg" alt="">
            <div class="descricao">
                <h3>Eau de Cologne Clássica</h3>
                <p>Fragrância tradicional e atemporal.</p>
                <p class="preco">R$ 129,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 10 -->
        <div class="produto">
            <img src="img/perfume_frutas_vermelhas.jpeg" alt="">
            <div class="descricao">
                <h3>Perfume Frutas Vermelhas</h3>
                <p>Mistura doce de frutas vermelhas.</p>
                <p class="preco">R$ 134,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 11 -->
        <div class="produto">
            <img src="img/perfume_noite_intensa.jpeg" alt="">
            <div class="descricao">
                <h3>Perfume Noite Intensa</h3>
                <p>Aroma profundo e marcante para a noite.</p>
                <p class="preco">R$ 149,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 12 -->
        <div class="produto">
            <img src="img/colonia_fresh_citrus.jpeg" alt="">
            <div class="descricao">
                <h3>Colônia Fresh Citrus</h3>
                <p>Sensação fresca de limão e tangerina.</p>
                <p class="preco">R$ 119,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 13 -->
        <div class="produto">
            <img src="img/perfume_floral_vibrante.jpeg" alt="">
            <div class="descricao">
                <h3>Perfume Floral Vibrante</h3>
                <p>Flores exuberantes para quem ama perfume intenso.</p>
                <p class="preco">R$ 149,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 14 -->
        <div class="produto">
            <img src="img/body_splash_coco.jpeg" alt="">
            <div class="descricao">
                <h3>Body Splash Coco</h3>
                <p>Fragrância tropical de coco.</p>
                <p class="preco">R$ 99,90</p>
                <button>Comprar</button>
            </div>
        </div>

        <!-- Produto 15 -->
        <div class="produto">
            <img src="img/perfume_amadeirado_suave.jpeg" alt="">
            <div class="descricao">
                <h3>Perfume Amadeirado Suave</h3>
                <p>Madeiras suaves para um aroma sofisticado.</p>
                <p class="preco">R$ 139,90</p>
                <button>Comprar</button>
            </div>
        </div>

    </div>
</main>
</body>
</html>
