<?php

// app/Http/Controllers/AdminDashboardController.php

    namespace App\Http\Controllers;

    use App\Models\Contact;
    use App\Models\Product;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class AdminDashboardsController extends Controller
    {


        public function index()
        {
            // Check if the user is authenticated
            if (Auth::check()) {
                // Check if the authenticated user is an admin
                $isAdmin = Auth::user()->role === 'admin';

                if ($isAdmin) {
                    // Fetch necessary data for the admin dashboard
                    $contacts = Contact::all(); // Assuming 'Contact' is your model
                    $products = Product::all(); // Assuming 'Product' is your model

                    return view('pages.adminDashboard', [
                        'contacts' => $contacts,
                        'products' => $products,
                    ]);
                } else {
                    // If the authenticated user is not an admin, you can redirect or show an error page
                    return redirect()->route('login')->with('error', 'You do not have permission to access the admin dashboard.');
                }
            } else {
                // If the user is not authenticated, redirect to the login page
                return redirect()->route('login');
            }
        }
    }
