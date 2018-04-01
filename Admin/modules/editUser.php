<?php    
  $sqlProvince="SELECT * FROM tbl_province";
  $resultProvince=mysqli_query($conn,$sqlProvince);
    
  if (isset($_GET["user_id"])) {
    if(isset($_POST["Update"])){
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
        $sqlUpdate="UPDATE tbl_users SET user_name = '$user_name',email = '1$email',";
        $sqlUpdate.="`password` = '$password',gender = '$gender',phone = '$phone',birthday = '$birthday',";
        $sqlUpdate.="address = '$address',province_id = '$province_id',";
        $sqlUpdate.="district_id = '$district_id',ward_id = '$ward_id' WHERE user_id = ".$_GET["user_id"];
        //thực thi truy vấn
        $result = @mysqli_query($conn,$sqlUpdate) or die("Lỗi truy vấn :".$result);
        //chuyển sang trang mới
        // header("Location:https://www.google.com/");
    }
    $sqlSelect="SELECT u.user_id,u.user_name,u.email,u.gender,u.phone,u.birthday,";
    $sqlSelect.="u.address,p.province_name,d.district_name,w.ward_name FROM tbl_users AS u";
    $sqlSelect.=" INNER JOIN tbl_province AS p ON u.province_id=p.province_id";
    $sqlSelect.=" INNER JOIN tbl_district AS d ON u.district_id=d.district_id";
    $sqlSelect.=" INNER JOIN tbl_ward AS w ON u.ward_id=w.ward_id";
    $sqlSelect.=" WHERE u.user_id=".$_GET["user_id"];
    $result = @mysqli_query($conn,$sqlSelect) or die("lỗi truy vấn".$result);
    while ($row=mysqli_fetch_assoc($result)) {
      // print_r($row);
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
              <input class="form-control" id="user_name" name="user_name" type="text" value="<?php echo $row["user_name"] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">email</label>
            <div class="col-sm-10">
              <input class="form-control" id="email" name="email" type="email" value="<?php echo $row["email"] ?>">
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
            <label class="col-sm-offset-1 radio-inline"><input type="radio" id="male" name="gender" value="1" <?php echo $row["gender"]?"checked":"" ?>>Male</label>
            <label class="radio-inline"><input type="radio" id="female" name="gender" value="0" <?php echo $row["gender"]?"":"checked" ?>>Female</label>
          </div>
          <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">phone</label>
            <div class="col-sm-10">
              <input class="form-control" name="phone" id="phone" type="text" value="<?php echo $row["phone"] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="birthday" class="col-sm-2 control-label">birthday</label>
            <div class="col-sm-10">
              <input class="form-control" name="birthday" id="birthday" type="text" value="<?php echo date("d-m-Y",strtotime($row["birthday"])) ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="address" class="col-sm-2 control-label">address</label>
            <div class="col-sm-10">
              <textarea name="address" id="address" cols="50" rows="3"  ><?php echo $row["address"] ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="province" class="col-sm-2 control-label">province</label>
            <div class="col-sm-5">
                <select class="form-control" id="province_id" name="province_id" onchange="getDistrict(this.value)">
                  <option  value="<?php echo $row["province_name"] ?>"><?php echo $row["province_name"] ?></option>
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
                 <option  value="<?php echo $row["district_name"] ?>"><?php echo $row["district_name"] ?></option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="ward" class="col-sm-2 control-label">ward</label>
            <div class="col-sm-5">
              <select class="form-control" id="ward_id" name="ward_id">
                <option  value="<?php echo $row["ward_name"] ?>"><?php echo $row["ward_name"] ?></option>
              </select>
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <button type="Reset" class="btn btn-default">Reset</button>
          <button type="submit" name="Update" id="Update" class="btn btn-info pull-right">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
    }
  }
?>
<script>
  $(document).ready(function() {
    $("#birthday").datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd-mm-yy",
    });
  });
</script>