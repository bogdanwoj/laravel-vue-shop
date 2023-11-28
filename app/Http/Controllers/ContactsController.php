<?php

    namespace App\Http\Controllers;

    use App\Models\Contact;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class ContactsController extends Controller
    {
        public function indexPage()
        {
            return view('pages.contact');
        }

        public function index()
        {
            if (Auth::check()) {
                // Check if the authenticated user is an admin
                $isAdmin = Auth::user()->role === 'admin';
                if ($isAdmin) {
                    $contacts = Contact::all();

                    return ['contacts' => $contacts];
                } else {
                    // If the authenticated user is not an admin, you can redirect or show an error page
                    return redirect()
                        ->route('login')
                        ->with('error', 'You do not have permission to access the admin dashboard.');
                }
            }

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
            if (Auth::check()) {
                // Check if the authenticated user is an admin
                $isAdmin = Auth::user()->role === 'admin';
                if ($isAdmin) {

                    $contact = Contact::findOrFail($id);

                    return view('pages.editContact', compact('contact'));
                } else {
                    // If the authenticated user is not an admin, you can redirect or show an error page
                    return redirect()
                        ->route('login')
                        ->with('error', 'You do not have permission to access the admin dashboard.');
                }
            }

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
            if (Auth::check()) {
                // Check if the authenticated user is an admin
                $isAdmin = Auth::user()->role === 'admin';
                if ($isAdmin) {

                    $contact = Contact::findOrFail($id);
                    $contact->delete();

                } else {
                    // If the authenticated user is not an admin, you can redirect or show an error page
                    return redirect()
                        ->route('login')
                        ->with('error', 'You do not have permission to access the admin dashboard.');
                }
            }

        }
    }
