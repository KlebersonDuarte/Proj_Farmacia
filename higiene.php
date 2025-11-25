<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/produto.css">
    <title>Farmácia - Higiene Pessoal</title>
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
                <img src="img/sabonete_liquido_lifebuoy.jpeg" alt="">
                <div class="descricao">
                    <h3>Sabonete Líquido Antibacteriano Lifebuoy</h3>
                    <p>Limpeza profunda com ação antibacteriana</p>
                    <p class="preco">R$ 9,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 2 -->
            <div class="produto">
                <img src="img/sabonete_barra_dove_karite.jpeg" alt="">
                <div class="descricao">
                    <h3>Sabonete em Barra Dove Karité</h3>
                    <p>Hidratação intensa com manteiga de karité</p>
                    <p class="preco">R$ 4,20</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 3 -->
            <div class="produto">
                <img src="img/desodorante_rexona_men_v8.jpeg" alt="">
                <div class="descricao">
                    <h3>Desodorante Rexona Men V8 Aerosol</h3>
                    <p>Proteção seca por até 72h</p>
                    <p class="preco">R$ 15,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 4 -->
            <div class="produto">
                <img src="img/desodorante_dove_rollon.jpeg" alt="">
                <div class="descricao">
                    <h3>Desodorante Dove Original Roll-on</h3>
                    <p>Proteção suave e duradoura</p>
                    <p class="preco">R$ 10,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 5 -->
            <div class="produto">
                <img src="img/desodorante_axe.jpeg" alt="">
                <div class="descricao">
                    <h3>Desodorante Axe Aerosol</h3>
                    <p>Proteção duradoura e fragrância marcante</p>
                    <p class="preco">R$ 16,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 6 -->
            <div class="produto">
                <img src="img/sabonete_barra_nivea.jpeg" alt="">
                <div class="descricao">
                    <h3>Sabonete em Barra Nivea</h3>
                    <p>Higiene e cuidado diário da pele</p>
                    <p class="preco">R$ 5,20</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 7 -->
            <div class="produto">
                <img src="img/shampoo_dove.jpeg" alt="">
                <div class="descricao">
                    <h3>Shampoo Dove Nutritivo</h3>
                    <p>Fortalece e hidrata os fios</p>
                    <p class="preco">R$ 14,99</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 8 -->
            <div class="produto">
                <img src="img/condicionador_dove.jpeg" alt="">
                <div class="descricao">
                    <h3>Condicionador Dove Nutritivo</h3>
                    <p>Maciez e desembaraço</p>
                    <p class="preco">R$ 15,99</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 9 -->
            <div class="produto">
                <img src="img/shampoo_pantene.jpeg" alt="">
                <div class="descricao">
                    <h3>Shampoo Pantene Brilho Extremo</h3>
                    <p>Realça brilho e maciez</p>
                    <p class="preco">R$ 17,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 10 -->
            <div class="produto">
                <img src="img/condicionador_pantene.jpeg" alt="">
                <div class="descricao">
                    <h3>Condicionador Pantene Brilho Extremo</h3>
                    <p>Brilho e hidratação intensa</p>
                    <p class="preco">R$ 18,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 11 -->
            <div class="produto">
                <img src="img/shampoo_seda.jpeg" alt="">
                <div class="descricao">
                    <h3>Shampoo Seda Liso Perfeito</h3>
                    <p>Deixa os fios mais alinhados</p>
                    <p class="preco">R$ 11,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 12 -->
            <div class="produto">
                <img src="img/condicionador_seda.jpeg" alt="">
                <div class="descricao">
                    <h3>Condicionador Seda Liso Perfeito</h3>
                    <p>Desembaraço e maciez</p>
                    <p class="preco">R$ 12,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 13 -->
            <div class="produto">
                <img src="img/sabonete_liquido_dove.jpeg" alt="">
                <div class="descricao">
                    <h3>Sabonete Líquido Dove</h3>
                    <p>Limpeza suave e hidratante</p>
                    <p class="preco">R$ 10,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 14 -->
            <div class="produto">
                <img src="img/hidratante_johnsons.jpeg" alt="">
                <div class="descricao">
                    <h3>Creme Hidratante Johnson’s</h3>
                    <p>Hidratação intensa para o corpo</p>
                    <p class="preco">R$ 18,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 15 -->
            <div class="produto">
                <img src="img/oleo_johnsons.jpeg" alt="">
                <div class="descricao">
                    <h3>Óleo Corporal Johnson’s</h3>
                    <p>Pele macia e nutrida</p>
                    <p class="preco">R$ 15,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 16 -->
            <div class="produto">
                <img src="img/sabonete_barra_granado.jpeg" alt="">
                <div class="descricao">
                    <h3>Sabonete Granado Tradicional</h3>
                    <p>Limpeza suave e fragrância clássica</p>
                    <p class="preco">R$ 6,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 17 -->
            <div class="produto">
                <img src="img/pos_barba_bozzano.jpeg" alt="">
                <div class="descricao">
                    <h3>Gel Pós-barba Bozzano</h3>
                    <p>Alívio imediato para a pele</p>
                    <p class="preco">R$ 16,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 18 -->
            <div class="produto">
                <img src="img/protetor_labial_nivea.jpeg" alt="">
                <div class="descricao">
                    <h3>Protetor Labial Nivea Med Repair</h3>
                    <p>Proteção e reparação labial</p>
                    <p class="preco">R$ 17,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 19 -->
            <div class="produto">
                <img src="img/gel_de_limpeza_laroche.jpeg" alt="">
                <div class="descricao">
                    <h3>Gel de Limpeza La Roche</h3>
                    <p>Controle de oleosidade</p>
                    <p class="preco">R$ 54,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 20 -->
            <div class="produto">
                <img src="img/sabonete_liquido_nivea.jpeg" alt="">
                <div class="descricao">
                    <h3>Sabonete Líquido Nivea</h3>
                    <p>Limpeza e hidratação diária</p>
                    <p class="preco">R$ 9,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 21 -->
            <div class="produto">
                <img src="img/desodorante_rollon_nivea.jpeg" alt="">
                <div class="descricao">
                    <h3>Desodorante Roll-on Nivea</h3>
                    <p>Proteção suave e hidratação da pele</p>
                    <p class="preco">R$ 12,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 22 -->
            <div class="produto">
                <img src="img/desodorante_aerosol_nivea.jpeg" alt="">
                <div class="descricao">
                    <h3>Desodorante Aerosol Nivea</h3>
                    <p>Proteção prolongada e fragrância suave</p>
                    <p class="preco">R$ 14,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 23 -->
            <div class="produto">
                <img src="img/sabonete_liquido_granado.jpeg" alt="">
                <div class="descricao">
                    <h3>Sabonete Líquido Granado</h3>
                    <p>Limpeza delicada para todos os tipos de pele</p>
                    <p class="preco">R$ 8,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 24 -->
            <div class="produto">
                <img src="img/hidratante_maos_nivea.jpeg" alt="">
                <div class="descricao">
                    <h3>Creme para Mãos Nívea</h3>
                    <p>Hidratação profunda para as mãos</p>
                    <p class="preco">R$ 10,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 25 -->
            <div class="produto">
                <img src="img/perfume_giovanna_baby_rosa.jpeg" alt="">
                <div class="descricao">
                    <h3>Perfume Giovanna Baby Rosa</h3>
                    <p>Fragrância suave e clássica</p>
                    <p class="preco">R$ 39,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 26 -->
            <div class="produto">
                <img src="img/sabonete_neutrogena.jpeg" alt="">
                <div class="descricao">
                    <h3>Sabonete Neutrogena</h3>
                    <p>Limpeza suave e eficiente</p>
                    <p class="preco">R$ 12,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 27 -->
            <div class="produto">
                <img src="img/desodorante_natura.jpeg" alt="">
                <div class="descricao">
                    <h3>Desodorante Natura Aerosol</h3>
                    <p>Proteção prolongada e perfume agradável</p>
                    <p class="preco">R$ 18,90</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 28 -->
            <div class="produto">
                <img src="img/desodorante_rollon_natura.jpeg" alt="">
                <div class="descricao">
                    <h3>Desodorante Natura Roll-on</h3>
                    <p>Proteção suave e hidratação</p>
                    <p class="preco">R$ 13,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 29 -->
            <div class="produto">
                <img src="img/sabonete_liquido_neutrogena.jpeg" alt="">
                <div class="descricao">
                    <h3>Sabonete Líquido Neutrogena</h3>
                    <p>Limpeza refrescante e suave</p>
                    <p class="preco">R$ 15,50</p>
                    <button>Comprar</button>
                </div>
            </div>

            <!-- 30 -->
            <div class="produto">
                <img src="img/desodorante_loreal.jpeg" alt="">
                <div class="descricao">
                    <h3>Desodorante L’Oréal Aerosol</h3>
                    <p>Proteção confiável e fragrância agradável</p>
                    <p class="preco">R$ 16,90</p>
                    <button>Comprar</button>
                </div>
            </div>

        </div>
    </main>

</body>
</html>
