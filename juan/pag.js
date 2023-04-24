// seleciona o input pelo ID
var input = document.getElementById('cardnumber');

// adiciona um event listener para o evento "input"
input.addEventListener('input', function(e) {
  // obtém o valor atual do input
  var numeros = e.target.value.replace(/\D/g, '');
  
  // divide em grupos de 4
  var grupos = numeros.match(/.{1,4}/g);
  
  // se existir grupos, separa com espaço e atualiza o valor do input
  if (grupos) {
    e.target.value = grupos.join(' ');
  }
});
