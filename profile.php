<?php include "header.php"; ?>

	<!-- Container -->
	<div class="container px-4">
		<h1>Profile</h1>

		<div class="row g-5">
			<!-- List Items -->
			<div class="card col-sm-12 col-md-6 col-lg-4 blood-list-item">
			  <div class="card-body text-center">
			  	<img src="assets/images/default-avatar.jpg" class="rounded w-75 mb-3" >
			    <h5 class="card-title">Mr. Jobbar Hasan (O+)</h5>
			    <p class="card-text"></p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item"><b>Email:</b> <a href="mailto:test@gmail.com">test@gmail.com</a></li>
			    <li class="list-group-item"><b>Phone No:</b> <a href="tel:017777777777">01777777777</a></li>
			    <li class="list-group-item"><b>Address:</b>Khulna, Bangladesh</li>
			  </ul>
			  <div class="card-body">
			    <a href="" class="btn btn-sm btn-success">
	        		<i class="fa-solid fa-pen-to-square"></i> Edit
	        	</a>
	        	<a href="" class="btn btn-sm btn-danger">
	        		<i class="fa-solid fa-trash"></i> Delete
	        	</a>
			</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-8">
				<form action="">
					<div class="row gy-2 mb-4">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<label for="uname" class="form-label">Name</label>
							<input type="text" id="uname" name="uname" value="Mr. Jobbar Hasan" class="form-control" disabled>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<label for="suername" class="form-label">Username</label>
							<input type="text" id="suername" name="surename" value="@jobbar" class="form-control" disabled>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<label for="email" class="form-label">Email</label>
							<input type="email" id="email" name="email" value="name@example.com" class="form-control" disabled>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<label for="uphone_no" class="form-label">Phone Number</label>
							<input type="text" id="uphone_no" name="uphone_no" value="+880 1929045007" class="form-control" disabled>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<label for="ublood_group" class="form-label">Blood Group</label>
							<input type="text" id="ublood_group" name="ublood_group" value="O+" class="form-control" disabled>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<label for="uzilla" class="form-label">Zilla</label>
							<input type="text" id="uzilla" name="uzilla" value="Jessore" class="form-control" disabled>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<label for="uvillage" class="form-label">Village</label>
							<input type="text" id="uvillage" name="uvillage" value="Shonkarpur,jessore" class="form-control" disabled>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<label for="udivision" class="form-label">Division</label>
							<input type="text" id="udivision" name="udivision" value="Khulna" class="form-control" disabled>
						</div>
					</div>
				</form>
			</div>
		</div>


		<div class="row mt-4">
			<h2>Donation details</h2>
			<form class="form-inline">
			  <div class="form-group mb-2">
			    <label for="donation-date" class="sr-only">Donation Date</label>
			    <input type="datetime-local" name="donation-dt" class="form-control" id="donation-date">
			  </div>

			  <div class="form-group">
			    <label for="doantion-note">Note</label>
			    <textarea class="form-control" id="doantion-note" rows="3"></textarea>
			  </div>

			  <input type="submit" name="add-d-btn"  class="btn btn-primary my-2" value="Add Donation">
			</form>
		</div>

		<div class="row">
			<div class="card">
				<div class="card-header">Donation List</div>
				<div class="card-body">
				<!-- users datatable -->
				<table id="userdatatable" class="table table-striped" style="width:100%">
			        <thead>
			            <tr>
			                <th>ID</th>
			                <th>Donation Date</th>
			                <th>Donation Note</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>05</td>
			                <td>2011-04-25</td>
			                <td>Note here</td>
			                <td>
			                	<a href="" class="btn btn-sm btn-success">
			                		<i class="fa-solid fa-pen-to-square"></i> Edit
			                	</a>
			                	<a href="" class="btn btn-sm btn-danger">
			                		<i class="fa-solid fa-trash"></i> Delete
			                	</a>
			                </td>
			            </tr>
			          
			           
			        </tbody>
			        <tfoot>
			            <tr>
			                <th>ID</th>
			                <th>Donation Date</th>
			                <th>Donation Note</th>
			                <th>Action</th>
			            </tr>
			        </tfoot>
			    </table>
				</div>
			</div>
		</div>

		
	</div>

<?php include "footer.php"; ?>