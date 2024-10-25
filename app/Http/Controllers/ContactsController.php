<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $typeContacts = Enquiry::all();
        $generalContacts = Inquiry::all();

        return view('admin.enquiry', compact('contacts', 'typeContacts', 'generalContacts'));
    }

    // Edit Method
    public function edit($id, $type)
    {
        if ($type === 'contact') {
            $record = Contact::findOrFail($id);
        } elseif ($type === 'enquiry') {
            $record = Enquiry::findOrFail($id);
        } elseif ($type === 'inquiry') {
            $record = Inquiry::findOrFail($id);
        } {
            $record = Inquiry::findOrFail($id);
        }

        return view('admin.edit', compact('record', 'type'));
    }

    // Update Method
    public function update(Request $request, $id, $type)
    {
        $data = $request->only(['name', 'email', 'mobile', 'subject']);

        if ($type === 'contact') {
            $record = Contact::findOrFail($id);
        } elseif ($type === 'enquiry') {
            $record = Enquiry::findOrFail($id);
        } elseif ($type === 'inquiry') {
            $record = Inquiry::findOrFail($id);
        }  {
            $record = Inquiry::findOrFail($id);
        }

        $record->update($data);

        return redirect()->route('admin.enquiry')->with('success', ucfirst($type) . ' updated successfully.');
    }

    // Destroy Method
    public function destroy($id, $type)
    {
        if ($type === 'contact') {
            $record = Contact::findOrFail($id);
        } elseif ($type === 'enquiry') {
            $record = Enquiry::findOrFail($id);
        } else if ($type === 'inquiry') {
            $record = Inquiry::findOrFail($id);
        }{
            $record = Inquiry::findOrFail($id);
        }

        $record->delete();

        return redirect()->route('admin.enquiry')->with('success', ucfirst($type) . ' deleted successfully.');
    }
}
