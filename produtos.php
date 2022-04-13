<?php 

include_once 'includes/_head.php';
include_once 'includes/_header.php';
?>
    <main>
        <h1>Produtos</h1>
        <?php


    // monta a SQL que consulta os dados
    $sql = "SELECT * FROM categoria "; 
    $sql2 = "SELECT * FROM produto ";           

    // executa o comando SQL no DB e add os valores na variavel
    $resultado = mysqli_query($conn, $sql);
    $resultado2 = mysqli_query($conn, $sql2);

    // se existe valores executa a repeticao
    if($resultado){
        ?>
        <main>
        <section id="produto">
            
            <ul>
        <?php
                // laco de repeticao
                $categoria = $_GET['cat'];
                $tabProdutos = 1;
                while($row2 = mysqli_fetch_array($resultado2)){

                    
                    echo '<li>';
                    echo '<a href="produtos.php?pro='.$row2['ProdutoID'].'&cat='.$row2['CategoriaID'].'" alt="'.$row2['Descricao'].'" title="" tabindex="'.$tabProdutos.'">'.$row2['Nome'];
                    echo '<img src="imagens/produtos/'.$row2['Imagem'].'" alt="'.$row2['Descricao'].'" title="'.$row2['Descricao'].'" />';
                    echo '</a></li>';
                    $tabProdutos++;
                    
                }
                
                ?>     
          
    
          </ul>
        </section>
        <?php }?>
    </main>
    </main>

    <?php 
include_once 'includes/_footer.php';


?>