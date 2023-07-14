## Khai báo trong PHP
- Tạo file: fileName.php
- Khai báo script của PHP: <?php // Code PHP ?>

## In dữ liệu ra màn hình trong PHP
- echo content;
    content:
        - Text
        - Number
        - function
        - code html

## Biến trong PHP
Cú pháp: $tên_biến

$name = 'Nguyễn Văn A';
$email = 'aaaa@gmail.com'

*Qui tắc đặt tên:
- Không được bắt đầu bằng số
- Không chứa ký tự đặc biệt

- $0name // Không hợp lệ
- $name$% // Không hợp lệ
- $_email // Hợp lệ
- $age // Hợp lệ

## Comment trong PHP
- Comment trên cùng 1 dòng. Sử dụng // 
- Comment trên nhiều dòng. Sử dụng 
    /**
     * Nội dung comment 
     */ 
 
## Kiểu dữ liệu trong PHP
- Integer 4, 5
- Float 5.2 
- Array 
- Object
- Boolean
- String
- BigInt

$name = 'exampl@gmail.com'; // String
$age = 20; int
$students = []; // array
$student = new Student // Object

* Hàm để xem kiểu dữ liệu của PHP gettype($value)
* Ép kiểu dữ liệu: (int) giá trị cần convert

## Nối chuỗi và nội suy biến trong PHP
- Để nối chuỗi trong PHP (.)
- Nội suy biến "${tên biến}" hoặc "{tên biến}" // Chỉ sử dụng nội suy biến trong dấu nháy kép

## Biểu thức điều kiện
- if else
Ex  if ($isAdmin) {
        // Do your logic 
    } else {

    }

    * Nhiều case
        if ($condition1) {
            // Do your logic 
        } else if ($condition2) {
            
        } else if ($condition2) {
            // Do your logic 
        } else {

        }

- switch ... case

    swicth($value) {
        case value1:
            // Logic
            break;
        case value2:
            // Logic
            break;
        .....
        default:
            // Logic
    }

- Inline condition
$condition ? true : false;

## Vòng lặp trong PHP
- while, do while, for, foreach()


## Các phép toán & so sánh
- Giống Javascript
