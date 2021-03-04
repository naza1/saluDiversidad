function eliminarPaciente(id, token){
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': token
    },
    url: '/paciente/' + id,
    method: 'DELETE',
    success: function(result) {
    // bla bla
    }
});
}