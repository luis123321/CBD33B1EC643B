<!-- ADS SECTION -->
<div id="AdSection">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3">
					<p class="adimaget">AD IMAGE</p>
				</div>
				<div class="col-md-12">
					<input type="image" name="" value="" placeholder="IMAGE" id="addisplay" src="banner.jpg">
						<a class="btn btn-default hidden-xs" href="#" role="button" id="btnselect">
						<h3 id="lblselect">SELECT</h3>
						</a>
						<div class="col-xs-3">
							<button class="btn btn-default visible-xs" type="submit" id="btn-movil"><span class="glyphicon glyphicon-open-file"></span></button>
						</div>
				</div>

				</div>
			</div>
		</div>
	</div>
<!-- END ADS SECTION -->
<div id="FontPageSection" class="hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-12" id="fpsection">
				<p class="fptitle">FONT PAGE TEXT</p>
				<div class="col-md-4">
					<p class="fptiles">YourLoteria</p>
					<textarea readonly class="form-control" rows="4"></textarea>
					<div class="btncenter">
						<button class="btn btn-default" type="submit" id="editbtn" data-toggle="modal" data-target="#modalno1">EDIT</button>
					</div>
				</div>
				<div class="col-md-4">
					<p class="fptiles">Dominique Daniels Returns</p>
					<textarea readonly class="form-control" rows="4"></textarea>
					<div class="btncenter">
						<button class="btn btn-default" type="submit" id="editbtn" data-toggle="modal" data-target="#modalno2">EDIT</button>
					</div>
				</div>
				<div class="col-md-4">
					<p class="fptiles">Lorem</p>
					<textarea readonly class="form-control" rows="4"></textarea>
					<div class="btncenter">
						<button class="btn btn-default test" type="button" id="editbtn" data-toggle="modal" data-target="#modalno3">EDIT</button>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'modals_common.php'; ?>
