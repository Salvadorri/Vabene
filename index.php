<?php 

include_once 'includes/_head.php';
include_once 'includes/_header.php'; 
?>

  <main>
        <h1>Home</h1>
 
        <section id="categoria">

        <h3>Categorias</h3>

        <ul>
        <?php
         
                    echo '<li>';
                    echo '<a href="produtos.php?cat='.$row['CategoriaID'].'" alt="'.$row['descricao'].'" title="" tabindex="'.$tabCategoria.'">'.$row['Nome'];
                    echo '<img src="imagens/categorias/'.$row['imagem'].'" alt="'.$row['descricao'].'" title="'.$row['descricao'].'" />';
                    echo '</a></li>';

                ?>     
          
    
    
        </ul>
        </section>
        </main>
        <main>
        <section id="produto">
            <h3>Produtos</h3>
            <ul>
        <?php
         
  
                    echo '<li>';
                    echo '<a href="produtos.php?pro='.$row2['ProdutoID'].'&cat='.$row2['CategoriaID'].'" alt="'.$row2['Descricao'].'" title="" tabindex="'.$tabProdutos.'">'.$row2['Nome'];
                    echo '<img src="imagens/produtos/'.$row2['Imagem'].'" alt="'.$row2['Descricao'].'" title="'.$row2['Descricao'].'" />';
                    echo '</a></li>';
            
                
                ?>     
          
    
          </ul>
        </section>
        <?php }?>
    </main>

    <?php 
    include_once 'includes/_footer.php';
    ?>