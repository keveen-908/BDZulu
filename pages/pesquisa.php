<div>
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                        <div class="d-inline">
                            <h4>Pesquise sua operação</h4>
                            <span>Use qualquer parâmetro para efetuar sua pesquisa</span>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        <!-- Page-header end -->
    </div>
</div>
<!--formulario de pesquisa-->
<div class="card-block">
    <h4 class="sub-title">Informações</h4>
    <form method="POST">     
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                placeholder="Nome da operação">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Estado (UF):</label>
            <div class="col-sm-10">
                <select name="select" class="form-control">
                    <option value="">Selecione o estado</option>
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                    <option value="Internacional">Internacional</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Missão:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                placeholder="Missão">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Comando Militar de Área:</label>
            <div class="col-sm-10">
                <select name="select" class="form-control">
                <option value="">Selecione o Comando Militar de Área</option>
                  <option value="Comando Militar da Amazônia">Comando Militar da Amazônia</option>
                  <option value="Comando Militar do Leste">Comando Militar do Leste</option>
                  <option value="Comando Militar do Planalto">Comando Militar do Planalto</option>
                  <option value="Comando Militar do Norte">Comando Militar do Norte</option>
                  <option value="Comando Militar do Nordeste">Comando Militar do Nordeste</option>
                  <option value="Comando Militar do Oeste">Comando Militar do Oeste</option>
                  <option value="Comando Militar do Sudeste">Comando Militar do Sudeste</option>
                  <option value="Comando Militar do Sul">Comando Militar do Sul</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Região Militar:</label>
            <div class="col-sm-10">
                <select name="select" class="form-control">
                    <option value=""> Selecione a Região Militar</option>
                    <option value="1ª região militar">1ª região militar</option>
                    <option value="2ª região militar">2ª região militar</option>
                    <option value="3ª região militar">3ª região militar</option>
                    <option value="4ª região militar">4ª região militar</option>
                    <option value="5ª região militar">5ª região militar</option>
                    <option value="6ª região militar">6ª região militar</option>
                    <option value="7ª região militar">7ª região militar</option>
                    <option value="8ª região militar">8ª região militar</option>
                    <option value="9ª região militar">9ª região militar</option>
                    <option value="10ª região militar">10ª região militar</option>
                    <option value="11ª região militar">11ª região militar</option>
                    <option value="12ª região militar">12ª região militar</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Comando da Operação</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                placeholder="Comando da operação">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Organização Apoiada</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                placeholder="Organização Apoiada">
            </div>
        </div>

        <div class="form-group row">
            <label for="ini" class="col-sm-2 col-form-label">Início da Operação:</label>
            <input class="form-control" type="date" id="ini" name="inicioOp" placeholder="inicio da operação">
        </div> 

        <div class="form-group row">
            <label for="ini" class="col-sm-2 col-form-label">Término da Operação:</label>
            <input class="form-control" type="date" id="" name="fimOp" placeholder="Término da operação">
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo de Operação:</label>
            <div class="col-sm-10">
                <select id="tipoOp" name="tipoOp" class="form-control">
                    <option value="">Selecione o tipo de operação</option>
                    <option value="Preparo">Preparo</option>
                    <option value="Emprego">Emprego</option>
                    <option value="Transporte">Transporte</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-success btn-square btn-block">Pesquisar</button>                           
    </form>
</div>


  <!--aba de pesquisa-->
<div class="Content sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <?php

      // Define os campos de pesquisa
      $campos = array('operacao', 'estado', 'missao', 'cma', 'rm', 'comandoOp', 'comandoApoio', 'tipoOp');

      $query = "SELECT * FROM operacao WHERE ";

      if (!empty($_POST['inicioOp']) && !empty($_POST['fimOp'])) {
        $data_inicial =  $_POST['inicioOp'];
        $data_final = $_POST['fimOp'];
        
        $query .= "inicioOp >= '".$data_inicial."' AND fimOp <= '".$data_final."'";
        
        if (!empty($_POST['operacao'])||!empty($_POST['estado'])||!empty($_POST['missao'])||!empty($_POST['cma'])||!empty($_POST['rm'])||!empty($_POST['comandoOp'])||!empty($_POST['comandoApoio'])) {
          foreach ($campos as $campo) {
          $query .= " AND $campo LIKE '%".$_POST[$campo]."%'";
          } 
        }
    } else {
        // Busca sem datas
        foreach ($campos as $campo) {
          if (isset($campo)){
            @$query .= "$campo LIKE '%".$_POST[$campo]."%' AND ";
          }
      }
      // Remove o último "OR"
      $query = substr($query, 0, -4);
    }

    //print_r($query);
    
      // Executa a consulta
      $result = $mysqli->query($query);
      // Exibe os resultados
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $ids[] = $row['opid'];
          }
      
      foreach ($ids as $id){
          $pesquisa = $mysqli->real_escape_string($id);
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
        
          while($dados = $sql_query->fetch_assoc()) {
            while ($dados2 = $sql_query2->fetch_assoc()) {
              while ($dados3 = $sql_query3->fetch_assoc()) {
                while ($dados4 = $sql_query4->fetch_assoc()) {
                  while ($dados5 = $sql_query5->fetch_assoc()) {
                    while ($dados6 = $sql_query6->fetch_assoc()) {
        
                    @$recursosLiquidados += $dados4['liquidados'];
                    @$recursosRecebidos += $dados4['recebidos'];
                    @$recursosDescentralizados += $dados4['descentralizados']; 
                    @$recursosDevolvidos += $dados4['devolvidos']; 
                    
        
                    @$efetivoEx += $dados2['participantesEb']; 
                    @$efetivoMb += $dados2['participantesMb']; 
                    @$efetivoFab += $dados2['participantesFab']; 
                    @$efetivoOutros += $dados2['participantesOs']; 
                    @$efetivoOutros += $dados2['participantesGov']; 
                    @$efetivoOutros += $dados2['participantesPv']; 
                    @$efetivoOutros += $dados2['participantesCv']; 
                    $operacoes[] = $dados['operacao'];
                    $comandoArea[] = $dados['cma'];
                    $tipoOp[] = $dados3['tipoOp'];
                    $acao[] = $dados3['desTransporte']. " ". $dados3['desManutencao']. " ". $dados3['desSuprimento']. " ". $dados3['desAviacao'];
                    }
                  }
                }
              }
            }
          }
        }

        // Fecha a conexão
       
        ?>
        <h1 class="block mb-2 font-size: 16px font-medium text-gray-900 dark:text-white" style="font-size: 36px;"> 1. Resumo:<h1>
        
<!--inicio tabela-->
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <!--tabela-->
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <!--colunas-->
        <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>              
                <th scope="col" class="px-6 py-3">
                    <?php echo "TOTAL OPERAÇÕES: ";?>
                </th>
                <th scope="col" class="px-6 py-3">
                    <?php echo count($ids);?>
                </th>  
            </tr>
        </thead>
        <!--linhas-->
        <tbody>
            <!--linha 1-->
            <tr class="bg-white text-xs border-b uppercase dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <!--titulo-->
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> 
                    <?php echo "Efetivo empregado: "; ?>
                </th>  
                <!--valores-->     
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  <?php 
                  $efetivoTotal = $efetivoEx+ $efetivoMb + $efetivoFab +$efetivoOutros ;
                  $efetivoFormatado = number_format($efetivoTotal,0,",","." );
                  echo  $efetivoFormatado;?>
                </th>
            </tr>
            
            <!--2 linha-->
            <tr class="bg-white text-xs border-b uppercase dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
              <!--titulo-->
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> 
                  <?php echo "Exécito: "; ?>
              </th>  
              <!--valores-->     
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php 
                $efetivoFormatado = number_format($efetivoEx,0,",","." );
                echo  $efetivoFormatado;?>
              </th>  
            </tr>
            <!--3 linha-->
            <tr class="bg-white border-b text-xs uppercase dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
               <!--titulo-->
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> 
                  <?php echo "Marinha: "; ?>
              </th>  
              <!--valores-->     
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php 
                $efetivoFormatado = number_format($efetivoMb,0,",","." );
                echo  $efetivoFormatado;?>
              </th> 
              
            </tr>
            <!--4 linha-->
            <tr class="bg-white border-b text-xs uppercase dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
               <!--titulo-->
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> 
                  <?php echo "Força Áerea: "; ?>
              </th>  
              <!--valores-->     
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php 
                $efetivoFormatado = number_format($efetivoFab,0,",","." );
                echo  $efetivoFormatado;?>
              </th> 
            </tr>
            <!--5 linha-->
            <tr class="bg-white border-b text-xs uppercase dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
              <!--titulo-->
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> 
                  <?php echo "Outras Forças: "; ?>
              </th>  
              <!--valores-->     
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php 
                $efetivoFormatado = number_format($efetivoOutros,0,",","." );
                echo  $efetivoFormatado;?>
              </th>   
            </tr>
        </tbody>
    </table>
</div>
<!--INICIO 2 TABELA-->
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <!--tabela-->
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <!--colunas-->
        <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>              
                <th scope="col" class="px-6 py-3">
                    <?php echo "Recursos Liquidados: ";?>
                </th>
                <th scope="col" class="px-6 py-3">
                  <?php 
                  $recursosFormatado = number_format($recursosLiquidados,0,",","." );
                  echo  $recursosFormatado;?>
                </th>  
            </tr>
        </thead>
        <!--linhas-->
        <tbody>
            <!--linha 1-->
            <tr class="bg-white text-xs border-b uppercase dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <!--titulo-->
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> 
                    <?php echo "RECURSOS RECEBIDOS: "; ?>
                </th>  
                <!--valores-->     
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  <?php 
                  $efetivoFormatado = number_format($recursosRecebidos,0,",","." );
                  echo  $efetivoFormatado;?>
                </th>
            </tr>
            
            <!--2 linha-->
            <tr class="bg-white text-xs border-b uppercase dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
              <!--titulo-->
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> 
                  <?php echo "RECURSOS DEVOLVIDOS: "; ?>
              </th>  
              <!--valores-->     
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php 
                $efetivoFormatado = number_format($recursosDevolvidos,0,",","." );
                echo  $efetivoFormatado;?>
              </th>  
            </tr>
            <!--3 linha-->
            <tr class="bg-white border-b text-xs uppercase dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
               <!--titulo-->
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> 
                  <?php echo "Recursos Descentralizados: "; ?>
              </th>  
              <!--valores-->     
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php 
                $efetivoFormatado = number_format( $recursosDescentralizados,0,",","." );
                echo  $efetivoFormatado;?>
              </th> 
        
            </tr>
           
        </tbody>
    </table>
</div>

<h1 class="block mb-2 font-size: 16px font-medium text-gray-900 dark:text-white" style="font-size: 36px;"> 2. Operações Relacionadas:<h1>

<!--inicio tabela de pesquisa-->
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <!--inicio tabela de pesquisa-->
  <table class="w-full text-left rtl:text-right text-gray-500 dark:text-gray-400">
  <!-- inicio do cabecalho da tabela -->
    <tr class="uppercase">
      <th scope="col" class="px-6 py-3">
      Operação
      </th>
      <th scope="col" class="px-6 py-3">
      Missão
      </th>
      <th scope="col" class="px-6 py-3">
      Estado
      </th>
      <th scope="col" class="px-6 py-3">
        Comando Militar de Área
      </th>
      <th scope="col" class="px-6 py-3">
      Região Militar
      </th>
      <th scope="col" class="px-6 py-3">
      Comando da Operação
      </th>
      <th scope="col" class="px-6 py-3">
      Comando Apoiado
      </th>
      <th scope="col" class="px-6 py-3">
      Inicio da Operação
      </th>
      <th scope="col" class="px-6 py-3">
      Fim da Operação
      </th>
      <th scope="col" class="px-6 py-3">
      Completo
      </th>
      <th scope="col" class="px-6 py-3">
      Editar
      </th>
    </tr>
  <?php
    foreach ($ids as $id){
    $pesquisa = $mysqli->real_escape_string($id);
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
        $sql_code7 = "SELECT * 
          FROM usuario 
          WHERE usuario ='$usuario' and adm ='administrador'";

        $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query2 = $mysqli->query($sql_code2) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query3 = $mysqli->query($sql_code3) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query4 = $mysqli->query($sql_code4) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query5 = $mysqli->query($sql_code5) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query6 = $mysqli->query($sql_code6) or die("ERRO ao consultar! " . $mysqli->error); 
        while($dados = $sql_query->fetch_assoc()) {
          while ($dados2 = $sql_query2->fetch_assoc()) {
            while ($dados3 = $sql_query3->fetch_assoc()) {
              while ($dados4 = $sql_query4->fetch_assoc()) {
                while ($dados5 = $sql_query5->fetch_assoc()) {
                  while ($dados6 = $sql_query6->fetch_assoc()) {
    ?>

    <form action="/src/pdf/gerar_pdf.php" method="post">
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
        <?php
          foreach ($ids as $chave => $valor) { 
        ?>
        <input type="hidden" name="ids[<?= $chave ?>]" value="<?= $valor ?>">
        <?php } ?>

          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?php echo $dados['operacao']; ?></th>
          <td class="px-6 py-4"><?php echo $dados['missao']; ?></td>
          <td class="px-6 py-4"><?php echo $dados['estado']; ?></td>
          <td class="px-6 py-4"><?php echo $dados['cma']; ?></td>
          <td class="px-6 py-4"><?php echo $dados['rm']; ?></td>
          <td class="px-6 py-4"><?php echo $dados['comandoOp']; ?></td>
          <td class="px-6 py-4"><?php echo $dados['comandoApoio']; ?></td>
          <td class="px-6 py-4"><?php echo date_format(date_create_from_format('Y-m-d', $dados["inicioOp"]), 'd/m/Y'); ?></td>
          <td class="px-6 py-4"><?php echo date_format(date_create_from_format('Y-m-d', $dados["fimOp"]), 'd/m/Y'); ?></td>
          <td class="px-6 py-4"><a style="cursor: pointer;" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="abrirPesquisa(<?php echo $dados['opid']; ?>)" > Abrir </a> </td>
          <td class="px-6 py-4"><a style="cursor: pointer; " class="" onclick="abrirEdicao(<?php echo $dados['opid']; ?>)" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg> </a> </td>
      </tr>
            <?php
              }
            }
          }
        }
      }
    }
  }

          $mysqli->close();
          ?>
          <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Gerar PDF</button>
          
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 inline-flex items-center focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-1 text-center me-1 mb-1 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800" type="button"> Selecione os campos <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="operacao" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="operacao">
                        <label for="operacao" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Operação</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="efetivo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="efetivo">
                        <label for="efetivo" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Efetivo</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="tipoop" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="tipoop">
                        <label for="tipoop" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tipos de Operações</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="recurso" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="recurso">
                        <label for="recurso" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recursos</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="resumo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="resumo">
                        <label for="resumo" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Resumo</label>
                    </div>
                </li>
                </ul>
            </div>

          </form>
          <?php
          }else {
            echo "Nenhum resultado encontrado.";
          }
          ?>

          <script src="/src/pdf.js"></script>

          
          <!-- script da pesquisa pelo id da query --> 

          <script>
        function abrirPesquisa(id) {
          window.open('/app/pesquisa/completo.php?id=' + id, '_blank');
        }
        function abrirEdicao(id) {
          window.open('/app/insercao/update.php?id=' + id, '_blank');
        }

      </script>
      </table>
</div>

