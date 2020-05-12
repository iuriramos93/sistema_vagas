<head>
    <title>Registro</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/assets/css/matrix-login.css" />
    <link href="/assets/css/font-awesome.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script>
        $(document).ready(function() {

            $.post("jquery/selarea.php", {}).done(function(dados) {
                $("#sel_area").html(dados);
            });

        })
        function confirmacao(){
            return confirm('Deseja Continuar?');
        }
        function alerta(){
            alert('Gravado com Sucesso');
        }
    </script>



</head>

<body>
    <div id="loginbox">
        <form id="loginform" class="form-vertical" action="/autentica/registra.php" method="POST">
            <div class="control-group normal_text">
                <h3><img src="/assets/img/logo_login2.png" alt="Logo" /></h3>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="email" placeholder="Email" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="nome" placeholder="Nome" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="senha" placeholder="Senha" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="confirma_senha" placeholder="Confirmar Senha" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-paste"></i></span><select name="sel_area" id="sel_area">

                        </select>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-paste"></i></span><select name="sel_tipo" id="sel_tipo">
                            <option value=""selected>Selecione Tipo</option>
                            <option value="1">Candidato</option>
                            <option value="2">Empresa</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-left"><a href="/login" class="flip-link btn btn-info" id="to-recover">Login</a></span>
                <span class="pull-right"><button type="submit" class="btn btn-success" onclick="return confirmacao(),alerta()" /> Registrar</button></span>
            </div>
        </form>


        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/matrix.login.js"></script>
</body>