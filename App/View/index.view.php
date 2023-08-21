
<?php require 'partials/header.php' ?>

<div class="form">
    <form action="store" method="post">
        <div class="form-group">
            <p class="form-title">Post</p>
        </div>
        <div class="form-group">
            <div class="form-input">
                <label for="" class="form-label">Nombre:</label>
                <input type="text" class="form-input-label" name="name">
            </div>
            <div class="form-textarea">
                <label for="" class="form-textarea-label">Mensaje:</label>
                <textarea name="message" cols="30" rows="10" class="form-text"></textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="form-button">Enviar</button>
        </div>
    </form>
</div>

<?php require 'partials/footer.php' ?>

