<html>
    <head>
        <title>Form in PHP</title>
        <style>
            label {
                float: left;
                width: 100px;
            }

            input {
                margin-bottom: 5px;
                padding: 5px;
            }

            input[type="text"], input[type="password"] {
                width: 300px;
            }

            .input-error {
                border: 1px solid red;
            }

            .smg-error {
                color: red;
                text-indent: 100px;
            }
        </style>
    </head>
    <body>
        <?php
            /**
             * Fullname, email, address, phone, password: Bắt buộc nhập
             * Email: check đúng format
             */

            $fullname = $userTypeName = $email = $phone = $password = $address = '';
            $fullnameErr = $errType = $errUserTypeName = $emailErr = $phoneErr = $passwordErr = $addressErr = '';
            $content = '';
            $labelUserType = 'Company';
            $placeholderUserType = 'Your company name';
            $type = 1;

            if (isset($_POST['btnRegister'])) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $type = $_POST['user_type'];

                // Validate user type
                if (empty($_POST['user_type'])) {
                    $errType = 'Vui long chọn user type';
                }

                if ($type == 2) {
                    $labelUserType = 'School';
                    $placeholderUserType = 'Your school name';
                }

                // Validate user type name
                if (empty($_POST['user_type_name'])) {
                    $errUserTypeName = $type == 1 ? 'Vui lòng nhập company name' : 'Vui lòng nhập school name';
                }

                // Validate for fullname
                if (empty($fullname)) {
                    $fullnameErr = 'Vui lòng nhập họ và tên';
                }

                // Validate for email
                if (empty($email)) {
                    $emailErr = 'Vui lòng nhập email của bạn';
                } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    // Kiểm tra format
                    $emailErr = 'Email không đúng định dạng';
                }

                // Validate for phone
                if (empty($phone)) {
                    $phoneErr = 'Vui lòng nhập số điện thoại của bạn';
                } else if (!is_numeric($_POST['phone'])) {
                    // Kiểm tra format
                    $phoneErr = 'Phone không đúng định dạng';
                } else if (strlen($_POST['phone']) > 10) {
                    // Kiểm tra format
                    $phoneErr = 'Phone không đc quá 10 lý tự';
                }

                // Xử lý sau khi nhập đúng và đủ
                if ($fullname && $email && $phone && $address && $password) {
                    $content .= "<p>Tên của bạn: ${fullname}";
                    $content .= "<p>Email của bạn: ${email}";
                    $content .= "<p>Phone của bạn: ${phone}";
                    $content .= "<p>Address của bạn: ${address}";
                }
            }
        ?>
        <form action="" method="post">
            <label>User Type</label>
            <label><input type="radio" class="user-type" <?= $type == 1 ? 'checked' : '' ?> name="user_type"  value="1" />Company </label>
            <label><input type="radio" class="user-type" <?= $type == 2 ? 'checked' : '' ?> name="user_type" value="2" />School</label>
            <br/>
            <?= $errType ? "<div class='smg-error'>{$errType}</div>" : '' ?>
            <br/><br/>

            <label class="user-type-name"><?= $labelUserType ?></label>
            <input type="text" name="user_type_name" class="user-type-input" placeholder="<?= $placeholderUserType ?>" />
            <?= $errUserTypeName ? "<div class='smg-error'>{$errUserTypeName}</div>" : '' ?>
            <br/>

            <label>Fullname</label>
            <input type="text" name="fullname" class="<?= $fullnameErr ? 'input-error' : '' ?>" value="<?= $fullname ?>" />
            <?= $fullnameErr ? "<div class='smg-error'>{$fullnameErr}</div>" : '' ?>
            <br/>

            <label>Email</label>
            <input type="text" name="email" class="<?= $emailErr ? 'input-error' : '' ?>" value="<?= $email ?>" />
            <?= $emailErr ? "<div class='smg-error'>{$emailErr}</div>" : '' ?>
            <br/>
            <label>Phone</label>
            <input type="text" name="phone" class="<?= $phoneErr ? 'input-error' : '' ?>" value="<?= $phone ?>" />
            <?= $phoneErr ? "<div class='smg-error'>{$phoneErr}</div>" : '' ?>
            <br/>
            <br/>
            <label>Password</label>
            <input type="password" name="password" />
            <br/>
            <label>Address</label>
            <input type="text" name="address" />
            <br/>
            <label>Gender</label>
            Nam <input type="radio" name="gender" value="1" />
            Nữ <input type="radio" name="gender" value="2" />
            <br/>
            <label>&nbsp;</label>
            <button name="btnRegister">Register</button>
        </form>

        <div class='result'><?= $content ?></div>

        <script>
            document.querySelectorAll('.user-type').forEach(function(el) {
                el.addEventListener('click', function() {
                    let type = ''

                    if (this.checked) {
                        type = this.value
                    }

                    document.querySelector('.user-type-name').innerHTML = type == 1 ? 'Company' : 'School'
                    document.querySelector('.user-type-input').setAttribute('placeholder', type == 1 ? 'Your company name' : 'Your school name')
                })
            })
        </script>
    </body>
</html>