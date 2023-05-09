setTimeout(function() {
    document.querySelector('.c-loader').classList.add('hide');
  }, 10000);

  setTimeout(function() {
    alert('Compra realizada com sucesso!');
  }, 10000);
  

  function redirecionar() {
    window.location.href = "final_compra.html";
  }