Các bước debug với xdebug: 

1. Bật xdebug trên browser qua phần extensions. Sau khi bật xdebug sẽ ở góc phải bên trên. Khi bật xdebug thì hình con bọ sẽ chuyển sang màu xanh lá.![Screenshot 2021-06-07 212109](C:\Users\Duong Dang\Desktop\Screenshot 2021-06-07 212109.png)

2. Sau khi đã bật xdebug trên browser, sẽ bắt đầu chạy xdebug trên IDE. Trước khi chạy xdebug, cần kiểm tra file launch.json tất cả config.![6db1b3c8ad8859d60099](C:\Users\Duong Dang\Desktop\6db1b3c8ad8859d60099.jpg)

vào phần thứ tư từ trên xuống của thanh ngoài cùng bên trái trên IDE. Ấn vào nút chạy của phần Listen for xdebug để bắt đầu debug. 

![Screenshot 2021-06-07 174536](C:\Users\Duong Dang\Desktop\Screenshot 2021-06-07 174536.png)

Sau khi ấn thì bên phải của IDE sẽ hiện

Thanh này sẽ dùng để điều khiển các thao tác debug. Nút đầu tiên để tạm dừng quá trình debug. Nút tiếp theo dùng để nhảy qua một dòng code nào đó để đi tới dòng tiếp theo. Nút thứ 3 dùng để đi đến break point tiếp theo. 



Break point là nơi mà code sẽ dừng chạy. Sẽ có thể có rất nhiều break point. ![Screenshot 2021-06-07 175252](C:\Users\Duong Dang\Desktop\Screenshot 2021-06-07 175252.png)

3. Bấm reload trên web và chọn break point phù hợp. Nếu có lỗi, lỗi sẽ hiện ở phần debug console.

![Screenshot 2021-06-07 175523](C:\Users\Duong Dang\Desktop\Screenshot 2021-06-07 175523.png)



Các variables, constants trong web sẽ hiện ở bên trái ![Screenshot 2021-06-07 175625](C:\Users\Duong Dang\Desktop\Screenshot 2021-06-07 175625.png)

Xdebug sẽ cho bạn thấy lỗi ở phần debug console và từ đó bạn có thể fix bug tương ứng.