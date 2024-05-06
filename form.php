<form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
    <div class="form-group">
        <label class="pt-3" for="nome">Your name:</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
    </div>
    <div class="form-group">
        <label class="pt-3" for="email">Your email:</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label class="pt-3" for="messaggio">Message:</label>
        <textarea name="messaggio" id="messaggio" class="form-control" required></textarea>
    </div>
        <div class="pt-3 text-end"><button type="submit" name="submit" class="btn btn-primary">Invia</button></div>

</form>