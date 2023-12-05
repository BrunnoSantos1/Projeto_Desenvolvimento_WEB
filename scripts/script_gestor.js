const modal_historico = document.getElementById('modal_historico')
const modal_funcionaro = document.getElementById('modal_funcionario')
const modal_cadastro = document.getElementById('modal_cadastro')

const button_modal = document.getElementsByClassName('btn_modal')
const button_close = document.getElementsByClassName('btn_close')

function modal(type_modal) {
    if (type_modal == "historico") {
        modal_historico.showModal()
    }
    else if (type_modal == "cadastro") {
        modal_cadastro.showModal()
    }
    else {
        modal_funcionaro.showModal()
    }

}

function fecha(sec) {
    if (sec == 1) {
        modal_historico.close()
    }
    else if (sec == 2) {
        modal_funcionaro.close()
    } else {
        modal_cadastro.close()
    }
}


function logoff() {
    window.location.href = '../index.php';
}

// const dados =
// {
//     nome: 'Alice', cpf: '12345678901', estadoCivil: 'Solteiro(a)', email: 'alice@example.com', telefone: '123456789', sexo: 'Feminino', nascimento: '01/01/2000', novaColuna: 'Valor1'
// }

// let nome_tabela = document.getElementById('Dado_1');
// let cpf_tabela = document.getElementById('Dado_2');
// let estado_tabela = document.getElementById('Dado_3');
// let email_tabela = document.getElementById('Dado_4');
// let telefone_tabela = document.getElementById('Dado_5');
// let sexo_tabela = document.getElementById('Dado_6');
// let nascimento_tabela = document.getElementById('Dado_7');

// nome_tabela.textContent = dados.nome;
// cpf_tabela.textContent = dados.cpf;
// estado_tabela.textContent = dados.estadoCivil;
// email_tabela.textContent = dados.email;
// telefone_tabela.textContent = dados.telefone;
// sexo_tabela.textContent = dados.sexo;
// nascimento_tabela.textContent = dados.nascimento;