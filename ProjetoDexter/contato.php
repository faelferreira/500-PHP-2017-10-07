<!doctype html>
<html dir="ltr" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Dexter Courier | Fale Conosco</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <?php include_once 'template/topo.php'; ?>
    </header>

    <div class="container content">
            <div class="title center">
                <h1>Fale conosco</h1>
            </div>

            <!-- <div class="banner-fixed">
                <img src="http://lorempixel.com/940/300" alt="Banner Sobre">
            </div> -->

            <iframe class="map" width="940" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=4Linux+-+Rua+Vergueiro,+Vila+Mariana,+S%C3%A3o+Paulo&amp;aq=0&amp;oq=4linux+rua&amp;sll=-23.65333,-46.595764&amp;sspn=0.906957,1.454315&amp;ie=UTF8&amp;hq=4Linux+-&amp;hnear=Rua+Vergueiro,+S%C3%A3o+Paulo&amp;t=m&amp;ll=-23.587469,-46.633487&amp;spn=0.013765,0.04034&amp;z=15&amp;output=embed"></iframe>

            <?php

            $ok = 'true';


        if ($_POST) {
           
           $camposInvalidos = validaCampos($_POST);

           if (count($camposInvalidos) > 0) {
               $ok = false;
           } else {
            $ok = true;
           }

        }
        ?>

        <?php if ($ok === true) :  ?>
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            Enviado
        </div> 

        <?php endif; ?>
        <?php if ($ok === false) :  ?>
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <ul>
                <?php foreach ($camposInvalidos as $campo) :?>
                    <li><?= $campo  ?></li>
                <?php endforeach; ?>
            </ul>
        </div> 

        <?php endif; ?>

            <form action="#" method="post" class="form">
                <p>
                    <label for="nome">Nome</label>
                    <input type="text" value="<?= (isset($_POST['nome'])) ? $_POST['nome'] : ''; ?>" name="nome" id="nome" placeholder="Nome" >
                </p>
                <p>
                    <label for="email">Email</label>
                    <input type="email" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''; ?>" name="email" id="email" placeholder="seu@email.com" >
                </p>
                <p>
                    <label for="tel">Telefone</label>
                    <input type="tel" value="<?= (isset($_POST['tel'])) ? $_POST['tel'] : ''; ?>" name="tel" id="tel"  placeholder="(xx) 1234-5678" >
                </p>
                <p>
                    <label for="msg">Mensagem</label>
                    <textarea name="msg" id="msg" rows="5" placeholder="Sua mensagem..." ><?= (isset($_POST['msg'])) ? $_POST['msg'] : ''; ?></textarea>
                </p>
                <p>
                    <button class="btn">Enviar</button>
                </p>
            </form>
    </div>

    <footer class="footer">
        <?php include_once 'template/rodape.php'; ?>
    </footer>

</body>

</html>
