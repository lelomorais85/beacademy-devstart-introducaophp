<form action="" method="post">
    <input type="text" name="nome" placeholder="Insira seu nome aqui">
    <button>Enviar</button>

</form>

<?php
    if ($_POST) {
        echo $_POST['nome'];

    }

    ?>