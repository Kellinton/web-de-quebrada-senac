
<?php 

require_once('class/servico.php'); //fazendo a conexão
$listaServico = new ServicoClass();
$listar = $listaServico->Listar();
//var_dump($listar);


?>

<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="css/listar.css">

<div>
    <table>
        <caption>Lista de Serviços</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>TÍTULO</th>
                <th>IMAGEM</th>
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
                <td class="id"><?php echo $linha['idServico']?></td>             
                <td><?php echo $linha['tituloServico']?></td>             
                <td><?php echo '<img src="../img/' . $linha['imgServico'] . '">' ?></td>               
                <td><?php echo $linha['textServico']?></td>             
                <td><?php echo $linha['linkServico']?></td>             
                <td class="<?php echo ($linha['statusServico'] === 'ATIVO') ? 'status-ativo' : 'status-inativo'; ?>"><?php echo $linha['statusServico']?></td>
                <td><a class="inserir" title="Inserir" href="index.php?p=servico&s=inserir"><i class="ri-pencil-fill"></i></a></td>           
                <td><a class="atualizar" title="Atualizar" href="index.php?p=servico&s=atualizar&id=<?php echo $linha['idServico']?>"><i class="ri-loop-left-line"></i></a></td>
                <td><a class="ativar" title="Ativar" href="index.php?p=servico&s=ativar&id=<?php echo $linha['idServico']?>"><i class="ri-checkbox-circle-line"></i></a></td>
                <td><a class="desativar" title="Desativar" href="index.php?p=servico&s=desativar&id=<?php echo $linha['idServico']?>"><i class="ri-eye-off-line"></i></a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>

