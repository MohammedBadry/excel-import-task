<html>
	<head>
		<title>All Orders</title>
		<link rel="stylesheet" href="/<?=BASE_URL;?>/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="/<?=BASE_URL;?>/assets/css/dashlite.css?ver=2.9.1">
		<link id="skin-default" rel="stylesheet" href="/<?=BASE_URL;?>/assets/css/theme.css?ver=2.9.1">
	</head>
	<body>
		<div class="nk-app-root">
			<!-- main @s -->
			<div class="nk-main ">
				<!-- wrap @s -->
				<div class="nk-wrap ">
					<!-- content @s -->
					<div class="nk-content ">
						<div class="container-fluid">
							<div class="nk-content-inner">
								<div class="nk-content-body">
									<div class="components-preview wide-md mx-auto">
										<div class="nk-block-head nk-block-head-lg wide-sm">
											<div class="nk-block-head-content">
												<h2 class="nk-block-title fw-normal">Import Orders</h2>
												<a href="/<?=BASE_URL;?>">Home Page</a>
											</div>
										</div><!-- .nk-block-head -->
										<div class="nk-block nk-block-lg">
											<div class="card card-preview">
												<div class="card-inner">
	                                                <div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th scope="col">ID</th>
																	<th scope="col">E</th>
																	<th scope="col">Username</th>
																	<th scope="col">Address</th>
																	<th scope="col">Product Name</th>
																	<th scope="col">Price</th>
																	<th scope="col">Quantity</th>
																	<th scope="col">Sub Total</th>
																	<th scope="col">Total</th>
																	<th scope="col">Date</th>
																</tr>
															</thead>
															<tbody>
																<?php 
																	foreach ($orders as $list)
																	{
																		echo '<tr>
																			<td>'.$list['id'].'</td>
																			<td>'.$list['e'].'</td>
																			<td>'.$list['name'].'</td>
																			<td>'.$list['address'].'</td>
																			<td>'.$list['product_name'].'</td>
																			<td>'.$list['price'].'</td>
																			<td>'.$list['quantity'].'</td>
																			<td>'.$list['sub_total'].'</td>
																			<td>'.$list['total'].'</td>
																			<td>'.$list['date'].'</td>
																		</tr>';
																	}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div><!-- .card-preview -->
										</div><!-- .nk-block -->
									</div><!-- .components-preview -->
								</div>
							</div>
						</div>
					</div>
					<!-- content @e -->
				</div>
				<!-- wrap @e -->
			</div>
			<!-- main @e -->
		</div>

	</body>
</html>
