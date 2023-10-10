<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api-Rest</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Calculadora de Gorjeta</h2>
                <form method="POST" action="teste_funcionario.php">
                    <div class="form-group">
                        <label for="codigo">Codigo:</label>
                        <input type="number" autocomplete="off" class="form-control" name="codigo">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Excelente 10%</option>
                            <option>Ótimo 8%</option>
                            <option>Bom 5%</option>
                            <option>Ruim 2%</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <br>
                <div class="form-group">
                    <label for="Valor da Gorjeta">Valor da Gorjeta</label>
                    <input type="number" autocomplete="off" class="form-control" name="codigo" disabled="">
                </div>
                <div class="form-group">
                    <label for="Valor total">Valor Total</label>
                    <input type="number" autocomplete="off" class="form-control" name="codigo" disabled="">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>