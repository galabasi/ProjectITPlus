<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List User</h3>
    </div>
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>#</th>
                <th>user_name</th>
                <th>email</th>
                <th>gender</th>
                <th>phone</th>
                <th>birthday</th>
                <th>address</th>
                <th>province</th>
                <th>district</th>
                <th>ward</th>
                <th>status</th>
                <th>role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                // $i = 0;
                foreach ($users as $user) {
                // $i++;
                // $gender=$rowUser["gender"]?"0":"1";
                // $birthday=date("d-m-Y",strtotime($rowUser["birthday"]));
                // $getUser="index.php?view=editUser,user_id=".$rowUser["user_id"];
                ?>
                <tr>
                  <td><?php if (isset($user->id_user)) echo htmlspecialchars($user->id_user, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->name_user)) echo htmlspecialchars($user->name_user, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->mail_user)) echo htmlspecialchars($user->mail_user, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->gender)) echo htmlspecialchars($user->gender, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->phone_user)) echo htmlspecialchars($user->phone_user, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->birthday)) echo htmlspecialchars($user->birthday, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->address_user)) echo htmlspecialchars($user->address_user, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->province_user)) echo htmlspecialchars($user->province_user, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->district_user)) echo htmlspecialchars($user->district_user, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->ward_user)) echo htmlspecialchars($user->ward_user, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->status)) echo htmlspecialchars($user->status, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->role)) echo htmlspecialchars($user->role, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td>
                    <a href="<?php echo URL . 'users/edituser/' . htmlspecialchars($user->id_user, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-block btn-primary btn-xs">Edit</a>
                    <button class="btn btn-block btn-danger btn-xs" onclick="delete1(<?php echo $rowUser["user_id"] ?>);">Delete</button>
                  </td>
                </tr> 
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
  <script>
    function delete1(id){
      if (confirm("Bạn có chắc chắn muốn xóa không?")) {
        window.location.href="index.php?view=deleteUser&user_id="+id;
      }
      // window.location.href="index.php?view=listUser";
    }
  </script>