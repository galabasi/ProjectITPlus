<footer class="footer">
	<div class="row-fluid">
		<div class="span2">
			<h5>Tài khoản của bạn</h5>
			<a href="#">Thông tin</a><br>
			<a href="#">ORDER HISTORY</a><br>
		</div>
		<div class="span2">
			<h5>Về chúng tôi</h5>
			<a href="contact.html">Liên hệ</a><br>
			<a href="#">Bản đồ</a><br>
			<a href="#">Giấy phép hoạt động</a><br>
		</div>
		<div class="span2">
			<h5>Gợi ý</h5>
			<a href="#">Sản phẩm mới</a> <br>
			<a href="#">Bán chạy</a><br>
			<a href="#">Nhà cung cấp</a><br>
		</div>
		<div class="span6">
			<h5>Thông tin thêm</h5>
			Mọi thắc mắc, hỏi đáp, khiếu nại, vui lòng liên hệ với chúng tôi qua địa chỉ email: support@gmail.com. Xin cảm ơn!
		</div>
	</div>
</footer>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing-1.3.min.js"></script>
<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="js/shop.js"></script>
<script>  
	function getList(id){
		$.post('<?php echo URL."shop" ?>/getList', {'id': id}, function(data) {
			$("#list").load("shop #list");
		});
	}
	function isChecked(id){
			if($("#"+id).is(':checked')){
				userName = $("#userName").val();
				email = $("#email").val();
				mobile = $("#mobile").val();
				address = $("#address").val();

				$("#name_receive").val(userName);
				$("#phone_receive").val(mobile);
				$("#address_receive").val(address);
			}else{
				$("#name_receive").val("");
				$("#phone_receive").val("");
				$("#address_receive").val("");
			}
		}
	function downItem(id){
			quantity = $("#quantity_"+id).val();
			quantity =   parseInt(quantity) - 1;
			$("#quantity_"+id).val(quantity);
			$.post("<?php echo URL."cart/" ?>updateCart", {'id':id,'quantity':quantity}, function(data) {
				$("#cartList").load("cart #cartList");
			});
		}
		function upItem(id){
			quantity = $("#quantity_"+id).val();
			quantity =   parseInt(quantity) + 1;
			$("#quantity_"+id).val(quantity);
			$.post("<?php echo URL."cart/" ?>updateCart", {'id':id,'quantity':quantity}, function(data) {
				$("#cartList").load("cart #cartList");
			});
		}
		function deleteItem(id){
			$.post("<?php echo URL."cart/" ?>deleteCart", {'id':id}, function(data) {
				$("#cartList").load("cart #cartList");
				
			});
		}
	function getDistrict(id, tmp){
		$("#ward_user").html('<option value="">---Chọn---</option>');
		$.post("<?php echo URL."register/" ?>getdistrict", {'id':id, 'tmp':tmp}, function(data) {
			$("#district_user").html(data);
		});
	}
	function getWard(id, tmp){
		$.post('<?php echo URL."register/" ?>getward', {'id':id, 'tmp':tmp}, function(data) {
			$("#ward_user").html(data);
		});
	}
	function addCart(id){
			$.post('<?php echo URL."cart/" ?>addCart', {'id': id}, function(data) {
				alert("thêm giỏ hàng thành công");
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

<!-- <script>
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
</script> -->

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