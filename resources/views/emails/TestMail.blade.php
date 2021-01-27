<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vip pro mail</title>

    <style>
        .header{
            width: 600px; 
            height: 620px; 
            background-color:aliceblue;
            margin-left: 400px;
        }
        .logo{
            width: 100px;
            height: 100px;
        }
        h3{
            color: #777777;
        }
        h1{
            font-size: 40px;
            font-family: serif;
        }
       .table-wrapper{
    margin: 10px 15px 30px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}
blockquote {
    margin-top: 0;
    line-height: 160%;
}

blockquote {
   font-family: 'Montserrat', sans-serif;
   font-size: 17px;
}
a {
    text-decoration: none;
    color: #3787DE;
}

a:hover {
    text-decoration: none;
    color: #F16E6E;
}
#header h1 {
    float: left;
    padding: 0px 0 0 250px;
    margin-top: 10px;
    letter-spacing: 0px;
    font-size: 18px;
}
#header h2 {
    float: right;
    padding: 0px 0px 0 40px;
    margin-top: 0px;
    letter-spacing: -1px;
    font-size: 18px;
}
    </style>
</head>
<body>
    <div class="header">
    <img class="logo" src="{{$message->embed(public_path('images/img2.jpg'))}}" alt="">
    <h1><b><center>Đặt hàng thành công</center></b></h1>
   <blockquote>
          <p>Quý khách đã đặt hàng thành công sản phẩm:</p>
        </blockquote>
   <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Ảnh Sản Phẩm</th>
            <th>Tên </th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Trạng Thái</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
        </tr>
        <tbody>
    </table>
</div>
     <blockquote>
     <p >&#8220;Hệ thống trang web bán sách sachvui.com trân trọng cảm ơn quý khách đã tin dùng các sản phẩm sách của trang web,
        xin chúc quý khách có một khoảng thời gian tuyệt vời khi sử dụng sản phẩm của chúng tôi.&#8221;</p>
         <p  >&#8220;Để kiểm tra đơn hàng, quý khách có thể nhấn vào nút dưới đây để chuyển sang đơn hàng của quý khách:&#8221;</p>
     </blockquote>
    <div id="header">
  <h1><a href="http://localhost:8000/index"  target="_blank">Đơn Hàng</a></h1>
  <h2>Nếu như quý khách nhấn vào nút trên nhưng không hoạt động, quý khách truy cập trực tiếp vào đường link : <a href="http://localhost:8000/index" target="_blank">http://localhost:8000/cart</a></h2>
</div>

    </div>
      
    
</body>
</html>