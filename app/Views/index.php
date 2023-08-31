<!DOCTYPE html>
<html>
	<head>
		<title>Native PHP Example</title>
		<link rel="stylesheet" href="/<?=BASE_URL;?>/assets/css/dashlite.css?ver=2.9.1">
		<link id="skin-default" rel="stylesheet" href="/<?=BASE_URL;?>/assets/css/theme.css?ver=2.9.1">
	</head>

<body>

	<?php 
		// Get status message 
		if(!empty($_SESSION['success'])){ 
			$statusType = 'alert-success'; 
			$statusMsg = $_SESSION['success']; 
		} elseif(!empty($_SESSION['error'])) {
			$statusType = 'alert-danger'; 
			$statusMsg = $_SESSION['error']; 
		} else {
			$statusType = ''; 
			$statusMsg = ''; 
		}
	?>

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
                                            <a href="/<?=BASE_URL;?>?act=all-orders">Show Orders</a>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-preview">
											<?php if(!empty($statusMsg)){ ?>
											<div class="example-alert">
												<div class="alert <?=$statusType;?> alert-icon alert-dismissible">
													<?=$statusMsg;?>
												</div>
											</div>
											<?php } ?>
                                            <div class="card-inner">
												<form method="post" action="/<?=BASE_URL;?>/?act=import-orders" enctype="multipart/form-data">
                                                <div class="preview-block">
                                                    <div class="row gy-4">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Select File to import</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-file">
                                                                        <input type="file" name="file" class="custom-file-input" id="file">
                                                                        <label class="custom-file-label" for="file">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
													</div>
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
																<button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												</form>
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