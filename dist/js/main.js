$(document).ready(function(){
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  }); 

    /**
 		* Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 	*/
$(document).ready(function(){
		$('#delete-modal').on('show.bs.modal', function (event) {
		  
		  var button = $(event.relatedTarget);
		  var id = button.data('customer');
		  
		  var modal = $(this);
		  modal.find('.modal-title').text('Excluir Cliente #' + id);
		  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
		})
});
		/**
 		* Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 	*/
$(document).ready(function(){
		$('#delete-modal-curso').on('show.bs.modal', function (event) {
		  
		  var button = $(event.relatedTarget);
		  var id = button.data('customer');
		  
		  var modal = $(this);
		  modal.find('.modal-title').text('Excluir Curso #' + id);
		  modal.find('#confirm').attr('href', 'deleteCurso.php?id=' + id);
		})
});
$(document).ready(function(){
		$('#delete-modal-participante').on('show.bs.modal', function (event) {
		  
		  var button = $(event.relatedTarget);
		  var id = button.data('customer');
		  var idCurso = button.data('curso');
		  
		  var modal = $(this);
		  modal.find('.modal-title').text('Excluir Participante #' + id);
		  modal.find('#confirm').attr('href', 'deleteParticipante.php?id=' + id + "&idCurso=" + idCurso);
		})
});


$(document).ready(function(){
	  $('.nome').mask('00/00/0000');
});