<?php session_start();
    if(!isset($_SESSION['admin']))
    {
        header("location: adm.php");
    } ?>
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
<script type="text/javascript" src="js/admin.js"></script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Quản lý <b>Danh mục sữa</b></h2>
						<a class="return-admin" href="admin.php">Về ADMIN</a>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm mới danh mục</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Xóa danh mục</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>ID Loại</th>
						<th>Tên loại</th>
						<th>Mô tả loại</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>11</td>
						<td>Sữa công thức</td>
						<td>Sữa tăng cân (hay còn gọi là sữa giàu chất béo) là thực phẩm có hàm lượng calo cao hơn một số sản phẩm sữa thông thường khác. Đây là loại thực phẩm bổ sung nhiều chất dinh dưỡng cần thiết cho cơ thể như carbohydrate, chất béo, protein, các loại vitamin và khoáng chất.</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Sửa">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Xóa">&#xE872;</i></a>
						</td>
                    </tr>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>11</td>
						<td>Sữa công thức</td>
						<td>Sữa tăng cân (hay còn gọi là sữa giàu chất béo) là thực phẩm có hàm lượng calo cao hơn một số sản phẩm sữa thông thường khác. Đây là loại thực phẩm bổ sung nhiều chất dinh dưỡng cần thiết cho cơ thể như carbohydrate, chất béo, protein, các loại vitamin và khoáng chất.</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Sửa">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Xóa">&#xE872;</i></a>
						</td>
                    </tr>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>11</td>
						<td>Sữa công thức</td>
						<td>Sữa tăng cân (hay còn gọi là sữa giàu chất béo) là thực phẩm có hàm lượng calo cao hơn một số sản phẩm sữa thông thường khác. Đây là loại thực phẩm bổ sung nhiều chất dinh dưỡng cần thiết cho cơ thể như carbohydrate, chất béo, protein, các loại vitamin và khoáng chất.</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Sửa">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Xóa">&#xE872;</i></a>
						</td>
					</tr>
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
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Thêm loại sản phẩm</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">		
					<div class="form-group">
						<label>ID Loại sản phẩm</label>
						<input type="text" class="form-control" required>
					</div>			
					<div class="form-group">
						<label>Tên loại sản phẩm</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Mô tả</label>
						<input type="text" class="form-control" required>
					</div>
					<!--
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>	
					-->				
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
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Sửa loại sản phẩm</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Tên loại</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Mô tả</label>
						<input type="email" class="form-control" required>
					</div>
					<!--
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>		
					-->			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
					<input type="submit" class="btn btn-info" value="Lưu">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Xóa danh mục</h4>
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
</body>
</html>