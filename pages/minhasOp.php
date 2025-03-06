
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        width: 100%; /* A largura da tabela será 100% do contêiner pai */
        table-layout: fixed; /* Tabela de layout fixo */
    }

    td, th {
        word-wrap: break-word; /* Permite que o texto quebre a linha automaticamente */
        overflow-wrap: break-word; /* Garante a quebra de palavras longas */
        max-width: 200px; /* Ajuste a largura máxima conforme necessário */
        white-space: normal; /* Permite a quebra de linha do conteúdo */
    }
  </style>
</head>
<body>
    
    <!-- inicio da tabela --> 
  <div class="conteudo" id="conteudo-2">
    <div class="">
      <div class="relative overflow-x-auto">
        <table  class= "rtl:text-right text-gray-500 border-separate space-y-6 rtl:space-y-0">
          <!-- inicio do cabecalho da tabela -->
          <thead class="text-xs text-gray-700 uppercase bg-gray-300 ">
          <tr>
            <th scope="col" class="px-6 py-3">Operação</th>
            <th scope="col" class="px-6 py-3">Missão</th>
            <th scope="col" class="px-6 py-3">Estado</th>
            <th scope="col" class="px-6 py-3">Comando Militar de Área</th>
            <th scope="col" class="px-6 py-3">Região Militar</th>
            <th scope="col" class="px-6 py-3">Comando da Operação</th>
            <th scope="col" class="px-6 py-3">Comando Apoiado</th>
            <th scope="col" class="px-6 py-3">Inicio da Operação</th>
            <th scope="col" class="px-6 py-3">Fim da Operação</th> 
            <th scope="col" class="px-6 py-3">Completo</th>
            <th scope="col" class="px-6 py-3">Editar</th>
          </tr>
          </thead>
          <tbody>
          <?php
              $pesquisa = $mysqli->real_escape_string($nomeUsuario);
              $sql_code = "SELECT * 
                FROM operacao 
                WHERE operador LIKE 
                '%$pesquisa%'";

                $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
                
            if ($sql_query->num_rows == 0) {
          ?>
          <tr>
              <td colspan="11">Nenhuma Operação registrada por <?php echo $usuario ?>...</td>
          </tr>
          <?php
            } 
            else {
              while($dados = $sql_query->fetch_assoc()) {
          ?>
          <form action="#" method="post">
          <tr class=" bg-white border-b dark:bg-gray-800 ">
            <th scope="row" class="px-6 py-4 "><?php echo $dados['operacao']; ?></th>
            <td class="px-6 py-4"><?php echo $dados['missao']; ?></td>
            <td class="px-6 py-4"><?php echo $dados['estado']; ?></td>
            <td class="px-6 py-4"><?php echo $dados['cma']; ?></td>
            <td class="px-6 py-4"><?php echo $dados['rm']; ?></td>
            <td class="px-6 py-4"><?php echo $dados['comandoOp']; ?></td>
            <td class="px-6 py-4"><?php echo $dados['comandoApoio']; ?></td>
            <td class="px-6 py-4"><?php echo date_format(date_create_from_format('Y-m-d', $dados["inicioOp"]), 'd/m/Y'); ?></td>
            <td class="px-6 py-4"><?php echo date_format(date_create_from_format('Y-m-d', $dados["fimOp"]), 'd/m/Y'); ?></td>
            <td class="px-6 py-4"><a style="cursor: pointer;" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="abrirPesquisa(<?php echo $dados['opid']; ?>)" > Abrir </a> </td>
            <td class="px-6 py-4"><a style="cursor: pointer; " class="content-center font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="abrirEdicao(<?php echo $dados['opid']; ?>)" > Editar </a> </td>
          </tr>
          <?php
              }
            }
          ?>
          </form>
        </tbody>
      </div>
    </div>
  </div>

</body>
</html>

  