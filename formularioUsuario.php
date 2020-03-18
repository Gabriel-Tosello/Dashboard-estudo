<?php

include "menu.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="ISO 8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-1">
                        <h3 class="mb-0">Cadastro de usuário</h3>
                    </div>

                    <div class="container mt-2">

                        <!-- <form>
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tipo de pagamento</label>
                                        <input class="form-control" name="pagamento" type="text" placeholder="Informe um tipo de pagamento" id="example-text-input" required>
                                    </div>
                                </div>
                            </div>
                        </form> -->

                        <form>
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="form-control-label">Nome</label>
                                        <input class="form-control" name="nome" type="text" placeholder="Nome completo" required autofocus>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="form-control-label">Nível do Usuário</label>
                                        <select class="form-control" name="nivel">
                                            <option>Gerente</option>
                                            <option>Vendedor</option>
                                            <option>Administrador</option>
                                            <option>Recepcionista</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="form-control-label">Usuário</label>
                                        <input type="text" name="usuario" class="form-control" placeholder="Usuário sem espaços">
                                    </div>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="form-control-label">Senha</label>
                                        <input type="passaword" name="senha" class="form-control" placeholder="Digite sua senha">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="form-control-label">E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="Digite seu email">
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                    <div class="card-footer py-4">
                        <div style="text-align: right">
                            <a href="#" class="btn btn-primary" role="button">Cadastrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <?php

    include "rodape.php";

    ?>

</body>

</html>