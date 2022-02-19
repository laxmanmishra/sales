<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enquiry;

class EnquiryController extends Controller
{
    public function index()
    {

        $enquiries = Enquiry::all();

        return view('admin.enquiries.index', compact('enquiries'));
    }

    public function create()
    {

        return view('admin.enquiries.create');
    }

    public function store(StoreEnquiryRequest $request)
    {

        $enquiry = Enquiry::create($request->all());

        return redirect()->route('admin.enquiries.index');
    }

    public function edit(Enquiry $enquiry)
    {

        return view('admin.enquiries.edit', compact('enquiry'));
    }

    public function update(UpdateEnquiryRequest $request, Enquiry $enquiry)
    {

        $enquiry->update($request->all());

        return redirect()->route('admin.enquiries.index');
    }

    public function show(Enquiry $enquiry)
    {

        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function destroy(Enquiry $enquiry)
    {

        $enquiry->delete();

        return back();
    }

    public function massDestroy(MassDestroyEnquiryRequest $request)
    {
        Enquiry::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
