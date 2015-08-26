$(document).ready(function() {
  $("#cerrarSession").click(cerrarSession);
});
function verificarSession() {
  $.ajax({
  	type: 'POST'
    ,dataType: 'json'
    ,url: 'session.php'
    ,async: true
    ,cache: false
    //,data: {args}
  }).done( function (data) {
    if( data.result == 1 ) {
      $("#usuarioNombre").html(data.usuario);
    }else {
      document.location.href="../ssi";
    }
  });
}
function cerrarSession() {
  $.ajax({
    type: 'POST'
    //,dataType: 'json'
    ,url: 'session_close.php'
    ,async: false
    ,cache: false
    //,data: {args}
  }).done( function () {
    document.location.href="../ssi";
  });
}