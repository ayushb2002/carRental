<form method="POST" action="query/dbRegister.php">
    <input type="hidden" value="1" name="agency">
    <div class="mb-3">
        <label for="nameInput" class="form-label">Full name of agency</label>
        <input type="text" name="name" class="form-control" id="nameInput" required>
    </div>
    <div class="mb-3">
        <label for="InputEmail" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="InputPassword" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="InputPassword" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>