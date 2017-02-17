<?php include(CONFIGPATH); ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php if ($db) : ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detalhes do curso</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Astrologia Hermética I
                </div>
                <!-- /.panel-heading -->
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
                                    <label>Adicionar Participante</label>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <br/>
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Participante</th>
                                                    <th>Situação Financeira</th>
                                                    <th>Excluir Participante</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Julia Pestana</td>
                                                    <td>Pago</td>
                                                    <td class="center"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i>
                                                    </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Edivaldo Marchini Jr</td>
                                                    <td>Aguardando Pagamento</td>
                                                    <td class="center"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i>
                                                    </button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Matheus Bernardelli</td>
                                                    <td>Pago</td>
                                                    <td class="center"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i>
                                                    </button></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                        <!-- /.table-responsive -->
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                                <button type="reset" class="btn btn-warning">Limpar</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.col-lg-6 (nested) -->



                </div>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
