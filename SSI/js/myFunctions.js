function verificarSession() {
  $.ajax({
  	type: 'POST'
    ,dataType: 'json'
    ,url: 'session.php'
    ,async: true
    ,cache: false
    //,data: {args}
  }).done( function (data) {
    if( data.result == 0 ) {
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