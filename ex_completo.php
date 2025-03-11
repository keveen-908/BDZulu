<?php
include_once('acoes/config.php');
// Pega o ID da URL
$id = $_GET['id'];


?>

<DOCTYPE html>
<html> 
<head>
  
  <title>Colog</title>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  
  <link rel="shortcut icon" type="imagex/png" href="/img/colog.png">
  <style>
    #rodape {
      background-color: #f0f0f0;
      padding: 20px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
    #atual {
      color: #f7b600;
    }
   
    .conteudo {
      display: none;
    }
    
    .conteudo.ativo {
      display: block;
    }
  </style> 

</head>
<body class="bg-white dark:bg-gray-800">
  
  <!-- id da query sendo pesquisado -->
  <div class="vai sm:ml-64">
    <div class="relative overflow-x-auto  shadow-md sm:rounded-lg">
      <form action="/src/pdf/pdfCompleto.php" class="conteudo ativo" id="conteudo-1"  method="post">
        <input class="border-2 rounded-lg border-slate-800" name="id" value="<?php if(isset($id)) echo $id; ?>" placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Gerar PDF</button>
      </form>
       
      <!-- construcao da tabela para a exibicao -->
      <table  class= "w-full text-sm text-left rtl:text-right text-yellow-300 dark:text-yellow-300">
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-b border-gray-600 dark:text-yellow-400">
          <th scope="col" class="px-6 py-3">Operação</th>
          <th scope="col" class="px-6 py-3">Estado</th>
          <th scope="col" class="px-6 py-3">Missão</th>
          <th scope="col" class="px-6 py-3">Comando Militar de Área</th>
          <th scope="col" class="px-6 py-3">Região Militar</th>
          <th scope="col" class="px-6 py-3">Comando da Operação</th>
          <th scope="col" class="px-6 py-3">Comando Apoiado</th>
          <th scope="col" class="px-6 py-3">Inicio da Operação</th>
          <th scope="col" class="px-6 py-3">Fim da Operação</th> 
        </tr>
        <?php
          if (!isset($_GET['id'])) {
        ?>
        <tr>
          <td colspan="3">Digite algo para pesquisar...</td>
        </tr>
        <?php
          } 
          else {
            $pesquisa = $mysqli->real_escape_string($_GET['id']);
            $sql_code = "SELECT * 
                FROM operacao 
                WHERE opid LIKE '%$pesquisa%'";

            $sql_code2 = "SELECT * 
                FROM efetivo 
                WHERE eid LIKE '%$pesquisa%'";
            $sql_code3 = "SELECT * 
                FROM tipoOp 
                WHERE tid LIKE '%$pesquisa%'";
            $sql_code4 = "SELECT * 
                FROM recursos 
                WHERE rid LIKE '%$pesquisa%'";
            $sql_code5 = "SELECT * 
                FROM infos
                WHERE iid LIKE '%$pesquisa%'";
            $sql_code6 = "SELECT * 
                FROM anexos
                WHERE aid LIKE '%$pesquisa%'";

            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
            $sql_query2 = $mysqli->query($sql_code2) or die("ERRO ao consultar! " . $mysqli->error); 
            $sql_query3 = $mysqli->query($sql_code3) or die("ERRO ao consultar! " . $mysqli->error); 
            $sql_query4 = $mysqli->query($sql_code4) or die("ERRO ao consultar! " . $mysqli->error); 
            $sql_query5 = $mysqli->query($sql_code5) or die("ERRO ao consultar! " . $mysqli->error); 
            $sql_query6 = $mysqli->query($sql_code6) or die("ERRO ao consultar! " . $mysqli->error); 

            if ($sql_query->num_rows == 0) {
        ?>
        <tr>
          <td colspan="3">Nenhum resultado encontrado...</td>
        </tr>
        <?php
          } 
          else {
            while($dados = $sql_query->fetch_assoc()) {
              while ($dados2 = $sql_query2->fetch_assoc()) {
                while ($dados3 = $sql_query3->fetch_assoc()) {
                  while ($dados4 = $sql_query4->fetch_assoc()) {
                    while ($dados5 = $sql_query5->fetch_assoc()) {
                      while ($dados6 = $sql_query6->fetch_assoc()) {
        ?>
        <tr class="bg-gray-900 border-b border-gray-700 ">
          <th scope="row" class="px-6 py-4 font-medium text-yellow-300 whitespace-nowrap border border-slate-600"><?php echo $dados['operacao']; ?></th>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['estado']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['missao']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['cma']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['rm']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['comandoOp']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['comandoApoio']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['inicioOp']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['fimOp']; ?></td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-b border-gray-600 dark:text-yellow-400">
          <th scope="col" class="px-6 py-3">Participantes</th>
          <th scope="col" class="px-6 py-3">Participantes do Exército</th>
          <th scope="col" class="px-6 py-3">Participantes da Marinha</th>
          <th scope="col" class="px-6 py-3">Participantes da Força Aérea</th>
          <th scope="col" class="px-6 py-3">Participantes de Órgãos de Segurança Publica</th>
          <th scope="col" class="px-6 py-3">Participantes de outras Âgencias Governamentais</th>
          <th scope="col" class="px-6 py-3">Participantes de outras Âgencias Privadas</th>
          <th scope="col" class="px-6 py-3">Participantes de Organizações Não-Governamentais</th>
          <th scope="col" class="px-6 py-3">total de Participantes</th>
        </tr>
        <tr class="bg-gray-900 border-b border-gray-700">
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantes']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesEb']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesMb']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesFab']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesOs']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesGov']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesPv']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesCv']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesCv'] + $dados2['participantesPv']+ $dados2['participantesEb'] + $dados2['participantesMb'] + $dados2['participantesFab'] + $dados2['participantesOs'] + $dados2['participantesGov']; ?></td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 dark:text-yellow-400">
          <th class="px-6 py-4 ">Operação</th>
          <th class="px-6 py-4 " colspan="2">Tipo de ação ou apoio</th>
        </tr>
        <tr class="bg-gray-900 border-b border-gray-700">
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['tipoOp']; ?></td>
            <td class="px-6 py-4 border border-slate-600" colspan="2"><?php echo $dados3['acaoOuApoio']; ?></td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 dark:text-yellow-400">
          <th class="px-6 py-4 ">Transporte</th>
          <th class="px-6 py-4 ">Manutenção</th>
          <th class="px-6 py-4 ">Suprimento</th>
          <th class="px-6 py-4 ">Aviação</th>
        </tr>
        <tr class="bg-gray-900  border-gray-700">
            <td class="px-6 py-4 border border-slate-600 "><?php echo $dados3['transporte']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo $dados3['manutencao']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo $dados3['suprimento']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo $dados3['aviacao']; ?>   </td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 dark:text-yellow-400">
          <th class="px-6 py-4 ">Descrição das atividades de Transporte</th>
          <th class="px-6 py-4 ">Descrição das atividades de Manutenção</th>
          <th class="px-6 py-4 ">Descrição das atividades de Suprimento</th>
          <th class="px-6 py-4 ">Descrição das atividades de Aviação</th>
        </tr>
        <tr class="bg-gray-900 border-gray-700 text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 dark:text-yellow-400">
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['desTransporte']; ?></td>
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['desManutencao']; ?></td>
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['desSuprimento']; ?></td>
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['desAviacao']; ?></td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 dark:text-yellow-400">
          <th class="px-6 py-4 ">Recebidos:</th>
          <th class="px-6 py-4 ">Descentralizados:</th>
          <th class="px-6 py-4 ">Liquidados:</th>
          <th class="px-6 py-4 ">Devolvidos:</th>
        </tr>
        <tr class="bg-gray-900  border-gray-700 text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 dark:text-yellow-400" >
            <td class="px-6 py-4 border border-slate-600 "><?php echo "R$:". $dados4['recebidos']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo "R$:". $dados4['descentralizados']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo "R$:". $dados4['liquidados']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo "R$:". $dados4['devolvidos']; ?></td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 dark:text-yellow-400">
          <th class="px-6 py-4">Relatório Final</th>
          <th class="px-6 py-4">Relatório do Comando Logístico</th>
          <th class="px-6 py-4">Fotos</th>
          <th class="px-6 py-4">Outros documentos</th>
        </tr>
        <tr>
          <td style="color:gray-700;" class="px-6 py-4 border border-slate-600 "><a href="../../uploads/<?php echo $dados6['relatorioFinal'] ?>" target="_blank"><?php echo $dados6['relatorioFinal'] ?></a></td>
          <td style="color:gray-700;" class="px-6 py-4 border border-slate-600 "><a href="../../uploads/<?php echo $dados6['relatorioComando'] ?>" target="_blank"><?php echo $dados6['relatorioComando'] ?></a></td>
          <td style="color:gray-700;" class="px-6 py-4 border border-slate-600 "><a href="../../uploads/<?php echo $dados6['fotos'] ?>" target="_blank"><?php echo $dados6['fotos'] ?></a></td>
          <td style="color:gray-700;" class="px-6 py-4 border border-slate-600 "><a href="../../uploads/<?php echo $dados6['outrosDocumentos'] ?>" target="_blank"><?php echo $dados6['outrosDocumentos'] ?></a></td>
        </tr>
        <tr >
          <th class="text-xs text-white-400 uppercase bg-gray-800 border-gray-600 dark:text-white-400" colspan="9">Outras informações</th>
        </tr>
        <tr>
          <td class="px-6 py-4 border border-slate-600 "  colspan="9" rowspan="1" ><?php echo $dados5['outrasInfos'];?></td>
        </tr>
        <?php
                  }
                }
              }
            }
          }
        }
      }
    }
        ?>
      </table>
    </div>
  </div>

  <!-- script da navbar --> 
  <script src="/src/navbar.js"></script>

</body>
</html>  
