<?php
include('session.php');
?>
<?php require_once 'config.php'; ?>

<?php
require_once('clientes/functions.php');
edit();

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

        <div>
            <br><br><br>

            <?php if (!empty($_SESSION['message'])) : ?>
                <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $_SESSION['message']; ?>
                </div>

            <?php endif; ?>

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
                                <form role="form" action="edicaoCliente.php?id=<?php echo $customer['id']; ?>" data-toggle="validator" method="post">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" name="customer['nome']" value="<?php echo $customer['nome']; ?>" data-error="Por favor, informe um nome válido." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                 <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" class="form-control" name="customer['endereco']" value="<?php echo $customer['endereco']; ?>" data-error="Por favor, informe um endereço válido."  required>
                                    <div class="help-block with-errors"></div>

                                </div>
                                <div class="form-group">
                                    <label>RG</label>
                                    <input type="text" class="form-control" name="customer['rg']" value="<?php echo $customer['rg']; ?>" data-error="Por favor, informe um RG válido."  data-mask="00.000.000-0" required>
                                    <div class="help-block with-errors"></div>
                                    <p class="help-block">Apenas números</p>
                                </div>
                                <div class="form-group">
                                    <label>CPF</label>
                                    <input type="text" class="form-control" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>" data-error="Por favor, informe um CPF válido"  data-mask="000.000.000-00" required>
                                    <div class="help-block with-errors"></div>
                                    <p class="help-block">Apenas números.</p>
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" name="customer['email']" value="<?php echo $customer['email']; ?>" placeholder="Digite um e-mail válido..." data-error="Formato de email incorreto."  required>
                                    <p class="help-block">Por exemplo: email@email.com</p>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>Telefone</label>

                                    <input type="text" class="form-control" name="customer['telefone']" value="<?php echo $customer['telefone']; ?>" data-error="Por favor, informe um telefone válido."  data-mask="(00) 00000-0000" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label>Interesses</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" <?php if ($customer['tarot'] == 1) echo "checked='checked'"; ?> value="1" name="customer['tarot']" >Tarot
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                           <input type="checkbox" <?php if ($customer['cabala'] == 1) echo "checked='checked'"; ?> value="1" name="customer['cabala']">Kabbalah
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                    <label>
                                        <input type="checkbox" <?php if ($customer['astrologia'] == 1) echo "checked='checked'"; ?> value="1" name="customer['astrologia']">Astrologia
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" <?php if ($customer['umbanda'] == 1) echo "checked='checked'"; ?> value="1" name="customer['umbanda']">Umbanda
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" <?php if ($customer['hermetismo'] == 1) echo "checked='checked'"; ?> value="1" name="customer['hermetismo']">Hermetismo
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" <?php if ($customer['reiki'] == 1) echo "checked='checked'"; ?> value="1" name="customer['reiki']">Reiki
                                    </label>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary">Atualizar</button>
                            <button type="reset" class="btn btn-warning">Limpar</button>

                            <a href="#" class="btn btn-danger <?php if ($_SESSION['usertype']!='admin') echo "disabled"; ?>" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
                                <i class="fa fa-trash"></i> Excluir
                            </a>

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
<?php include('clientes/modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>

