//Script para la barra de opciones
//del administrador, al hacer click se
//ocultara o se mostrara la barra.
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      document.getElementById("bodyContent").style.width="100%";
    });
    
});