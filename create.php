<?php
   include_once("templates/header.php")
?>

<div class="container">
<?php include_once("templates/backbtn.html")?>
    <h1 id="main-title">Criando Contato</h1>
    <form action="config/process.php" id="create-form" method="POST">
        <input type="hidden" name="type" value="create"> 
        <div class="form-group">
            <label for="name">Nome do Contato:</label>
            <input  
                id="name"
                name="name"
                type="text" 
                class="form-control" 
                placeholder="Digite o nome" 
                required
            >
        </div>
        <div class="form-group">
            <label 
                for="phone">Telefone do Contato:
            </label>
            <input 
                type="text" 
                class="form-control"
                name="phone" 
                id="phone" 
                placeholder="Digite o Telefone" 
                required>
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea class="form-control" name="observations" id="observations" placeholder="Digite as Observações" row="3" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php
    include_once("templates/footer.php")
?>