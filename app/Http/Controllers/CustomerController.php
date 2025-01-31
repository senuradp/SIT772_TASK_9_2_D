<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\CustomerContact;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customer_form');
    }

    public function store(Request $request)
    {
        // Validate all inputs
        $validated = $request->validate([
            'CUSTOMER_ID' => 'required|max:20|unique:customers',
            'FIRST_NAME' => 'required|max:50',
            'LAST_NAME' => 'required|max:50',
            'STREET' => 'required|max:100',
            'CITY' => 'required|max:50',
            'POSTAL_CODE' => 'required|max:10',
            'EMAIL' => 'required|email:rfc,dns|max:100|unique:customer_contacts',
            'PHONE' => 'required|max:15',
        ]);

        // Insert into CUSTOMER table
        $customer = Customer::create([
            'CUSTOMER_ID' => $validated['CUSTOMER_ID'],
            'FIRST_NAME' => $validated['FIRST_NAME'],
            'LAST_NAME' => $validated['LAST_NAME'],
        ]);

        // Insert into CUSTOMER_ADDRESS table
        CustomerAddress::create([
            'CUSTOMER_ID' => $validated['CUSTOMER_ID'],
            'STREET' => $validated['STREET'],
            'CITY' => $validated['CITY'],
            'POSTAL_CODE' => $validated['POSTAL_CODE'],
        ]);

        // Insert into CUSTOMER_CONTACT table
        CustomerContact::create([
            'CUSTOMER_ID' => $validated['CUSTOMER_ID'],
            'EMAIL' => $validated['EMAIL'],
            'PHONE' => $validated['PHONE'],
        ]);

        return redirect()->route('customer.create')->with('success', 'Customer added successfully!');
    }
}
