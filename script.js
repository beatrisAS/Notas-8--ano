// Função para carregar as notas via AJAX
function carregarNotas() {
    fetch('notas.php') // Faz uma requisição ao arquivo notas.php
        .then(response => response.text()) // Converte a resposta para texto
        .then(data => {
            document.getElementById('tabela-notas').innerHTML = data; // Insere os dados na tabela
        })
        .catch(error => console.error('Erro ao carregar as notas:', error));
}

// Carrega as notas quando a página é carregada
window.onload = carregarNotas;