<h2>User List</h2>

<?= $title ?>

<table width="800" border="1">
    <tr>
        <td>Name</td>
        <td>Pesonal ID</td>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->name ?></td>
        <td><?= $user->personal_id ?></td>
    </tr>
    <?php endforeach; ?>
</table>