<?php
    $userId = $_GET['id'] ?? null;
    $userInfo = null;

    foreach ($_SESSION['users'] as $key => $user) {
        if ($user['id'] == $userId) {
            $userInfo = $user;
            break;
        }
    }

    if (empty($userInfo)) {
        echo 'User not found!';
        exit;
    }
?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3 class="display-5">User Infomation</h3>
    <a href="index.php?module=user">Back</a>
</div>

<div class="container">
    <form action="" method="post">
        <div class="form-group row">
        <label for="inputPassword" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="name" value="<?= $userInfo['name'] ?>" />
           
        </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="email" value="<?= $userInfo['email'] ?>" />
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="phone" value="<?= $userInfo['phone'] ?>" />
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="address" value="<?= $userInfo['address'] ?>" />
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-9">
                <label><input type="radio" name="gender" value="1" <?= $userInfo['gender'] == 1 ? 'checked' : '' ?> />Nam</label>
                <label><input type="radio" name="gender" value="2" <?= $userInfo['gender'] == 2 ? 'checked' : '' ?> />Nữ</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <button type="submit" name="btn-save" class="btn btn-primary">Save</button> &nbsp;
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>
</div>