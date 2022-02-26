@extends('layouts.admin')
@section('content')
<!-- <div class="content">
    <div class="row">
        <div class="col-lg-12">
            Home
        </div>
    </div>
</div> -->
<div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <h2>Dashboard</h2>
        </div>
    </div>
<div class="card">
    <!-- <div class="card-header">Enquiry Update & Followup</div> -->


    <div class="card-body">

    	<div class="row">
    		<div class="col-md-6">
    			<div class="card">
    				<div class="card-header">
    					<h5><i class="fa fa-sliders" aria-hidden="true"></i> Upcomming Deals</h5>
    				</div>
    				<div class="card-body">
    					<div class="table-responsive">
				            <table class=" table table-bordered table-striped table-hover datatable" id="example">
				                <thead>
				                    <tr>
				                        <th>Farmer Name</th>
				                        <th>DSP Name</th>
				                        <th>E. Delivery Date</th>
				                        <th>Deal Priority</th>
				                    </tr>
				                </thead>
				                <tbody>
				                	<tr>
				                		<td>Airi Satou</td>
				                		<td>Accountant</td>
				                		<td>2008/11/28</td>
				                		<td>Veri High</td>
				                	</tr>
				                	<tr>
				                		<td>Angelica Ramos </td>
				                		<td>Chief Executive</td>
				                		<td>2009/10/09</td>
				                		<td>Veri High</td>
				                	</tr>

				                </tbody>
				            </table>
				        </div>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="card">
    				<div class="card-header">
    					<h5><i class="fa fa-sliders" aria-hidden="true"></i> Lost Deals</h5>
    				</div>
    				<div class="card-body">
    					<div class="table-responsive">
				            <table class=" table table-bordered table-striped table-hover datatable" id="example">
				                <thead>
				                    <tr>
				                        <th>Farmer Name</th>
				                        <th>DSP Name</th>
				                        <th>E. Delivery Date</th>
				                        <th>Deal Priority</th>
				                    </tr>
				                </thead>
				                <tbody>
				                	<tr>
				                		<td>Airi Satou</td>
				                		<td>Accountant</td>
				                		<td>2008/11/28</td>
				                		<td>Veri High</td>
				                	</tr>
				                	<tr>
				                		<td>Angelica Ramos </td>
				                		<td>Chief Executive</td>
				                		<td>2009/10/09</td>
				                		<td>Veri High</td>
				                	</tr>

				                </tbody>
				            </table>
				        </div>
    				</div>
    			</div>
    		</div>

    		<div class="col-md-12">

    			<h2>Recent Updates</h2>
    			<div class="card">
    				<div class="card-header">
    					<h5><i class="fa fa-sliders" aria-hidden="true"></i> Latest Five</h5>
    				</div>
    				<div class="card-body">
    					<ul class="nav nav-tabs">
						    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_Sales">Sales</a></li>
						    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_Quotations">Quotations</a></li>
						    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_Purchases">Purchases</a></li>
						    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_Transfers">Transfers</a></li>
						    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_Customers">Customers</a></li>
						    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_Customers">Suppliers</a></li>
						  </ul>

						  <!-- Tab panes -->
						  <div class="tab-content">
						    <div id="tab_Sales" class="container tab-pane active">
						      <div class="table-responsive">
					            <table class=" table table-bordered table-striped table-hover datatable" id="example">
					                <thead>
					                    <tr>
					                    	<th width="10">#</th>
					                        <th>Date</th>
					                        <th>Reference No.</th>
					                        <th>Customer</th>
					                        <th>Status</th>
					                        <th>Total</th>
					                        <th>Payment Status</th>
					                        <th>Paid</th>
					                    </tr>
					                </thead>
					                <tbody>
					                	<tr>
					                		<td>1</td>
					                		<td>05/02/2022 18:09</td>
					                		<td>IN2065</td>
					                		<td>lalit kuamr sahu</td>
					                		<td><span class="badge badge-success">Completed</span></td>
					                		<td>Rs. 750.00</td>
					                		<td><span class="badge badge-success">Paid</span></td>
					                		<td>Rs. 750.00</td>
					                	</tr>
					                	<tr>
					                		<td>1</td>
					                		<td>05/02/2022 18:09</td>
					                		<td>IN2066</td>
					                		<td>Bhupendra Panday</td>
					                		<td><span class="badge badge-warning">Pending</span></td>
					                		<td>Rs. 2,600.00</td>
					                		<td><span class="badge badge-danger">Due</span></td>
					                		<td>Rs. 0.00</td>
					                	</tr>
					                	<tr>
					                		<td>1</td>
					                		<td>05/02/2022 18:09</td>
					                		<td>IN2065</td>
					                		<td>lalit kuamr sahu</td>
					                		<td><span class="badge badge-success">Completed</span></td>
					                		<td>Rs. 750.00</td>
					                		<td><span class="badge badge-success">Paid</span></td>
					                		<td>Rs. 750.00</td>
					                	</tr>
					                	<tr>
					                		<td>1</td>
					                		<td>05/02/2022 18:09</td>
					                		<td>IN2065</td>
					                		<td>lalit kuamr sahu</td>
					                		<td><span class="badge badge-success">Completed</span></td>
					                		<td>Rs. 750.00</td>
					                		<td><span class="badge badge-success">Paid</span></td>
					                		<td>Rs. 750.00</td>
					                	</tr>

					                </tbody>
					            </table>
					        </div>
						    </div>
						    <div id="tab_Quotations" class="container tab-pane fade">
						      <h3>Menu 1</h3>
						      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						    </div>
						    <div id="tab_Purchases" class="container tab-pane fade">
						      <p>...</p>
						    </div>
						    <div id="tab_Transfers" class="container tab-pane fade">
						      <p>...</p>
						    </div>
						    <div id="tab_Customers" class="container tab-pane fade">
						      <p>...</p>
						    </div>
						    <div id="tab_Customers" class="container tab-pane fade">
						      <p>...</p>
						    </div>

						  </div>

    				</div>
    			</div>
    			
    		</div>

    		<div class="col-md-6">
    			<div class="card">
    				<div class="card-header">
    					<h5><i class="fa fa-line-chart" aria-hidden="true"></i> Best Sellers (Feb-2022)</h5>
    				</div>
    				<div class="card-body">
    					aaaaaaaa
    				</div>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="card">
    				<div class="card-header">
    					<h5><i class="fa fa-line-chart" aria-hidden="true"></i> Best Sellers (Jan-2022)</h5>
    				</div>
    				<div class="card-body">
    					aaaaaaaaa
    				</div>
    			</div>
    		</div>
    		<div class="col-md-12">
    			<div class="card">
    				<div class="card-header">
    					<h5>Enquiry Vs Lost Enquiry Vs Delivery Graph</h5>
    				</div>
    				<div class="card-body">
    					aaaaaaaaa
    				</div>
    			</div>
    		</div>

    	</div>


    </div>
</div>

@endsection
@section('scripts')
@parent
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        select: true
    });
});

</script>
@endsection