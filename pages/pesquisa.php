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
