<?php
include('session.php');
?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php if ($db) : ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cadastro de Cursos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Dados básicos
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Nome do Curso</label>
                                        <input class="form-control">
                                        <label>Professor/Palestrante</label>
                                        <input class="form-control">
                                        <label>Quantidade de Vagas</label>
                                        <input class="form-control">
                                        <p class="help-block">Apenas números</p>
                                        <label>Valor do Curso</label>
                                        <input class="form-control">
                                        <label>Data do Curso</label>
                                        <input class="form-control">
                                        <div class="form-group">
                                            <label>Contrato</label>
                                            <textarea class="form-control" rows="10"></textarea>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    <button type="reset" class="btn btn-warning">Limpar</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->

                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
        </div>
    </div>
</div>


<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>

