<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Site para Mercado" />
        <meta name="author" content="Thiago Henrique da Silva Pinto" />
        <title>Armazém Ponto Kent</title>
        <!-- Scripts para Buscar -->
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"
        ></script>

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <section class="py-5">
            <div class="container text-center">
                <h1 style="">Açougue</h1>      
              </div>
            <div class="container px-4 px-lg-5 mt-5">
                <!-- Inicio da Linha de produtos -->
                <div class="row  gx-4 gx-lg-5 row-cols-2-md-3 row-cols-xl-4 justify-content-center"> 
                <?php 
                // <!-- Crio o Array dos Produtos -->
                $items = array(
                    ['nome'=>'Carne 1', 'imagem'=>'../../assets/dist/images/produtos/acougue/carne.png', 
                    'preco'=>'00,00'],
                    ['nome'=>'Carne 2', 'imagem'=>'../../assets/dist/images/produtos/acougue/carne.png', 
                    'preco'=>'00,00'],
                    ['nome'=>'Carne 3', 'imagem'=>'../../assets/dist/images/produtos/acougue/carne.png', 
                    'preco'=>'00,00'],
                    ['nome'=>'Carne 4', 'imagem'=>'../../assets/dist/images/produtos/acougue/carne.png', 
                    'preco'=>'00,00']



                );
                
                
                foreach ($items as $key => $value) { 
                
                ?>

                    <!-- Produto 01 -->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Imagem do Produto - Inicio -->
                            <img class="card-img-top" src="<?php echo $value['imagem']; ?>" alt="imagem">
                            <!-- Imagem do Produto - Fim -->
                            <!-- Detalhes do Produto - Inicio -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"> <?php echo $value['nome'] ;?></h5>
                                    R$00,00
                                </div>
                            </div>
                            <!-- Detalhes do Produto - Fim -->
                            <!-- Ações do Produto - Inicio -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="?adicionar= <?php echo 
                                    $key ?>" > Adicionar ao Carrinho</a>
                                </div>
                            </div>
                            <!-- Ações do Produto - Fim-->

                        </div>
                    </div> 
                     <!-- Fim do Produto 1 -->
                    <?php
                    }
                    if(isset($_GET['adicionar'])){
                        // Adiciona ao carrinho
                        $idProduto = (int) $_GET['adicionar'];
                        if(isset($items[$idProduto])){
                            if (isset($_SESSION['carrinho'][$idProduto])) {
                                $_SESSION['carrinho'][$idProduto]['quantidade']++;
                            }
                            else
                            {
                                $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1 , 'nome'=>$items[$idProduto]['nome'], 
                                    'preco'=>$items[$idProduto]['preco'] );
                                
                            }
                            // $_SESSION['quantidade_total']++;
                            echo "<script> alert('Produto adicionado ao Carrinho !') </script>";
                        }
                        else{
                            die('Você não pode adicionar um Item que não existe .');
                        }

                    }
    ?>
                <!-- Fim da linha de Produtos -->
            </div>
        </section>
    </body>
    </html> 