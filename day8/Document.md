### OOP
- product (thông tin: (thuộc tính của đối tượng))
- user (name, email, phone)
- category (name
- order 
- person: (name, personID: CCCD)

### Lập trình hướng là gì?
- Là một kỹ thuật lập trình trong đó nó sẽ quy toàn bộ bài toán về từng đối tượng cụ thể.

- Đối tượng (object)
    + Đối tượng là một thông tin cụ thể được tạo tạo ra từ class 
- Class
    + Là nơi quy định, định nghĩa ra các thuộc tính (tính chất của đối 
    tượng được tạo ra từ class)


+ Bản vẽ thiết kế 1 ngồi nhà
    Thuộc tính
        + Qui định số tầng
        + Số phòng (của cả ngôi nhà)
        + Kích thước tổng thể

- Bản vẽ: Class
- Ngôi nhà (được tạo ra từ bản vẽ): Object

### OOP in PHP

* Định nghĩa class trong PHP

```
class className {
    // Thuộc tính
    // Method
}

```

* Định nghĩa một object

```
    $object = new ClassName
```


### Các tính chất của OOP trong PHP
* Thuộc tính
- Biến được khai trong class có kèm theo cơ chế
    + Cơ chế (Quyền truy cập (access))
        - public
        - protected
        - private

* Phương thức (method)
- Nó là function được khai báo trong class và có kèm theo cơ chế


- Access vào giá trị của một thuộc tính bên ngoài class
    + Access thông qua object

- Từ khoá this
    $this->property_name

* Hằng số
- Để định nghĩa 1 hằng số trong class, sử dụng từ khoá const

Ex const PHONE = 100;
- Access vào hằng
    + Bên ngoài class: access thông qua tên class
        Ex: Person::PHONE;
    + Bên trong class:
        - Sử dụng từ khoá: static::PHONE;
        - Sử dụng từ khoá self: self::PHONE;

* Static Property (thuộc tính tĩnh)
- Để khai báo thuộc tính tĩnh, ta sử dụng static 
Ex: static $address = 'Hà Nội'

Cách dùng
    - Ngoài class: dùng giống hằng
        Ex: Person::$address

    - Trong class: sử dung self or static để access
        Ex: self::$address
            static::$address

## Kế thừa
- Khi một class con kế thừa từ class cha. Class con có thể sử dụng toàn bộ các phương thức, thuộc tính, const của class cha. Với điều kiện là phương thức, thuộc tính của class class cha phải mang cơ chế public | protected 

- Cách sử dụng kế thừa: dùng từ khoá extends tên class cha
Ex:
class Student extends Person {

}

- orverride: ghi đè dữ liệu của class cha
- Chống ghi đè (orverride): parent::tênClass()

* set get value in PHP 

* thuộc tính clone




