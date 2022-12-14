<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Varejo - Cadastro de produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="../controller/Product.php" method="POST">
        <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Dados do produto</legend>
            <section class="columns-3">
                <article>
                    <label for="name">Nome do produto: </label>
                    <input type="text" id="name" name="name" class="border border-blue-400" required minlength="5">
                </article>
                <article>
                    <label for="price">Preço: </label>
                    <input type="text" id="price" name="price" class="border border-blue-400" required min="1" max="1000">
                </article>
                <article>
                    <label for="quantity">Quantidade em estoque: </label>
                    <input type="number" id="quantity" name="quantity" class="border border-blue-400" required min="1" max="1000">
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-blue-700 rounded">Cadastrar</button>
            </article>
        </fieldset>
    </form>
</body>

</html>