<html>

<head>
  <title>Problema</title>
</head>
<link rel="stylesheet" href="/css/style00.css">
<body>
<style>
    img {
        margin: 0 auto;
        width: 400px;
        height: 400px;
    }


</style>
    <section class="tablas">
        <?php
        copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
        echo "La foto se registro en el servidor.<br>";
        $nom = $_FILES['foto']['name'];
        echo "<img src=\"$nom\">";
        ?>
        <form action="../index.html" method="post">
            <input type="submit" value="Volver">
        </form>
    </section>
</body>

</html>