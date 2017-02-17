<?php
include('session.php');
?>
<?php require_once 'config.php'; ?>
<?php 
	require_once('clientes/functions.php');
	add();
?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php if ($db) : ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Clientes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Dados básicos
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="cadastroCliente.php" method="post">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" class="form-control" name="customer['nome']">
                                            
                                            <label>Endereço</label>
                                            <input type="text" class="form-control" name="customer['endereco']">
                                            <p class="help-block">Formato: Rua, Endereco -- Número</p>
                                            
                                            <label>RG</label>
                                            <input type="text" class="form-control" name="customer['rg']">
                                            <p class="help-block">Apenas números</p>
                                            <label>CPF</label>
                                            <input type="text" class="form-control" name="customer['cpf']">
                                            <p class="help-block">Apenas números.</p>
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" name="customer['email']">
                                            
                                            <label>Telefone</label>
                                            <input type="text" class="form-control" name="customer['telefone']">
                                            <p class="help-block">Formato: (00) 00000-0000</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Interesses</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="1" name="customer['tarot']">Tarot
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                   <input type="checkbox" value="1" name="customer['cabala']">Kabbalah
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="1" name="customer['astrologia']">Astrologia
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="1" name="customer['umbanda']">Umbanda
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="1" name="customer['hermetismo']">Hermetismo
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="1" name="customer['reiki']">Reiki
                                                </label>
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
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
