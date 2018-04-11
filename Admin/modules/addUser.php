<?php  
  $sqlProvince="SELECT * FROM tbl_province";
  $resultProvince=mysqli_query($conn,$sqlProvince);
  if(isset($_POST["addNew"])){
      $user_name = $_POST["user_name"];
      $email = $_POST["email"];
      $password = md5($_POST["password"]);
      $gender = $_POST["gender"];
      $phone = $_POST["phone"];
      //chuyển từ ngày tháng năm hoăc năm tháng ngày => số nguyên tương tứng
      $temTime = strtotime($_POST["birthday"]);//06-01-2018=>8654564765
      $birthday = date("Y-m-d",$temTime) ;
      $address = $_POST["address"];
      $province_id = $_POST["province_id"];
      $district_id = $_POST["district_id"];
      $ward_id = $_POST["ward_id"];
      $sqlInsert = "INSERT INTO tbl_users (user_name,email,`password`,gender,phone,birthday,address,province_id,district_id,ward_id)";
      $sqlInsert .= " VALUES('$user_name','$email','$password','$gender','$phone','$birthday','$address','$province_id','$district_id','$ward_id')";
      $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
      header("Location:index.php?view=listUser");
  }      

?>
<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add User</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="user_name" class="col-sm-2 control-label">user_name</label>
            <div class="col-sm-10">
              <input class="form-control" id="user_name" name="user_name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">email</label>
            <div class="col-sm-10">
              <input class="form-control" id="email" name="email" type="email">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-2 control-label">password</label>
            <div class="col-sm-10">
              <input class="form-control" id="password" name="password" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">gender</label>
            <label class="col-sm-offset-1 radio-inline"><input type="radio" id="male" name="gender" value="1">Male</label>
            <label class="radio-inline"><input type="radio" id="female" name="gender" value="0">Female</label>
          </div>
          <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">phone</label>
            <div class="col-sm-10">
              <input class="form-control" name="phone" id="phone" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="birthday" class="col-sm-2 control-label">birthday</label>
            <div class="col-sm-10">
              <input class="form-control" name="birthday" id="birthday" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="address" class="col-sm-2 control-label">address</label>
            <div class="col-sm-10">
              <textarea name="address" id="address" cols="30" rows="3" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="province" class="col-sm-2 control-label">province</label>
            <div class="col-sm-5">
                <select class="form-control" id="province_id" name="province_id" onchange="getDistrict(this.value)">
                  <option>---Chọn---</option>
                <?php  
                  while ($rowProvince=mysqli_fetch_assoc($resultProvince)) {
                ?>
                  <option value="<?php echo $rowProvince["province_id"] ?>"><?php echo $rowProvince["province_name"]; ?></option>
                <?php    
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="district_id" class="col-sm-2 control-label">district</label>
            <div class="col-sm-5">
              <select class="form-control" id="district_id" name="district_id" onchange="getWard(this.value)" >
                 <option>---Chọn---</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="ward" class="col-sm-2 control-label">ward</label>
            <div class="col-sm-5">
              <select class="form-control" id="ward_id" name="ward_id">
                <option>---Chọn---</option>
              </select>
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <button type="Reset" class="btn btn-default">Reset</button>
          <!-- <button type="submit" name="listU" id="listU" class="btn btn-default">List User</button> -->
          <button type="submit" name="addNew" id="addNew" class="btn btn-info pull-right">Add New</button>
        </div>
      </form>
    </div>
  </div>
</div>