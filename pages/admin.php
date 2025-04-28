<?php



?>
<DOCTYPE html>
<html> 
<head>
  <!--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">-->
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>
  
  <title>Administrador</title>
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
<body class="">

  <!-- inicio da tabela "USUARIO" -->        
  <div class="conteudo ativo" id="conteudo-2">

  <div class="">
  <div class="card-block table-border-style">
  
  <form action="/acoes/permissao.php" method="post">

    <label for="operacao" class="block mb-2 text-sm font-medium text-gray-900 ">Insira o ID:</label>
    <input type="text" name="uid" value="" placeholder="Insira o ID" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/6 p-2  ">
    <br>
    <label for="" class="block mb-2 text-sm font-medium text-gray-900 ">Cargos:</label>
    <input type="submit" name="administrador" value="Administrador" class="w-1/7 text-white bg-red-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"/>
    <input type="submit" name="gerente" value="Gerente" class="w-1/7 text-white bg-red-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"/>
    <input type="submit" name="on" value="Usuario" class="w-1/7 text-white bg-red-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"/> <br><br>
    <label for="" class="block mb-2 text-sm font-medium text-gray-900 ">Funções:</label>
    <input type="submit" name="Preparo" value="Preparo" class="w-1/7 text-white bg-red-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"/>
    <input type="submit" name="Emprego" value="Emprego" class="w-1/7 text-white bg-red-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"/>
    <input type="submit" name="Transporte" value="Transporte" class="w-1/7 text-white bg-red-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"/>
    <input type="submit" name="Missao_de_Paz" value="Missão de Paz" class="w-1/7 text-white bg-red-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"/>
    <input type="submit" name="Remover" value="Remover" class="w-1/7 text-white bg-red-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"/>
    <br>
    <br>
  </form>
  
  </div>
  </div>

    <!-- Page-body start -->
    <div class="page-body">
        <!-- Basic table card start -->
        <div class="card">
            <div class="card-block table-border-style">
                <div class="table-responsive">
                
                <input type="text" class="form-control" id="input-busca"  placeholder="Pesquisar Operação" >

                <ul id="resultados"></ul>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                $(document).ready(function(){
                    $("#form-pesquisa").submit(function(event){
                        event.preventDefault(); // Evita o redirecionamento da página

                        var busca = $("#buscar").val();
                        
                        $.ajax({
                            type: "POST",
                            url: "/pesquisaAdm.php",
                            data: { buscar: busca },
                            success: function(response) {
                                $("#resultados").html(response);
                            }
                        });
                    });
                });
                </script>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>POSTO / GRADUAÇÃO</th>
                            <th>NOME</th>
                            <th>CARGO</th>
                            <th>FUNÇÃO</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-operacoes">
                        <?php
                        $sql_code = "SELECT * FROM usuarios";
                        $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
                        while($dados = $sql_query->fetch_assoc()) { 
                            echo "<tr>";
                            echo "<td>".$dados['uid']."</td>";
                            echo "<td>".$dados['pg']."</td>";
                            echo "<td>".$dados['nome']."</td>";
                            echo "<td>".$dados['adm']."</td>";
                            echo "<td>".$dados['funcao']."</td>";
                        }
                    ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

      <!-- inicio da tabela --> 
  <div class="conteudo" id="conteudo-3">
    <div class="sm:ml-64">
      <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">        
          <table  class= "w-full text-center border border-slate-600">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">  
            <tr>
              <th scope="col" class="px-6 py-3">Usuário </th>
              <th scope="col" class="px-6 py-3">Nome da Operação</th>
              <th scope="col" class="px-6 py-3">Horário da inserção</th>
            </tr>
          </thead>
          <tbody class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <?php 
          
          $sql_code = "SELECT * 
              FROM logins ORDER BY data DESC";
          $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
          while($dados = $sql_query->fetch_assoc()) {
            ?>
          <tr class="bg-white text-black border-b upper case dark:bg-gray-800 dark:border-gray-700 border-gray-200 dark:text-white">
            <th scope="row" class="px-6 py-4"><?php echo $dados['nome'] ?></th>
            <td class="px-6 py-4"><?php echo $dados['operacao'] ?></td>
            <td class="px-6 py-4"><?php echo date_format(date_create_from_format('Y-m-d H:i:s', $dados["data"]), 'd/m/Y H:i:s'); ?></td>
          </tr>
            <?php
          }

          ?>
          </tbody>    
        </table>
      </div>
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
</body>
</html>  
