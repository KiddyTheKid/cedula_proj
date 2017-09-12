$(function() {
  $("#buscar").bind('submit',function() {
    var value = $('#str').val();
    var called = "data";
     $.post('php/funciones.php',{value:value}, function(data){
       $("#prueba").html(data);
     });
     $.post('php/funciones.php',{llamar:called}, function(admins){
       $("#administradores").html(admins);
     });
     return false;
  });
});
$(function() {
  $("#buscar_usuarios").bind('submit',function() {
    var value = $('#str').val();
     $.post('php/a_usuarios.php',{l_usrs:value}, function(data){
       $("#lista_usuarios").html(data);
     });
     return false;
  });
});
$(function() {
  $('#proag').on('click','button', function (){
    var id = $(this).attr("id");
    var op = $(this).attr("name");
    $.post('php/funciones.php',{ced:id, opcion:op}, function(data){
      document.getElementById('clickhere').click();
    });
    return false;
  });
});
