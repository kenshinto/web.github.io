<?php
   // Kết nối đến CSDL
   include("../config/dbconfig.php");
   ?>
<div id="main-content-wp" class="add-cat-page">
   <div class="section" id="title-page">
      <div class="clearfix">
         <h3 id="index" class="fl-left">Sửa danh mục</h3>
      </div>
   </div>
   <div class="wrap clearfix">
      <div id="sidebar" class="fl-left">
         <ul id="list-cat">
            <li>
               <a href="?page=add_category" title="">Thêm mới</a>
            </li>
         </ul>
      </div>
      <div id="content" class="fl-right">
         <div class="section" id="detail-page">
            <div class="section-detail">
               <form method="POST" action="pages/change_category_perform.php" enctype="multipart/form-data">
                  <?php
                     // Bước 1: Kết nối đến CSDL
                      include("../config/dbconfig.php");
                      $id = $_GET["id"];
                     //Bước 2: Hiển thị các dữ liệu trong bảng ra đây
                      $sql = "select * from tbl_category where id = ".$id;
                      $run = mysqli_query($conn,$sql);
                      $row = mysqli_fetch_array($run);
                     ?>
                  <input type="hidden" name="id" value='<?php echo $row["id"];?>'>
                  <label for="title">Tên danh mục</label>
                  <input type="text" name="title" id="title" value="<?php echo $row["title"];?>">
                  <label >Mô tả</label>
                  <textarea name="content" id="content"><?php echo $row["content"];?></textarea>
                  <button type="submit" name="btn-submit" id="btn-submit">Sửa</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>