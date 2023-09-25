<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Telefones com Modal</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Cadastro de Telefones</h1>

   
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Adicionar Telefone</button>

    <!-- Lista de números q foram cadastrados -->
    <ul id="listaTelefones">
        <?php
        
        session_start();
        if (isset($_SESSION['telefones'])) {
            foreach ($_SESSION['telefones'] as $telefone) {
                echo "<li>$telefone</li>";
            }
        }
        ?>
    </ul>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Telefone</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="adicionar_telefone.php">
                        <input type="text" name="numero" placeholder="Digite o número de telefone" class="form-control">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


