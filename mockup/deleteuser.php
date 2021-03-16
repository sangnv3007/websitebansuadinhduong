<?php
    include('lib_db.php');
    $sql='delete from dtb_employee where id="'.$_GET['id'].'"';
    exec_update($sql);
    $sql1='select * from dtb_employee';
    $employee=select_list($sql1);
    $s='';
    foreach($employee as $ep){
        $s.= '<!-- start -->
        <tr>
            <!-- <td>
                <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                </span>
            </td> -->
            <td>'.$ep['id'].'</td>
            <td>'.$ep['full_name'].'</td>
            <td>'.$ep['address'].'</td>
            <td>'.$ep['phone'].'</td>
            <td>'.$ep['position'].'</td>
            <td>'.$ep['email'].'</td>
            <td>
                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Sửa">&#xE254;</i></a>
                <a href="#" class="delete" name="'.$ep['id'].'" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Xóa">&#xE872;</i></a>
            </td>
        </tr>
        <!-- end -->';
       }
    echo $s;
?>