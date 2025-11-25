<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/inicio.css">
    <script src = "./inicio.js"></script> 
    <title>Farmácia</title>
</head>
<body>

    <!--               HEADER              -->
    <header class="topo">
            <!-- nome da farmacia -->
                <div class= "nome">
                    <h1><></h1>
                </div>
            <!--barra de pesquisa-->

                <div class= "pesquisa">
                      

                        <div class="CaixaP">
                            
                            <input  namw="barraP" type="text" id="barraP" autocomlete="off" placeholder="pesquisa">
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


                
          <!-- carrinho -->
            <div class= "carrinho">
             <a href="carrinho.php"><i class="fa-solid fa-cart-shopping"></i>
            </div>


                


    </header>

    <!--                  MAIN              -->
    <main>

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
            
            <div class="INDEsocorros.php">
                <a href="socorros">
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

    <!--                 FOOTER             -->
</body>
</html>