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
        window.location.href="<?php echo URL . 'songs/deletesong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>";
      }
    }
  </script>  
<script>
  function getDistrict(id){
    $("#ward_user").html('<option value="">---Chọn---</option>');
    $.post("getdistrict", {'id':id}, function(data) {
      /*optional stuff to do after success */
      $("#district_user").html(data);
    });
  }
  function getWard(id){
    $.post('getward', {'id':id}, function(data) {
      /*optional stuff to do after success */
      $("#ward_user").html(data);
    });
  }
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
</body>
</html>