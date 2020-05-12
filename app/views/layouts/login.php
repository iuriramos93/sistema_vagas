<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/assets/css/matrix-login.css" />
    <link href="/assets/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Login</title>
    
</head>

<body>
    <div id="loginbox">
        <form id="loginform" class="form-vertical" action="/autentica/login.php"method="POST">
            <div class="control-group normal_text">
                <h3><img src="assets/img/logo_login2.png" alt="Logo" /></h3>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="email" name="email" placeholder="E-mail" />
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
            <div class="form-actions">
                <span class="pull-left"><a href="/registro" class="flip-link btn btn-info" id="to-recover">Registrar</a></span>
                <span class="pull-right"><button type="submit" class="btn btn-success" /> Entrar</button></span>
            </div>
        </form>
       
    </div>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/matrix.login.js"></script>
</body>