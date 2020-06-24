<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/fav.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/panel.css">
    <title>Vinariam</title>
</head>
<body>

    <?php include_once('includes/header.php'); ?>
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li class="active"><a href="panel_main.php">PAINEL</a></li>
                            <li><a href="panel_orders.php">PEDIDOS</a></li>
                            <li><a href="panel_address.php">ENDEREÇOS</a></li>
                            <li><a href="panel_account_edit.php">CONTA</a></li>
                            <li id="logout"><a href="">SAIR</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="main-container">
                    <p>Olá, <strong>murillo.arruda</strong> (não é <strong>murillo.arruda</strong>? <a href="#">Sair</a>)</p>

                    <br>

                    <p>A partir do painel de controle de sua conta, você pode:</p>

                    <ul>
                        <li>Ver suas <a href="panel_orders.php">compras recentes</a> </li>
                        <li>Gerenciar seus <a href="panel_address.php">endereços de entrega e faturamento</a> </li>
                        <li>E <a href="panel_account_edit.php">editar sua senha e detalhes da conta.</a></li>
                    </ul>

                </div>    
    </section>

    <?php include_once('includes/footer.php'); ?>
    
</body>
</html>