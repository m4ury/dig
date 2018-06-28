$(document).ready(function() {
  $('#imc').focus(function() {
    var peso = $('#peso').val();
    var talla = $('#talla').val();
    var imc = peso / (talla * talla);
    var imcF = imc.toFixed(2);
    $('#imc').val(imcF);
  });
});