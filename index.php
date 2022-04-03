<?php
    //Conexão com o servidor sql
    include("conexao.php");

    //Consulta Tabela "pessoas"
    $consulta_pessoas = "SELECT * FROM pessoas";
    $con_pessoas = $conectar->query($consulta_pessoas) or die ($conectar->error);

    //Consulta Tabela "enderecos"
    $consulta_enderecos = "SELECT * FROM enderecos";
    $con_enderecos = $conectar->query($consulta_enderecos) or die ($conectar->error);

    //Consulta Tabela "contato"
    $consulta_contato = "SELECT * FROM contato";
    $con_contato = $conectar->query($consulta_contato) or die ($conectar->error);

    //Consulta Tabela "contatos"
    $consulta_contatos = "SELECT * FROM contatos";
    $con_contatos = $conectar->query($consulta_contatos) or die ($conectar->error);
?>

<html>
<head>

    <meta charset="UTF-8">
    <title>Cadastro</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <!-- Pessoas cadastradas -->
    <div class="container-fluid">
        <section>
            <h3 style="text-align:center;">
                <span>Pessoas Cadastradas</span>
            </h3>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <div class="row margin-bottom-20">
                        <div class="col-md-12 text-right">
                            <a href="form_cadastro.php" title="Novo cadastro" id ="btn-novo" class="btn btn-success"><i class="fa fa-plus-circle"></i> Adicionar</a>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th class="text-center">Nome</th>
                        <th class="text-center">CPF</th>
                        <th class="text-center">RG</th>
                        <th class="text-center">Data de Nascimento</th>
                        <th class="text-center">Salário</th>
                        <th class="text-center">Contato</th>
                        <th class="text-center">Endereço</th>
                        <th class="text-center">Número</th>
                        <th class="text-center">Cidade</th>
                        <th class="text-center">Complemento</th>
                    </tr>
                </thead>


                <?php
                    while(
                        $dado_pessoas = $con_pessoas->fetch_array() and 
                        $dado_enderecos = $con_enderecos->fetch_array() and 
                        $dado_contato = $con_contato->fetch_array() and 
                        $dado_contatos = $con_contatos->fetch_array() ) 
                        { 
                ?>

                    <tbody>
                    
                        <tr>
                            <td class="text-center">
                                <?php
                                    // --- Exibe o Nome + Sobrenome ---       
                                    echo $dado_pessoas["nome"];
                                ?>
                            </td>
                            
                            <td class="text-center">
                                <?php
                                    // --- Exibe o CPF ---           
                                    echo $dado_pessoas["cpf"];
                                ?>
                            </td>
                            
                            <td class="text-center">
                                <?php
                                    // --- Exibe o RG ---          
                                    echo $dado_pessoas["rg"];
                                ?>
                            </td>

                            <td class="text-center">
                                <?php
                                    // --- Exibe a Data de Nascimento ---           
                                    echo date('d/m/Y', strtotime ($dado_pessoas["data_nascimento"]));
                                ?>
                            </td>

                            <td class="text-center">
                                <?php
                                    // --- Exibe o salário  ---          
                                    echo $dado_pessoas["salario"];
                                ?>
                            </td>

                            <td class="text-center">
                                <?php
                                    // --- Exibe o Número de Contato  ---          
                                    echo $dado_contato["contato"];
                                ?>
                            </td>

                            <td class="text-center">
                                <?php
                                    // --- Exibe o Endereço  ---          
                                    echo $dado_enderecos["endereco"];
                                ?>
                            </td>

                            <td class="text-center">
                                <?php
                                    // --- Exibe o Número do endereço  ---          
                                    echo $dado_enderecos["numero"];
                                ?>
                            </td>

                            <td class="text-center">
                                <?php
                                    // --- Exibe a Cidade  ---           
                                    echo $dado_contatos["cidade"];
                                ?>
                            </td>

                            <td class="text-center">
                                <?php
                                    // --- Exibe o Complemento  ---                                          
                                    echo $dado_enderecos["complemento"];
                                ?>
                            </td>
                        </tr>                        
                    
                    </tbody>

                <?php } ?> 
            
            
            </table>

        </section>
    </div>

</body>
</html>