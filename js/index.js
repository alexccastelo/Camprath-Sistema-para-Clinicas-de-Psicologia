var numeroPaciente = 0;
var numeroAtual = 0;
var botaoChamada = document.getElementById ("botaoChamada");
var display = document.getElementById ("numeroChamada");
var numeroAtenderSpan = document.getElementById("numeroAtender");


 // Adicione um evento de clique ao botão
 botaoChamada.addEventListener("click", function() {
        numeroPaciente++;
        display.innerHTML = numeroPaciente;

    // Obtenha o número atual do span
    var numeroAtual = parseInt(numeroAtenderSpan.textContent);

    // Verifique se o número atual é maior que zero
    if (numeroAtual > 0) {
        // Subtrai 1 do número atual e atualiza o span
        numeroAtenderSpan.textContent = (numeroAtual - 1).toString();
    }
});



