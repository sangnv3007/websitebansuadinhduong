<?php
    include('lib_db.php');
    // ID Nhân viên 	Họ và Tên 	Địa chỉ 	SĐT 	Vị trí 	Email 	Password
    $sql='select * from dtb_employee';
	$employee=select_list($sql);
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header("location: adm.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ADMIN-Siêu thị sữa dinh dưỡng-Thế giới sữa cho bé</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" href="css/admin.css" rel="stylesheet" media="screen"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Quản lý <b>Tài khoản</b></h2>
						<a class="return-admin" href="admin.php">Về ADMIN</a>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm mới tài khoản</span></a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<!-- <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th> -->
						<th>ID Nhân viên</th>
						<th>Họ và Tên</th>
                        <th>Địa chỉ</th>
                        <th>SĐT</th>
                        <th>Vị trí</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody class="view">
                    <?php foreach($employee as $ep){ ?>
                    <!-- start -->
					<tr>
						<!-- <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td> -->
						<td ><?php echo $ep['id']; ?></td>
						<td ><?php echo $ep['full_name']; ?></td>
                        <td ><?php echo $ep['address']; ?></td>
                        <td ><?php echo $ep['phone']; ?></td>
						<td ><?php echo $ep['position']; ?></td>
                        <td ><?php echo $ep['email']; ?></td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Sửa">&#xE254;</i></a>
							<a href="#" class="delete" name="<?php echo $ep['id']; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Xóa">&#xE872;</i></a>
						</td>
                    </tr>
                    <!-- end -->
                    <?php } ?>
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Hiển thị <b> 5</b>trong <b>25</b> trang</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Trang trước</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Trang sau</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- ADD Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="adduser.php" method='POST'>
				<div class="modal-header">						
					<h4 class="modal-title">Thêm tài khoản</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">		
					<div class="form-group">
						<label>ID nhân viên</label>
						<input type="text" class="form-control" name='id' required>
					</div>			
					<div class="form-group">
						<label>Họ và tên</label>
						<input type="text" class="form-control" name='name' required>
					</div>
					<div class="form-group">
						<label>Địa chỉ</label>
						<input type="text" class="form-control" name='address' required>
                    </div>
                    <div class="form-group">
						<label>Số điện thoại</label>
						<input type="text" class="form-control" name='phone' required>
                    </div>
                    <div class="form-group">
						<label>Vị trí</label>
						<input type="text" class="form-control" name='location' required>
                    </div>
                    <div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name='email' required>
                    </div>
                    <div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name='pass' required>
					</div>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
					<input type="submit" class="btn btn-success" value="Thêm">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
        <div class="modal-content">
                <form enctype='multipart/form-data' action="updateuser.php" method="POST">
                    <div class="modal-header">						
                        <h4 class="modal-title">Thêm tài khoản</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">		
                        <div class="form-group">
                            <label>ID nhân viên</label>
                            <input type="text" name="id" class="form-control id_edit" readonly="readonly" required>
                        </div>			
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text" name="name" class="form-control name_edit" required>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="position" class="form-control address_edit" required>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" class="form-control phone_edit" required>
                        </div>
                        <div class="form-group">
                            <label>Vị trí</label>
                            <input type="text" name="location" class="form-control position_edit" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control email_edit" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control pass_edit" required>
                        </div>			
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
                        <input type="submit" class="btn btn-success" value="Sửa">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="deleteuser.php">
				<div class="modal-header">						
					<h4 class="modal-title">Xóa tài khoản</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Bạn có chắc chắn muốn xóa bản ghi này</p>
					<p class="text-warning"><small>Hành động này sẽ không thể khôi phục lại.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
					<input type="submit" class="btn btn-danger" value="Xóa">
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/admin.js"></script>
</body>
</html>