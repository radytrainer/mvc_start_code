<div class="container mt-5">
    <a href="/user/create" class="btn btn-primary">Create User</a>
</div>
<hr>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['password'] ?></td>
                    <td>
                      <a href="/user/delete/<?= $user['id'] ?>"><i class="material-icons text-danger">delete</i></a>
                      <a href="/user/edit/<?= $user['id'] ?>"><i class="material-icons">edit</i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>