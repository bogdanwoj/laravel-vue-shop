<?php

// app/Http/Controllers/AdminDashboardController.php

    namespace App\Http\Controllers;

    use App\Models\Contact;
    use App\Models\Product;
    use Illuminate\Http\Request;

    class AdminDashboardsController extends Controller
    {
        public function index()
        {
            // Fetch necessary data for the admin dashboard
            $contacts = Contact::all(); // Assuming 'Contact' is your model
            $products = Product::all(); // Assuming 'Product' is your model

            return view('pages.adminDashboard', [
                'contacts' => $contacts,
                'products' => $products,
            ]);
        }
    }
