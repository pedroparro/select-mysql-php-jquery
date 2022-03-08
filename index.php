<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    <div class="container">
        <h4>Listar Dados</h4>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">SOBRENOME</th>
                    <th scope="col">EMAIL</th>
                    </tr>
                </thead>
            
                <tbody id="data">

                </tbody>
            </table>
    </div>
    <!--script-->
    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/script.js"></script>
</body>
</html>