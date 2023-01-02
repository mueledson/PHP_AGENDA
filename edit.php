<?php
   include_once("templates/header.php");
   include_once("config/process.php");
?>

<div class="container">
<?php include_once("templates/backbtn.html")?>
    <h1 id="main-title">Editando Contato</h1>
    <form action="config/process.php" id="edit-form" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact["id"] ?>"> 
        <div class="form-group">
            <label for="name">Nome do Contato:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome" value="<?= $contact["name"] ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone do Contato:</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite o Telefone" value="<?= $contact["phone"] ?>" required>
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea class="form-control" name="observations" id="observations" placeholder="Digite as Observações" row="3" ><?= $contact["observations"] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php
    include_once("templates/footer.php")
?>