@extends('layouts.admin')
@section('content')
@can('product_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.products.create") }}">
                {{ trans('global.add') }} {{ trans('global.product.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('global.product.title_singular') }} {{ trans('global.list') }}
    </div>


    <div class="card-body">

	    <div class="row">
	    	<div class="col-md-4">
	    		<label class="">
	    			State
	    			<select class="form-control">
	    				<option>Chhattisgarh</option>
	    			</select>
	    		</label>
	    	</div>
	    	<div class="col-md-4">
	    		<label class="">
	    			Distt
	    			<select class="form-control">
	    				<option>Drug</option>
	    			</select>
	    		</label>
	    	</div>
	    	<div class="col-md-4">
	    		<label class="">
	    			Branch
	    			<select class="form-control">
	    				<option>Nawagarh</option>
	    			</select>
	    		</label>
	    	</div>
	    </div>

	    <hr>

	    <div class="card p-4">
	    	<form class="form-row">			  
			    <div class="form-group col-md-6">
			      <label >Prospect Name</label>
			      <input type="text" class="form-control" placeholder="">
			    </div>
			    <div class="form-group col-md-6">
			      <label >Father Name</label>
			      <input type="email" class="form-control" placeholder="">
			    </div>
			    <div class="form-group col-md-6">
			      <label >Enquiry Date</label>
			      <input type="email" class="form-control" placeholder="">
			    </div>
			    <div class="form-group col-md-6">
			      <label >Contact No.</label>
			      <input type="email" class="form-control" placeholder="">
			    </div>
			  
			  <button type="submit" class="btn btn-primary mr-2">Search</button>
			  <button type="submit" class="btn btn-primary mr-2">Export</button>
			  <button type="submit" class="btn btn-primary mr-2">Save</button>
			</form>
	    </div>
	    <div class="card p-4">
	    	<h3>Upload Priority Leads</h3>
	    	<input type="file" name="" class="form-control" style="height: 42px;">
			  <button type="submit" class="btn btn-primary mt-2 mr-2">Upload</button>

		    <div class=" p-4">
		    	<label class="d-inline"><input type="radio" id="html" name="fav" > Priority Leads</label>
			  	<label class="d-inline"><input type="radio" id="css" name="fav" > Other Leads</label>
			  	<label class="d-inline"><input type="radio" id="javascript" name="fav" > Secondary Leads</label>
		    </div>
	    </div>

        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">
                        	Sno
                        </th>
                        <!-- <th>
                            {{ trans('global.product.fields.name') }}
                        </th>
                        <th>
                            {{ trans('global.product.fields.description') }}
                        </th>
                        <th>
                            {{ trans('global.product.fields.price') }}
                        </th> -->
                        <th>Prospect Name</th>
                        <th>Contact No</th>
                        <th>Village (Tehsil)</th>
                        <th>Enquiry Date</th>
                        <th>Expacted Delivery Date</th>
                        <th>No of Times Revised</th>
                        <th>Status</th>
                        <th>Margin Money (Avl)</th>
                        <th>Field Accom.</th>
                        <th>Remarks</th>
                        <th>Plan</th>
                        <th>Plan Date</th>
                        <th>Action Taken</th>
                        <th>Action Date</th>
                        <th>Next Plan</th>
                        <th>Next Plan Date</th>
                        <th>Edit</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                		<td>1</td>
                		<td>Chandrabhan Chandrakar</td>
                		<td><input type="number" name="" value="9999999999" placeholder="9999999999"></td>
                		<td>Shkhatal (Bemetara)</td>
                		<td>09-Dec-2021</td>
                		<td>
                			<select>
                				<option>9-Fab-2021</option>
                				<option>10-Fab-2021</option>
                				<option>11-Fab-2021</option>
                			</select>
                		</td>
                		<td>4</td>
                		<td>Hot</td>
                		<td>0</td>
                		<td><input type="checkbox" name=""></td>
                		<td><textarea style="min-height: 50px;"></textarea></td>
                		<td></td>
                		<td></td>
                		<td>
                			<select>
                				<option>select</option>
                				<option>one</option>
                				<option>two</option>
                				<option>three</option>
                			</select>
                		</td>
                		<td>
                			<select>
                				<option>select</option>
                				<option>one</option>
                				<option>two</option>
                				<option>three</option>
                			</select>
                		</td>
                		<td>
                			<select>
                				<option>Next Plan</option>
                				<option>one</option>
                				<option>two</option>
                				<option>three</option>
                			</select>
                		</td>
                		<td>
                			<select>
                				<option>Next Plan Date</option>
                				<option>19-Fab-2021</option>
                				<option>19-Fab-2021</option>
                				<option>18-Fab-2021</option>
                			</select>
                		</td>
                		<td><a href="#" class="btn btn-primary">Edit</a></td>
                		<td>Village Data</td>
                	</tr>

                    @foreach($enquiries as $key => $product)
                        <tr data-entry-id="{{ $product->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $product->name ?? '' }}
                            </td>
                            <td>
                                {{ $product->description ?? '' }}
                            </td>
                            <td>
                                {{ $product->price ?? '' }}
                            </td>
                            <td>
                                @can('product_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.products.show', $product->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('product_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.products.edit', $product->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('product_delete')
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('scripts')
@parent

@endsection
@endsection