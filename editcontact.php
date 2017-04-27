<?php 
// include database.php
// start session
// assign the session variable edit_id to variable data
// write an query  to select contact from contactbook where contactid equals data
//use while loop to display the record and use mysql_fetch_array to fetch the result of query 
	
   	 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PhoneBook | Form</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css"
	rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

</head>
<body>
	<div id="wrapper">
		<div id="page-wrapper" class="gray-bg"
			style="min-height: 418px; margin-left: auto;">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Phone Book</h5>

						</div>
						<div class="ibox-content">
							<form class="form-horizontal" method="POST"  action="CRUDoperation.php" >
							
								
								
                                   <div class="form-group">
									<label class="col-lg-2 control-label">Name</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" value="<?php // fetch the value of variable name ?>" name="name"placeholder="Name">
											
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Tel No</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" value="<?php // fetch the value of variable telno ?>" name="telno">
											
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-2 control-label">DOB</label>
									<div class="col-lg-4">
										<input type="text" value="<?php // fetch the value of variable dob ?>"class="form-control" data-mask="99/99/9999" name="dob"
											placeholder="">
									</div>
								</div>
                                 <div class="form-group">
									<label class="col-lg-2 control-label">Address</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" value="<?php // fetch the value of variable address ?>" name="address">
											
									</div>
								</div>
									    <div class="form-group">
									<label class="col-lg-2 control-label">Website</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" value="<?php // fetch the value of variable website ?>" name="website">
											
									</div>
								</div>				
									
									<div class="form-group">
										<label class="col-lg-2 control-label">Company Name</label>

										<div class="col-lg-4">
											<input type="text" value="<?php // fetch the value of variable company name?>"placeholder="company name" name="companyname" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label">Landline No</label>

										<div class="col-lg-4">
											<input type="text"value="<?php // fetch the value of variable landlineno ?>" 	name="landlineno" class="form-control">
										</div>
									</div>
								</div>

									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<input class="btn btn-sm btn-white" type="submit" name="button" value="update">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
<?php }?>
</form>
		

	<!-- Mainly scripts -->

	<!-- Custom and plugin javascript -->
	

	<!-- MENU -->
	

	<!-- Input Mask-->
	

	<script src="js/plugins/dataTables/datatables.min.js"></script>


	<script>
		$(document)
				.ready(
						function() {

							$(':radio')
									.change(
											function(event) {

												if ($("#set_visible").css(
														"display") === 'none') {

													$("#set_visible").css(
															"display", "block");
												} else {
													$("#set_visible").css(
															"display", "none");
												}

											});

							$('.dataTables-example')
									.DataTable(
											{
												pageLength : 25,
												responsive : true,
												dom : '<"html5buttons"B>lTfgitp',
												buttons : [
														{
															extend : 'copy'
														},
														{
															extend : 'csv'
														},
														{
															extend : 'excel',
															title : 'ExampleFile'
														},
														{
															extend : 'pdf',
															title : 'ExampleFile'
														},

														{
															extend : 'print',
															customize : function(
																	win) {
																$(
																		win.document.body)
																		.addClass(
																				'white-bg');
																$(
																		win.document.body)
																		.css(
																				'font-size',
																				'10px');

																$(
																		win.document.body)
																		.find(
																				'table')
																		.addClass(
																				'compact')
																		.css(
																				'font-size',
																				'inherit');
															}
														} ]

											});

						});
	</script>
</body>
</html>
