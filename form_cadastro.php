<html>
<head>

    <meta charset="UTF-8">
    <title>Cadastro</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <!-- Formlário de Cadastro -->
    <section class="container">
        <div class="box">
            <div class="box-header">
                <div class="box-title">
                    <h2 class="text-center">Cadastrar Pessoa</h2>
                </div><hr />
                <div class="box-body">
                    <form action="add_pessoas.php" method="POST">
                        <div class="row">

                            <div class="col-md-4">
                                <label for="nome">Nome:</label>
                                <input class="form-control" id="nome" name="nome" type="text" required placeholder="Digite Seu Nome e Sobrenome" autofocus>                            
                            </div>
                            
                            <div class="col-md-2">
                                <label for="rg">RG:</label>
                                <input class="form-control" id="rg" name="rg" type="text" pattern="[0-9]{3}.[0-9]{2}.[0-9]{2}-[0-9]{1}" required placeholder="XXX.XX.XX-X" autofocus>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="cpf">CPF:</label>
                                <input class="form-control" id="cpf" name="cpf" type="text" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" required placeholder="XXX.XXX.XXX-XX" autofocus>
                            </div>

                            <div class="col-md-2">
                                <label for="data_nasc">Data de Nascimento:</label>
                                <input class="form-control" id="data_nasc" name="data_nasc" type="date" required placeholder="" autofocus>
                            </div>

                            <div class="col-md-2">
                                <label for="contato">Número de Contato:</label>
                                <input class="form-control" id="contato" name="contato" type="tel" required placeholder="(XX)XXXX-XXXX" autofocus>
                            </div>

                            <div class="col-md-3">
                                <label for="salario">Salário:</label>
                                <input class="form-control" id="salario" name="salario" type="number" required placeholder="Digite Seu Salário" autofocus>
                            </div>

                            <div class="col-md-8">
                                <label for="endereco">Endereço:</label>
                                <input class="form-control" id="endereco" name="endereco" type="text" required placeholder="Digite Seu Endereço" autofocus>
                            </div>

                            <div class="col-md-1">
                                <label for="numero">Número:</label>
                                <input class="form-control" id="numero" name="numero" type="number" required placeholder="" autofocus>
                            </div>

                            <div class="col-md-4">
                                <label for="cidade">Cidade:</label>
                                <input class="form-control" id="cidade" name="cidade" type="text" required placeholder="Digite Sua Cidade" autofocus>
                            </div>

                            <div class="col-md-4">
                                <label for="complemento">Complemento:</label>
                                <input class="form-control" id="complemento" name="complemento" type="text" required placeholder="Digite o Complemento" autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col text-right">
                                <a href="index.php" type="reset" class="btn btn-danger">Cancelar</a>
                                <button type="submit" name="confirm" class="btn btn-success">Confirmar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>