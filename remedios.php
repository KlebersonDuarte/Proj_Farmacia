<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/produto.css">
    <script src="./produto.js"></script>

    <title>Farmácia - Produtos</title>
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

            <!-- 30 PRODUTOS COMPLETOS -->
            <div class="produto">
                <img src="img/paracetamol750.jpeg" alt="Paracetamol 750mg">
                <div class="descricao">
                    <h3>Paracetamol 750mg</h3>
                    <p>Alívio de febre e dores leves</p>
                    <p class="preco">R$ 12,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/dipirona500.jpeg" alt="Dipirona Sódica 500mg">
                <div class="descricao">
                    <h3>Dipirona Sódica 500mg</h3>
                    <p>Analgesia rápida para dores diversas</p>
                    <p class="preco">R$ 8,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/ibuprofeno400.jpeg" alt="Ibuprofeno 400mg">
                <div class="descricao">
                    <h3>Ibuprofeno 400mg</h3>
                    <p>Anti-inflamatório para dores e febre</p>
                    <p class="preco">R$ 16,99</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/amoxicilina500.jpeg" alt="Amoxicilina 500mg">
                <div class="descricao">
                    <h3>Amoxicilina 500mg</h3>
                    <p>Antibiótico para infecções bacterianas</p>
                    <p class="preco">R$ 32,40</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/loratadina10.jpeg" alt="Loratadina 10mg">
                <div class="descricao">
                    <h3>Loratadina 10mg</h3>
                    <p>Antialérgico de ação prolongada</p>
                    <p class="preco">R$ 14,20</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/omeprazol20.jpeg" alt="Omeprazol 20mg">
                <div class="descricao">
                    <h3>Omeprazol 20mg</h3>
                    <p>Reduz a acidez do estômago</p>
                    <p class="preco">R$ 22,00</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/carbonatodecalcio.jpeg" alt="Carbonato de Cálcio">
                <div class="descricao">
                    <h3>Carbonato de Cálcio</h3>
                    <p>Suplemento para fortalecimento ósseo</p>
                    <p class="preco">R$ 18,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/losartana50.jpeg" alt="Losartana 50mg">
                <div class="descricao">
                    <h3>Losartana 50mg</h3>
                    <p>Controle da pressão arterial</p>
                    <p class="preco">R$ 21,70</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/maleatodeenalapril10.jpeg" alt="Enalapril 10mg">
                <div class="descricao">
                    <h3>Enalapril 10mg</h3>
                    <p>Tratamento de hipertensão</p>
                    <p class="preco">R$ 17,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/buscopan10.jpeg" alt="Buscopan">
                <div class="descricao">
                    <h3>Buscopan 10mg</h3>
                    <p>Alívio de dores abdominais e cólicas</p>
                    <p class="preco">R$ 28,40</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/dramim50.jpeg" alt="Dramin">
                <div class="descricao">
                    <h3>Dramin 50mg</h3>
                    <p>Previne enjôos e náuseas</p>
                    <p class="preco">R$ 18,99</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/metformina850.jpeg" alt="Metformina 850mg">
                <div class="descricao">
                    <h3>Metformina 850mg</h3>
                    <p>Controle da glicemia em diabéticos</p>
                    <p class="preco">R$ 24,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/sinvastatina20.jpeg" alt="Sinvastatina 20mg">
                <div class="descricao">
                    <h3>Sinvastatina 20mg</h3>
                    <p>Redução do colesterol</p>
                    <p class="preco">R$ 26,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/setralina50.jpeg" alt="Sertralina 50mg">
                <div class="descricao">
                    <h3>Sertralina 50mg</h3>
                    <p>Antidepressivo para ansiedade/depressão</p>
                    <p class="preco">R$ 39,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/cetoprofeno100.jpeg" alt="Cetoprofeno 100mg">
                <div class="descricao">
                    <h3>Cetoprofeno 100mg</h3>
                    <p>Anti-inflamatório para dores musculares</p>
                    <p class="preco">R$ 19,40</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/diazepam5.jpeg" alt="Diazepam 5mg">
                <div class="descricao">
                    <h3>Diazepam 5mg</h3>
                    <p>Ansiolítico e relaxante muscular</p>
                    <p class="preco">R$ 42,00</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/prednisona20.jpeg" alt="Prednisona 20mg">
                <div class="descricao">
                    <h3>Prednisona 20mg</h3>
                    <p>Corticoide para alergias e inflamações</p>
                    <p class="preco">R$ 15,80</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/claritromicina500.jpeg" alt="Claritromicina 500mg">
                <div class="descricao">
                    <h3>Claritromicina 500mg</h3>
                    <p>Antibiótico de largo espectro</p>
                    <p class="preco">R$ 34,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/diclofenaco50.jpeg" alt="Diclofenaco Sódico 50mg">
                <div class="descricao">
                    <h3>Diclofenaco Sódico 50mg</h3>
                    <p>Anti-inflamatório e analgésico</p>
                    <p class="preco">R$ 12,60</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/ranitidina150.jpeg" alt="Ranitidina 150mg">
                <div class="descricao">
                    <h3>Ranitidina 150mg</h3>
                    <p>Reduz acidez e queimação</p>
                    <p class="preco">R$ 19,80</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/ambroxol.jpeg" alt="Ambroxol Xarope">
                <div class="descricao">
                    <h3>Ambroxol Xarope</h3>
                    <p>Expectorante para tosse</p>
                    <p class="preco">R$ 13,99</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/nimesulida100.jpeg" alt="Nimesulida 100mg">
                <div class="descricao">
                    <h3>Nimesulida 100mg</h3>
                    <p>Anti-inflamatório para diversas dores</p>
                    <p class="preco">R$ 16,40</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/benzetacil.jpeg" alt="Benzetacil Ampola">
                <div class="descricao">
                    <h3>Benzetacil Ampola</h3>
                    <p>Antibiótico injetável</p>
                    <p class="preco">R$ 29,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/polaramine.jpeg" alt="Polaramine">
                <div class="descricao">
                    <h3>Polaramine</h3>
                    <p>Antialérgico de ação moderada</p>
                    <p class="preco">R$ 17,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/aspirina500.jpeg" alt="Aspirina 500mg">
                <div class="descricao">
                    <h3>Aspirina 500mg</h3>
                    <p>Analgésico e antitérmico</p>
                    <p class="preco">R$ 11,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/neosaldina.jpeg" alt="Neosaldina">
                <div class="descricao">
                    <h3>Neosaldina</h3>
                    <p>Analgésico para dor de cabeça intensa</p>
                    <p class="preco">R$ 18,00</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/vitaminaB12.jpeg" alt="Vitamina B12 Injetável">
                <div class="descricao">
                    <h3>Vitamina B12 Injetável</h3>
                    <p>Reposição de B12 para anemia</p>
                    <p class="preco">R$ 22,40</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/magnesio.jpeg" alt="Gliconato de Magnésio">
                <div class="descricao">
                    <h3>Gliconato de Magnésio</h3>
                    <p>Repositor mineral</p>
                    <p class="preco">R$ 15,70</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/fluconazol150.jpeg" alt="Fluconazol 150mg">
                <div class="descricao">
                    <h3>Fluconazol 150mg</h3>
                    <p>Tratamento contra fungos</p>
                    <p class="preco">R$ 19,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <div class="produto">
                <img src="img/desloratadina5.jpeg" alt="Desloratadina 5mg">
                <div class="descricao">
                    <h3>Desloratadina 5mg</h3>
                    <p>Antialérgico de ação prolongada</p>
                    <p class="preco">R$ 20,90</p>
                    <button>Comprar</button>
                </div>
            </div>

        </div>
    </main>

</body>
</html>
