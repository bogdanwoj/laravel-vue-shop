<?php

    namespace App\Http\Controllers;

    use App\Models\Contact;
    use Illuminate\Http\Request;

    class ContactsController extends Controller
    {
        public function indexPage()
        {
            return view('pages.contact');
        }

        public function index()
        {
            $contacts = Contact::all();

            return ['contacts' => $contacts];
        }

        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'text' => 'required|string',
                'name' => 'required|string',
                'email' => 'required|email',
            ]);

            $contact = new Contact();
            $contact->name = $validatedData['name'];
            $contact->email = $validatedData['email'];
            $contact->text = $validatedData['text'];
            $contact->save();

            return redirect()->route('contacts.index')->with('success', 'Your message was sent successfully!');
        }

        public function edit($id)
        {
            $contact = Contact::findOrFail($id);

            return view('pages.editContact', compact('contact'));
        }

        public function update(Request $request, $id)
        {
            $validatedData = $request->validate([
                'text' => 'required|string',
                'name' => 'required|string',
                'email' => 'required|email',
            ]);

            $contact = Contact::findOrFail($id);
            $contact->name = $validatedData['name'];
            $contact->email = $validatedData['email'];
            $contact->text = $validatedData['text'];
            $contact->save();

            return redirect()->route('admin.dashboard')->with('success', 'Contact updated successfully!');
        }

        public function destroy($id)
        {
            $contact = Contact::findOrFail($id);
            $contact->delete();

        }
    }
