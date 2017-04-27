<?php 

   // start session 
   // assign session variable sessionid into data
   // include database.php to connect database
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
										<input type="text" class="form-control" name="name" placeholder="Name">
											
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Tel No</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" name="telno"placeholder="mobileno">
											
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-2 control-label">DOB</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" data-mask="99/99/9999" name="dob"
											placeholder="dd/mm/yy">
									</div>
								</div>
<div class="form-group">
									<label class="col-lg-2 control-label">Address</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" name="telno"  placeholder="Address" >
											
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Website</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" name="website"placeholder="website">
											
									</div>
								</div>
							
									

									<div class="form-group">
										<label class="col-lg-2 control-label">Company Name</label>

										<div class="col-lg-4">
											<input type="text" placeholder="company name" name="companyname" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label">Landline No</label>

										<div class="col-lg-4">
											<input type="text" placeholder="landlineno"	name="landlineno" class="form-control">
										</div>
									</div>
								</div>

									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<input class="btn btn-sm btn-white" type="submit" name="button" value="Add">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

						
 <form class="form-horizontal" method="POST"  action="CRUDoperation.php" >
		<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>List Display</h5>

						</div>
						<div class="ibox-content">
							
							<div class="table-responsive">
								<table
									class="table table-striped table-bordered table-hover dataTables-example">
									<thead>
										<tr>
											<th>Name</th>
											<th>Tel No</th>
											<th>DOB</th>
											<th>Address</th>			
											<th>WebSite</th>
											<th>Company Name</th>
											<th>Landline No</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
								<tbody>
					<?php
					
	// write a query to select records by userid 
	// use while loop to display all records and use mysql_fetch_array to fetch the result of query 
	
	
	 	
?>
														<tr class="gradeX">
											<td><?php // fetch the value of variable name  ?></td>
											<td><?php // fetch the value of variable telno ?></td>
											<td><?php // fetch the value of variable dob  ?></td>
											<td class="center"><?php // fetch the value of variable address ; ?></td>											
											<td class="center"><?php // fetch the value of variable website  ?></td>
											<td class="center"><?php // fetch the value of variable  company name ?></td>
			                                <td class="center"><?php// fetch the value of variable landlineno ?></td>											
											<th>
											<input type="hidden" name="edit_id" value="<?php echo $row['contactid']?>" />
											 <input class="btn btn-primary btn-xs"  type="submit" name="button" value="edit"></th>
										 
												
											
											<th>
												<input type="hidden" name="delete_id" value="<?php echo $row['contactid']?>" />
											 <input class="btn btn-primary btn-xs"  type="submit" name="button" value="delete"></th>
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
		
		
		<div class="col-lg-offset-2 col-lg-10">
									
										<button class="btn btn-sm btn-white" type="submit" name="button" value="logout">Logout</button>
									</div>	
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
