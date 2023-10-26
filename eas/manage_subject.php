<?php
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM subjects where id={$_GET['id']}")->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>
<div class="container-fluid">
	<form action="" id="manage-subject">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="code" class="control-label">Class</label>
			<input type="text" class="form-control form-control-sm" name="subject_code" id="subject_code" value="<?php echo isset($subject_code) ? $subject_code : '' ?>">
		</div>
		<div class="form-group">
			<label for="subject" class="control-label">Subject</label>
			<input type="text" class="form-control form-control-sm" name="subject" id="subject" value="<?php echo isset($subject) ? $subject : '' ?>">
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Subject Title</label>
			<textarea name="description" id="description" cols="30" rows="4" class="form-control"><?php echo isset($description) ? $description : '' ?></textarea>
		</div>
		
		<div class="form-group">
			<label for="Lec" class="control-label">Lec</label>
			<input type="int" class="form-control form-control-sm" name="Lec" id="Lec" value="<?php echo isset($Lec) ? $Lec : '' ?>">
		</div>
		<div class="form-group">
			<label for="Lab" class="control-label">Lab</label>
			<input type="int" class="form-control form-control-sm" name="Lab" id="Lab" value="<?php echo isset($Lab) ? $Lab : '' ?>">
		</div>
		<div class="form-group">
			<label for="Prereq" class="control-label">Pre-requisite</label>
			<input type="text" class="form-control form-control-sm" name="Prereq" id="Prereq" value="<?php echo isset($Prereq) ? $Prereq : '' ?>">
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
		$('#manage-subject').submit(function(e){
			e.preventDefault();
			start_load()
			$.ajax({
				url:'ajax.php?action=save_subject',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Data successfully saved.","success");
						setTimeout(function(){
							location.reload()	
						},1750)
					}else if(resp == 2){
						$('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Subject Code already exist.</div>')
						end_load()
					}
				}
			})
		})
	})

</script>