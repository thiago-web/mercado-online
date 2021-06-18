<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Site para Mercado" />
        <meta name="author" content="Thiago Henrique da Silva Pinto" />
        <title>Armazém Ponto Kent</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../../css/styles.css" rel="stylesheet" />

       
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
                            <div class="card-body p-4 border-bottom-1 bg-transparent " >
                                <div class="text-center">
                                    <h5 class="fw-bolder"> <?php echo $value['nome'] ;?></h5>
                                    R$00,00
                                </div>
                                <!-- Button trigger modal -->
                                
                                <div class="text-center">
                                    <button class="btn btn-outline-success mt-5" style="color: black; border-color: black;" href="" data-toggle="modal" data-target="#MyModal"> Mais informaçoes  </button>
                                </div>
                                <div id="MyModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                      <!-- Modal content-->
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Titulo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            ...
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                          </div>
                            <!-- Detalhes do Produto - Fim -->
                            <!-- Ações do Produto - Inicio -->
                            <div class="card-footer p-4 pt-0 border-top-1 bg-transparent ">
                                <div class="text-center mt-3" >
                                    <a  class="btn btn-outline-danger mt-auto" href="?adicionar= <?php echo $key ?>" style=" border-color: black ; " > Adicionar ao Carrinho</a>
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
         <!-- Importando o jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
  <!-- Importando o js do bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>       
    </body>
    </html> 