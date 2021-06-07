Các bước debug với xdebug: 

1. Bật xdebug trên browser qua phần extensions. Sau khi bật xdebug sẽ ở góc phải bên trên. Khi bật xdebug thì hình con bọ sẽ chuyển sang màu xanh lá.
![Screenshot 2021-06-07 212109 - Copy (2)](https://user-images.githubusercontent.com/60163299/121042832-40471700-c7de-11eb-8935-f43cbcf04798.png)



2. Sau khi đã bật xdebug trên browser, sẽ bắt đầu chạy xdebug trên IDE. Trước khi chạy xdebug, cần kiểm tra file launch.json tất cả config.


![Screenshot 2021-06-07 221939](https://user-images.githubusercontent.com/60163299/121043044-7a181d80-c7de-11eb-83a8-ef96b8f33144.png)

![6db1b3c8ad8859d60099](https://user-images.githubusercontent.com/60163299/121043079-81d7c200-c7de-11eb-9fc0-dc35e6d8c30f.jpg)


vào phần thứ tư từ trên xuống của thanh ngoài cùng bên trái trên IDE. Ấn vào nút chạy của phần Listen for xdebug để bắt đầu debug. 

<img width="152" alt="Screenshot 2021-06-07 174536" src="https://user-images.githubusercontent.com/60163299/121043102-88663980-c7de-11eb-923a-1cbc89e40120.png">



Sau khi ấn thì bên phải của IDE sẽ hiện<img width="106" alt="Screenshot 2021-06-07 174710" src="https://user-images.githubusercontent.com/60163299/121043158-93b96500-c7de-11eb-8a3b-fec59ed94e64.png">


Thanh này sẽ dùng để điều khiển các thao tác debug. Nút đầu tiên để tạm dừng quá trình debug. Nút tiếp theo dùng để nhảy qua một dòng code nào đó để đi tới dòng tiếp theo. Nút thứ 3 dùng để đi đến break point tiếp theo. 



Break point là nơi mà code sẽ dừng chạy. Sẽ có thể có rất nhiều break point. 
<img width="42" alt="Screenshot 2021-06-07 175252" src="https://user-images.githubusercontent.com/60163299/121043228-a16eea80-c7de-11eb-9456-56e8986d4350.png">



3. Bấm reload trên web và chọn break point phù hợp. Nếu có lỗi, lỗi sẽ hiện ở phần debug console.

<img width="765" alt="Screenshot 2021-06-07 175523" src="https://user-images.githubusercontent.com/60163299/121043293-adf34300-c7de-11eb-90c6-b250c1314763.png">


Các variables, constants trong web sẽ hiện ở bên trái 
<img width="148" alt="Screenshot 2021-06-07 175625" src="https://user-images.githubusercontent.com/60163299/121043314-b21f6080-c7de-11eb-9f41-f3d311c0167b.png">


Xdebug sẽ cho bạn thấy lỗi ở phần debug console và từ đó bạn có thể fix bug tương ứng.
