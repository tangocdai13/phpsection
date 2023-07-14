<html>
    <head>
        <title>Filter Student</title>
        <style>
            .container {
                max-width: 1000px;
                margin: 0px auto;
            }
        </style>
    </head>
    <body>
        <?php require './student-mamagement.php' ?>

        <div class="container">
            <div class="form-search">
                <form action="" method="GET">
                    <input type="text" name="keyword" size="70" placeholder="Tìm theo tên, email hoặc địa chỉ" value="<?= $keyword ?>" />
                    <label><input type="radio" name="gender" value="1" <?= $gender == 1 ? 'checked' : '' ?> />Nam</label>
                    <label><input type="radio" name="gender" value="2" <?= $gender == 2 ? 'checked' : '' ?> />Nữ</label>
                    <button>Tìm kiếm</button>
                </form>
            </div>

            <div class="total-result" style="text-align: right; width: 800px;">Tổng số sinh viên <?= count($result) ?></div>
            <table width="800" border="1" cellspacing="0" cellpadding="0">
                <tr>
                    <th>Id</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Hành Động</th>
                </tr>
                <?php foreach ($result as $student): ?>
                    <tr>
                        <td><?= $student['id'] ?></td>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['email'] ?></td>
                        <td><?= $student['gender'] == 1 ? 'Nam' : 'Nữ' ?></td>
                        <td><?= $student['address'] ?></td>
                        <td>
                            <a href="detail-student.php?id=<?= $student['id'] ?>">Xem chi tiết</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>
</html>