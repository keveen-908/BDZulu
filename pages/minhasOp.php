
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .col-limitada {
            max-width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #tabela-operacoes th {
            background-color: #007bff; /* Cor de fundo azul */
            color: #fff;               /* Cor do texto branco */
            text-align: center;        /* Alinhar o texto ao centro */
            font-weight: bold;         /* Deixar o texto em negrito */
        }

        table td {
            text-align: center;        /* Alinhar as células ao centro */
        }

        .btn-sm {
            font-size: 14px;
            padding: 3px 8px;
        }

        .text-center {
            text-align: center;
        }
  </style>
</head>
<body>
<div class="-content">
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        
                                        <i class="ti-save bg-c-green"></i>
                                        <div class="d-inline">
                                            <h4>Operações Registradas por <?php echo $pg." ".$nomeUsuario?></h4>
                                            <span>Aqui você pode acessar todas operações feitas por você.</span>
                                            
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <!-- Page-header end -->
                    </div>
                </div>
            </div>
        </div>
    <!-- inicio da tabela --> 
    <div class="col-md">
      <div class="card widget-card-9 table-bordered">
        
       

        <input type="text" class="form-control" id="input-busca"  placeholder="Pesquisar Operação" >
        
        <table class="table table-hover table-bordered" >
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
            <tbody id="tabela-operacoes">

              <?php
              $pesquisa = $mysqli->real_escape_string($nomeUsuario);
              $sql_code = "SELECT * FROM operacao WHERE operador LIKE '%$pesquisa%'";
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
      </div>
    </div>

      <!--FAZ BUSCA NAS PESQUISAS -->
  <script>
      const inputBusca = document.getElementById('input-busca');
      const tabelaOperacoes = document.getElementById('tabela-operacoes');

      inputBusca.addEventListener('keyup', () => {
          let valorBusca = inputBusca.value.toLowerCase();
          let linhas = tabelaOperacoes.getElementsByTagName('tr');

          for (let linha of linhas) {
              let conteudoLinha = linha.innerText.toLowerCase();

              if (conteudoLinha.includes(valorBusca)) {
                  linha.style.display = ''; // mostra
              } else {
                  linha.style.display = 'none'; // esconde
              }
          }
      });
  </script>

  <script>
      function Expandir(id) {
        window.open('pages/relatorio.php?id=' + id, '_blank');
      }
      function Edicao(id) {
        window.open('pages/editar_Op.php?id=' + id, '_blank');
      }
      function Excluir(id) {
        window.open('acoes/acao.php?acao=excluir&id=' + id);
      }
  </script>
  </body>
  </html>
