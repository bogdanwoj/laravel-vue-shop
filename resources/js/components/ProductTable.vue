<template>
    <div>
        <h2>Products</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Sale Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products" :key="product.id" class="border border-primary">
                <td>{{ product.id }}</td>
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.price }}</td>
                <td><img :src="product.image_name" alt="Product Image" style="max-width: 50px;"></td>
                <td>
                    <!-- Edit button -->
                    <button @click="editProduct(product.id)" class="btn btn-primary">Edit</button>

                    <!-- Delete button (You may want to show a confirmation modal before actual deletion) -->
                    <button @click="deleteProductConfirmation(product.id)" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            products: [],
        };
    },
    mounted() {
        this.fetchProducts();
    },
    methods: {
        fetchProducts() {
            axios.get('/products')
                .then(response => {
                    this.products = response.data.products;
                })
                .catch(error => {
                    console.error('Error fetching products:', error);
                });
        },
        editProduct(id) {
            // Programmatically navigate to the edit route
            window.location.href = `/products/${id}/edit`;
        },
        deleteProductConfirmation(id) {
            if (window.confirm('Are you sure you want to delete this Product?')) {
                this.deleteProduct(id);
            }
        },
        deleteProduct(id) {
            axios.delete(`/products/${id}`)
                .then(response => {
                    console.log(`Product with ID ${id} deleted successfully.`, response.data);

                    // Refresh the current page
                    window.location.reload();
                })
                .catch(error => {
                    console.error(`Error deleting Product with ID ${id}:`, error);
                });
        },
    },
};
</script>
