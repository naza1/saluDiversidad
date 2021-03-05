function eliminarPaciente(id, token){
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': token
    },
    url: '/paciente/' + id,
    type: 'post',
    data:{
      "_method": "delete"
    },
    success: function(result) {
      window.location.replace("/paciente");
    }
});
}

function editarPaciente(id, token){
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': token
    },
    url: '/paciente/' + id,
    method: 'GET',
    // data:{
    //   "_method": "PUT"
    // },
    success: function(result) {
    }
});
}