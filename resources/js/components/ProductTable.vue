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
                <td>{{ product.sale_price }}</td>
                <td><img :src="product.image_name" alt="Product Image" style="max-width: 50px;"></td>
                <td>
                    <!-- Edit button -->
                    <button @click="editProduct(product.id)" class="btn btn-primary">Edit</button>

                    <!-- Delete button (You may want to show a confirmation modal before actual deletion) -->
                    <button @click="deleteProduct(product.id)" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        products: Array,
        editProduct: Function,
        deleteProduct: Function,
    },
    methods: {
        editProduct(id) {
            // Add your edit product logic here
            console.log(`Edit product with ID: ${id}`);
        },
        deleteProduct(id) {
            // Add your delete product logic here
            console.log(`Delete product with ID: ${id}`);
        },
    }
};
</script>
