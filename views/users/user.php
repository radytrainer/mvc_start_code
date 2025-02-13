<div class="container mt-5">
    <a href="/user/create" class="btn btn-primary">Create User</a>
</div>

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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>