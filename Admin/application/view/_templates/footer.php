    </section>
</div>
    <?php
      include("main-footer.php");
   ?>
  </div>

<script src="<?php echo URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>dist/js/adminlte.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>jquery-ui/jquery-ui.css">
<script src="<?php echo URL; ?>jquery-ui/jquery-ui.js"></script>
<script src="<?php echo URL; ?><?php echo URL; ?>tinymce/tinymce.min.js"></script>
<script src="<?php echo URL; ?>js/main.js"></script>
<script>  
  function cfdelete(id){
    if (confirm("Bạn có chắc chắn muốn xóa không?")) {
      window.location.href="<?php echo URL . 'users/deleteUser/'?>"+id;
    }
  }
  function getDistrict(id, tmp){
    $("#ward_user").html('<option value="">---Chọn---</option>');
    $.post("<?php echo URL."users/" ?>getdistrict", {'id':id, 'tmp':tmp}, function(data) {
      /*optional stuff to do after success */
      $("#district_user").html(data);
    });
  }
  function getWard(id, tmp){
    $.post('<?php echo URL."users/" ?>getward', {'id':id, 'tmp':tmp}, function(data) {
      /*optional stuff to do after success */
      $("#ward_user").html(data);
    });
  }
</script>
  <script>
        var myFunc = function() {
      if($("#province_user").val() != ""){
        getDistrict($("#province_user").val(), <?php echo $user[0]->district_user ?>);
      }
    }();
  </script>

<script>
    $(document).ready(function() {

    $("#birthday").datepicker({
      autoSize: true,
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd-mm-yy",
      maxDate: 0,
      minDate: new Date(1900, 1 - 1, 1),
      yearRange: "1900:+nn",
      dayNamesShort: [ "CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy" ],
      dayNamesMin: [ "CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy" ],
      monthNames: [ "Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12" ],
      monthNamesShort: [ "Thg1", "Thg2", "Thg3", "Thg4", "Thg5", "Thg6", "Thg7", "Thg8", "Thg9", "Thg10", "Thg11", "Thg12" ],
      defaultDate: new Date(2018, 1 - 1, 1),
      firstDay: 1
    }) ;
  });
</script>

<script>
  $(document).ready(function() {
      var myFunc2 = function() {
      if($("#district_user").val() != ""){
        getWard($("#district_user").val(), <?php echo $user[0]->ward_user ?>);
      }
    }();
    });
</script>
</body>
</html>