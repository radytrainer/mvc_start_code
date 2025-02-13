<div class="container">
<form action="/user/update/<?= $user['id'] ?>" method="post">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Username:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter username" name="username" value="<?= $user['username'] ?>">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" value="<?= $user['password'] ?>">
  </div>
  <button type="submit" class="btn btn-warning">Update</button>
  <a href="/user" class="btn btn-secondary">Cancel</a>
</form>
</div>