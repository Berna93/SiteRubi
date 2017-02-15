
<!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    /**
 		* Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 	*/
		$('#delete-modal').on('show.bs.modal', function (event) {
		  
		  var button = $(event.relatedTarget);
		  var id = button.data('customer');
		  
		  var modal = $(this);
		  modal.find('.modal-title').text('Excluir Cliente #' + id);
		  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
		})

		/**
 		* Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 	*/
		$('#delete-modal-curso').on('show.bs.modal', function (event) {
		  
		  var button = $(event.relatedTarget);
		  var id = button.data('customer');
		  
		  var modal = $(this);
		  modal.find('.modal-title').text('Excluir Curso #' + id);
		  modal.find('#confirm').attr('href', 'deleteCurso.php?id=' + id);
		})
	
	
</script>

</body>

</html>