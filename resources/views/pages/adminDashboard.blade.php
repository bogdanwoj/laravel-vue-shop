@extends('layouts.app')

@section('content')
    <div class="container mt-10" id="app">
        <h1>Admin Dashboard</h1>

        <!-- Include Vue.js and Your Components -->
        <contact-table :contacts="contacts"></contact-table>
        <product-table :products="products"></product-table>

    </div>
@endsection

<script>
    import ContactTable from "../../js/components/ContactTable";
    import ProductTable from "../../js/components/ProductTable";


    export default {
        components: {
            ProductTable,
            ContactTable,

        },
        data() {
            return {
                contacts: [],

            };
        }
    };
</script>
