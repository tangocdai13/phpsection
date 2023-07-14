1. Session trong PHP

- session_start() // Khởi tạo session cho toàn hệ thống
- Định nghĩa biến session; $_SESSION['tên_biến']
    * tên_biến session: string
        Ex: $_SESSION['user'] = value

        value: string | number | array | object

- Điều hướng và chuyển trang

header('location:page_url');

ex: header('location:page2.php');


- Để xoá 1 biến session 
    unset($_SESSION['key_name'])

- Để huỷ toàn bộ session
    session_destroy()

