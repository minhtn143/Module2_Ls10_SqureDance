## [Bài tập] Gán bạn nhảy ở Square Dance
### Mục tiêu

Luyện tập sử dụng cấu trúc hàng đợi.
Nội dung

Square Dance là một điệu nhảy dành cho những người độc thân. Khi đàn ông và phụ nữ đến điệu nhảy Square này, họ bước vào phòng khiêu vũ và đứng xếp hàng theo giới tính của họ. Khi điệu nhảy bắt đầu, các đối tác khiêu vũ được lựa chọn bằng cách chọn người đàn ông và phụ nữ đầu tiên ở mỗi hàng. Người đàn ông và người phụ nữ kế tiếp di chuyển đến phía trước của hàng họ. Khi một người tiến lên đầu tiên, tên của họ sẽ được thông báo. Nếu một người tiến lên mà hàng bên kia không còn ai cả thì họ sẽ được thông báo rằng phải đợi.
### Hướng dẫn

**Bước 1: Tạo một lớp tên là Dancer với 2 thuộc tính:** 

   $name: Tên của dancer
   $gender: Giới tính của dancer

**Bước 2:** 
Tạo 2 hàng đợi (sử dụng SPL)

**Bước 3:**
Tạo một số dancer nam và dancer nữ. Lần lượt thêm các dancer nam và nữ vào trong hàng đợi tương ứng

**Bước 4:** 
Viết hàm để lấy ra người đứng đầu hàng nam và người đứng đầu hàng nữ

    Nếu một trong hai hàng đợi bị rỗng thì tung ra một thông báo
    Nếu cả hai hàng đợi đều có người thì tạo thành một cặp và thông báo tên của cặp đó

**Bước 5: Viết kịch bản**

    Thêm 4 dancer nam
    Thêm 3 dancer nữ
    Lần lượt tạo các cặp nhảy cho đến khi ai đó phải đợi
    Thêm 3 bạn nữ
    Lần lượt tạo các cặp nhảy cho đến khi ai đó phải đợi
    Hiển thị số người đang phải đợi
