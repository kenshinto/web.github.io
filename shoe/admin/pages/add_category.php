<?php
   // Kết nối đến CSDL
   include("../config/dbconfig.php");
   ?>
<div id="main-content-wp" class="add-cat-page">
   <div class="section" id="title-page">
      <div class="clearfix">
         <h3 id="index" class="fl-left">Thêm mới danh mục</h3>
      </div>
   </div>
   <div class="wrap clearfix">
      <div id="sidebar" class="fl-left">
         
      </div>
      <div id="content" class="fl-right">
         <div class="section" id="detail-page">
            <div class="section-detail">
               <form method="POST" action="pages/add_category_perform.php" enctype="multipart/form-data">
                  <label for="title">Tên danh mục</label>
                  <input type="text" name="title" id="title">
                  <label >Mô tả</label>
                  <textarea name="content" id="content"></textarea>
                  <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>