const button_historico = document.getElementById('btn_modal')
const modal = document.querySelector('dialog')
const button_close = document.getElementById('btn_close')

button_close.onclick = function() {
    modal.close()
}

button_historico.onclick = function() {
    modal.showModal()
}

function logoff() {
    window.location.href = '../index.html';
}

const dados =
{
    nome: 'Alice', cpf: '12345678901', estadoCivil: 'Solteiro(a)', email: 'alice@example.com', telefone: '123456789', sexo: 'Feminino', nascimento: '01/01/2000', novaColuna: 'Valor1'
}

let nome_tabela = document.getElementById('Dado_1');
let cpf_tabela = document.getElementById('Dado_2');
let estado_tabela = document.getElementById('Dado_3');
let email_tabela = document.getElementById('Dado_4');
let telefone_tabela = document.getElementById('Dado_5');
let sexo_tabela = document.getElementById('Dado_6');
let nascimento_tabela = document.getElementById('Dado_7');

nome_tabela.textContent = dados.nome;
cpf_tabela.textContent = dados.cpf;
estado_tabela.textContent = dados.estadoCivil;
email_tabela.textContent = dados.email;
telefone_tabela.textContent = dados.telefone;
sexo_tabela.textContent = dados.sexo;
nascimento_tabela.textContent = dados.nascimento;