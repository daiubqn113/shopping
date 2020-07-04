<?php include 'header.php' ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý sản phẩm
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <form action="" method="POST" class="form-inline" role="form">
        
          <div class="form-group">
            <label class="sr-only" for="">label</label>
            <input type="email" class="form-control" id="" placeholder="Input field">
          </div>
          
          <button type="submit" class="btn btn-primary">Tìm</button>
          <a type="submit" class="btn btn-primary">Thêm mới</a>
        </form>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá</th>
                  <th>Ảnh</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Demo sản phẩm 1</td>
                  <td>150.000 đ</td>
                  <td>
                    <img src="../public/uploads/Desert.jpg" alt="" width="60">
                  </td>
                  <td>
                    <a href="" class="btn btn-xs btn-primary">Sửa</a>
                    <a href="" class="btn btn-xs btn-danger">Xóa</a>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Demo sản phẩm 1</td>
                  <td>150.000 đ</td>
                  <td>
                    <img src="../public/uploads/Desert.jpg" alt="" width="60">
                  </td>
                  <td>
                    <a href="" class="btn btn-xs btn-primary">Sửa</a>
                    <a href="" class="btn btn-xs btn-danger">Xóa</a>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Demo sản phẩm 1</td>
                  <td>150.000 đ</td>
                  <td>
                    <img src="../public/uploads/Desert.jpg" alt="" width="60">
                  </td>
                  <td>
                    <a href="" class="btn btn-xs btn-primary">Sửa</a>
                    <a href="" class="btn btn-xs btn-danger">Xóa</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php' ?>