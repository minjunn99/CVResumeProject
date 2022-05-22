### 1. Tổng quan về MVC:

- Controller: nhận request từ người dùng, xử lý yêu cầu, trả kết quả về view hiển thị cho người dùng.
- Model: tương tác với database, thực hiện tất cả các công việc liên quan đến database như thêm, sửa, xóa, truy vấn dữ liệu.
- View: là thành phần hiển thị tất cả các thông tin cho người dùng. Cho phép người dùng thao tác và input dữ liệu đầu vào trên đó.

### 2. Rule trong Project MVC: Quy tắc đặt tên

- Controller:
  Tên class & tên file luôn giống nhau.
  Tên class: chữ cái đầu viết hoa và luôn có Controller ở cuối.
  Ex: ProductController (Class) -> ProductController.php (File)
- Model:
  Giống Controller khác ở tên cố định là "Model".
  Ex: UserModel (Class) -> UserModel.php (File)
- View: (Không bắt buộc nhưng nên có):
  Tên của File View nên giống với tên method trong file View đó.
  Ex: Method trong controller là index -> tên file sẽ là index.php
  Tên của folder View nên giống với controller nhưng ở dạng số nhiều.
  Ex: UserController -> Folder view là users

### 3. Param Name

- controller: quy định gọi vào controller nào. giá trị phải trùng tên với controller name.
  Ex: UserController -> Param controller: user
- action: quy định gọi vào method nào. Trường hợp không có -> mặc định action là index
