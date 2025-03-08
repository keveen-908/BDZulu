const INPUT_BUSCA = document.getElementById('input-busca');
const TABELA_OP = document.getElementById('tabela-operacoes');

INPUT_BUSCA.addEventListener('keyup', () => {
    let expressao = INPUT_BUSCA.value.toLowerCase();

    let linhas = TABELA_OP.getElementsByTagName('tr');

    for(let posicao in linhas) {
        if(true === isNaN(posicao)) {
            continue;
        }
        let conteudo_linha = linhas[posicao].innerHTML.toLowerCase();

        if(true === conteudo_linha.includes(expressao)) {
            linhas[posicao].style.display = '';
        }else{
            linhas[posicao].style.display = 'none';
        }

    }
});