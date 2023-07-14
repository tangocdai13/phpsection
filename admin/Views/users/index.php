<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="display-4">User Management</h2>
    <p><a href="index.php?module=user&action=create">Add new</a></p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Avartar</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <th scope="row"><?= $user->id ?></th>
            <td>Avartar</td>
            <td><?= $user->name ?></td>
            <td><?= $user->name ?></td>
            <td></td>
            <td><?= $userModel->getGender($user->gender) ?></td>
            <td></td>
            <td>
                <a href="index.php?module=user&action=edit&id=<?= $user->id ?>">Edit</a>
                <a onclick="return confirm('Are you sure delete!')" href="index.php?module=user&action=delete&id=<?= $user->id ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>
</div>
