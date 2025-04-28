<?php
include("acoes/config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table id="tabela-operacoes" class="display">
  <thead>
    <tr>
        <th style="width: 100px" >Operação</th>
        <th style="width: 120px">Missão</th>
        <th style="width: 100px">Estado</th>
        <th style="width: 200px">Comando Militar de Área</th>
        <th style="width: 120px">Região Militar</th>
        <th style="width: 180px">Comando da Operação</th>
        <th style="width: 150px">Comando Apoiado</th>
        <th style="width: 100px">Inicio</th>
        <th style="width: 100px">Fim</th> 
        <th >Açoes</th>
    </tr>
  </thead>
  <tbody>
            <?php
              $pesquisa = $mysqli->real_escape_string($nomeUsuario);
              $sql_code = "SELECT * FROM operacao WHERE operador LIKE '%$pesquisa%' ";
              $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error);  
              if ($sql_query->num_rows == 0) {
              ?>
              <tr>
                  <td colspan="11">Nenhuma Operação registrada por <?php echo $nomeUsuario ?>...</td>
              </tr>
              <?php
              } else {
                while($dados = $sql_query->fetch_assoc()) {
              ?>
                <tr>
                  <td class="col-limitada"><?php echo $dados['operacao']; ?></th>
                  <td class="col-limitada"><?php echo $dados['missao']; ?></td>
                  <td class="col-limitada"><?php echo $dados['estado']; ?></td>
                  <td class="col-limitada"><?php echo $dados['cma']; ?></td>
                  <td class="col-limitada"><?php echo $dados['rm']; ?></td>
                  <td class="col-limitada"><?php echo $dados['comandoOp']; ?></td>
                  <td class="col-limitada"><?php echo $dados['comandoApoio']; ?></td>
                  <?php
                    echo "<td>".date_format(date_create_from_format('Y-m-d', $dados["inicioOp"]), 'd/m/Y')."</td>"; 
                    echo "<td>".date_format(date_create_from_format('Y-m-d', $dados["fimOp"]), 'd/m/Y')."</td>";
                  ?>
                
                  <td class="btn-sm text-center">
                      <a href="#" onclick="Edicao(<?php echo $dados['opid']; ?>)" class='text-success mx-3 ' title="Editar">
                          <i class="bi bi-pencil-square fs-12"></i>
                      </a>
                      <a href="#" onclick="if(confirm('Tem certeza que deseja excluir?')) { Excluir(<?php echo $dados['opid']; ?>); } return false;" class='text-danger mx-3' title="Excluir">
                          <i class="bi bi-trash fs-12"></i>
                      </a>
                      <a href="#" onclick="Expandir(<?php echo $dados['opid']; ?>)" class='text-primary mx-3' title="Expandir">
                          <i class="bi bi-arrows-fullscreen fs-12"></i>
                      </a>
                  </td>
                </tr>
              <?php
                }
              }
              ?>
  </tbody>
</table>

    
</body>
</html>

<script>
  $(document).ready(function() {
    $('#tabela-operacoes').DataTable({
      pageLength: 5, // número de linhas por página
      lengthChange: false, // remove seletor "mostrar X entradas"
      language: {
        url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
      }
    });
  });
</script>

