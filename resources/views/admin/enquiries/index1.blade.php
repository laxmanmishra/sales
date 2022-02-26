@extends('layouts.admin')
@section('content')
@can('product_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <h2>Enquiry Entry</h2>
            <!-- <a class="btn btn-success" href="{{ route("admin.products.create") }}">
                {{ trans('global.add') }} {{ trans('global.product.title_singular') }}
            </a> -->
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        <!-- {{ trans('global.product.title_singular') }} {{ trans('global.list') }} -->
        Enquiry Entry
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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fa fa-sliders" aria-hidden="true"></i> Prospect & Enquiry Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Enquiry For</small>
                                    <div class="col-sm-8">
                                        <div class="">
                                            <label class=""><input type="radio"  name="fav" > New Tractor</label>
                                            <label class=""><input type="radio"  name="fav" > Old Tractor</label>
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Name</small>
                                    <div class="col-sm-8"><input type="text" class="w-100" placeholder=""></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Father's Name</small>
                                    <div class="col-sm-8"><input type="text" class="w-100" placeholder=""></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Customer Name</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Local</option>
                                            <option>Local</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Customer Category</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Normal</option>
                                            <option>Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">DSP</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Enquiry Date</small>
                                    <div class="col-sm-8"><input type="date" class="w-100" placeholder=""></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Land Availble(in Acres)</small>
                                    <div class="col-sm-8"><input type="text" class="w-100" placeholder=""></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Distt</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select Distt</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Tehsil</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select Tehsil</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Block</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Village</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select Village</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Address</small>
                                    <div class="col-sm-8"><input type="text" class="w-100" placeholder=""></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Expected Delivery Date</small>
                                    <div class="col-sm-8"><input type="date" class="w-100" placeholder=""></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Old Tractor Owend</small>
                                    <div class="col-sm-8">
                                        <div class="">
                                            <label class=""><input type="radio"  name="fav2" > Yes</label>
                                            <label class=""><input type="radio"  name="fav2" > No</label>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">pincode</small>
                                    <div class="col-sm-8"><input type="date" class="w-100" placeholder=""></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Mobile No.</small>
                                    <div class="col-sm-8"><input type="date" class="w-100" placeholder=""></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Alt Contact No</small>
                                    <div class="col-sm-8">
                                        <input type="date" class="w-100" placeholder="">
                                        <label><input type="checkbox" name=""> PP</label>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Land Doc Availble</small>
                                    <div class="col-sm-8">
                                        <div class="">
                                            <label class=""><input type="radio"  name="fav2" > Yes</label>
                                            <label class=""><input type="radio"  name="fav2" > No</label>
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Margin Money Availble (Rs.)</small>
                                    <div class="col-sm-8"><input type="date" class="w-100" placeholder=""></div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Budget</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
       </div>


       <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fa fa-sliders" aria-hidden="true"></i> Source of Enquiry</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Enquiry Primery Source</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Enquiry Sub Source</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Enquiry Remarks</small>
                                    <div class="col-sm-8">
                                        <textarea class="w-100" style="min-height: 50px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fa fa-sliders" aria-hidden="true"></i> More Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Application 1</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Application 2</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Application 3</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">1st Preferred Model</small>
                                    <div class="col-sm-8">
                                        <div class="d-flex">
                                            <select class="w-25">
                                                <option>Select</option>
                                                <option>one</option>
                                                <option>teo</option>
                                            </select>
                                            <select class="w-75">
                                                <option>Select</option>
                                                <option>one</option>
                                                <option>teo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">2st Preferred Model</small>
                                    <div class="col-sm-8">
                                        <div class="d-flex">                                            
                                            <select class="w-25">
                                                <option>Select</option>
                                                <option>one</option>
                                                <option>teo</option>
                                            </select>
                                            <select class="w-75">
                                                <option>Select</option>
                                                <option>one</option>
                                                <option>teo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">3st Preferred Model</small>
                                    <div class="col-sm-8">
                                        <div class="d-flex">                                            
                                            <select class="w-25">
                                                <option>Select</option>
                                                <option>one</option>
                                                <option>teo</option>
                                            </select>
                                            <select class="w-75">
                                                <option>Select</option>
                                                <option>one</option>
                                                <option>teo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">4st Preferred Model</small>
                                    <div class="col-sm-8">
                                        <div class="d-flex">                                            
                                            <select class="w-25">
                                                <option>Select</option>
                                                <option>one</option>
                                                <option>teo</option>
                                            </select>
                                            <select class="w-75">
                                                <option>Select</option>
                                                <option>one</option>
                                                <option>teo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Influencer Category</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Select Influencer</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Conversion Expacted</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Enquiry Status</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Open</option>
                                            <option>Close</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fa fa-sliders" aria-hidden="true"></i> Finance Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Mode of Finance</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row mb-1">
                                    <small class="col-sm-4 col-form-label">Bank</small>
                                    <div class="col-sm-8">
                                        <select class="w-100">
                                            <option>Select</option>
                                            <option>one</option>
                                            <option>teo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="text-right">
            <button class="btn btn-primary">Save </button>
        </div>







</div>
@section('scripts')
@parent

@endsection
@endsection