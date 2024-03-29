<?php 

require_once('class/sobre.php'); //fazendo a conexão
$listaServico = new SobreClass();
$listar = $listaServico->Listar();
//var_dump($listar);


?>


<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
    /*font-family: 'Poppins', sans-serif;*/

    :root {
    --darkblue: #161925;
    --lightblue: #446688;
    --white: #fffcf9;
    --green: #31af8b;
    --orange: #ff850a;
    }

    * {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    }
    *,
    *::before,
    *::after {
    box-sizing: border-box;
    }

    caption{
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 2%;
        padding: 2%;
        border-radius: 20px;
        background-color: var(--white);
    }
    table{
        background-color: var(--white);
        border-radius: 20px;
        padding: 1%;
    }
    th{
        background-color: rgba(231, 230, 234, 0.8);
        padding: 0.8rem;
    }
    td{
        text-align: center;
        padding: 0.8rem;
    }
    tr:hover{
        background-color: rgba(231, 230, 234, 0.4);
    }

    .id{
        font-weight: 800;
        background-color: rgba(231, 230, 234, 0.8);
    }
    .sobre-img img{
        width: 200px;
    }

    .status-ativo{
        background-color: #2bee11;
        text-decoration: none;
        border-radius: 5px;
        color: var(--darkblue);
        font-weight: 600;
    } 

    .inserir, .atualizar,
    .desativar, .ativar{
        font-size: 1.5rem;
        text-decoration: none;
        color:  var(--darkblue);
    }

</style>

<div>
    <table>
        <caption>Lista  Sobre</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>IMAGEM</th>
                <th>ALT</th>
                <th>TEXTO</th>
                <th>LINK</th>
                <th>STATUS</th>
                <th>INSERIR</th>
                <th>ATUALIZAR</th>
                <th>ATIVAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($listar as $linha):?>
            <tr>
                <td class="id"><?php echo $linha['idSobre']?></td>  
                <td class="sobre-img"><?php echo '<img src="../img/' . $linha['imgSobre'] . '"alt="' . $linha['altSobre'] . '">' ?></td>                           
                <td><?php echo $linha['altSobre']?></td>             
                <td><?php echo $linha['textSobre']?></td>             
                <td><?php echo $linha['linkSobre']?></td>                       
                <td class="status-ativo"><?php echo $linha['statusSobre']?></td> 
                <td><a class="inserir" title="Inserir" href="index.php?p=sobre&ss=inserir"><i class="ri-pencil-fill"></i></a></td>                             
                <td><a class="atualizar" title="Atualizar" href="index.php?p=sobre&s=atualizar"><i class="ri-loop-left-line"></i></a></td>
                <td><a class="ativar" title="Ativar" href="index.php?p=sobre&s=ativar&id=<?php echo $linha['idSobre']?>"><i class="ri-checkbox-circle-line"></i></a></td>
                <td><a class="desativar" title="Desativar" href="index.php?p=sobre&s=desativar"><i class="ri-eye-off-line"></i></a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
