<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Site para Mercado" />
        <meta name="author" content="Thiago Henrique da Silva Pinto" />
        <title>Armazém Ponto Kent</title>
        <!-- Scripts para Buscar -->
        <!-- <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js" -->
        <!-- ></script> -->

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../../../css/styles.css" rel="stylesheet" />

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

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
                // include('mostra_img.php');
                // Estabele conexão com o banco de dados
                include('../../../../assets/banco/conection.php');
                // Cria a Query
                $produtos = "SELECT nome_produto, preco_produto, descricao_produto, imagem_produto,
                FROM produtos WHERE id_categoria = '1'";
                $result_produtos = mysqli_query($conect, $produtos);


                // $sql_img = "SELECT imagem_produto FROM produtos WHERE id_categoria = '1'";
                // $re_imagem = mysqli_query ($conect, $sql_img);
                // $

                // teste para Array com Banco
                while($row = mysqli_fetch_array($result_produtos)){
                    // while ($imagem = mysqli_fetch_assoc($imagem)){


                    $arrayProdutos = array(
                        'nome'       => $row['nome_produto'],
                        'preco'      => $row['preco_produto'],
                        'descricao'  => $row['descricao_produto'],
                        'imagem'     => $row['imagem_produto']);
                
                ?>

                    <!-- Produto 01 -->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Imagem do Produto - Inicio -->
                            <img class="card-img-top" style="" width="" height="200px;"src="data:image/jpeg;base64,<?php echo base64_encode( $arrayProdutos['imagem']) ?>" alt="imagem">
                            <!-- Imagem do Produto - Fim -->
                            <!-- Detalhes do Produto - Inicio -->
                            <div class="card-body p-4 border-bottom-1 bg-transparent " >
                                <div class="text-center">
                                    <h5 class="fw-bolder"> <?php echo $arrayProdutos['nome'];  ?></h5>
                                    <?php echo $arrayProdutos['preco']; ?>
                                    
                                </div>
                                <!-- Button trigger modal -->
                                

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