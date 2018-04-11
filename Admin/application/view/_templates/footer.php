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
  function getDistrict(id){
    $.post('get-district.php', {'id':id}, function(data) {
      /*optional stuff to do after success */
      $("#district_id").html(data);
    });
  }
  function getWard(id){
    $.post('get-ward.php', {'id':id}, function(data) {
      /*optional stuff to do after success */
      $("#ward_id").html(data);
    });
  }
  $(document).ready(function() {
    $("#birthday").datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd-mm-yy",
    }) ;
  });
</script>
</body>
</html>