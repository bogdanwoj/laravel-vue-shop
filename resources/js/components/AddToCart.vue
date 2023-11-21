<template>
    <div>
        <hr>
        <div class="btn btn-warning tclassNameenter" v-on:click.prevent="addProductToCart()">
            Add to cart
        </div>
    </div>
</template>

<script>
export default {
    props  : ['productId', 'userId'],
    methods: {
        async addProductToCart() {
            try {
                if (this.userId === 0) {
                    alert('You need to login to add this product to the cart');
                    return;
                }

                let response = await axios.post('/cart', {
                    'product_id': this.productId
                });
                console.log(response.data);
                alert('Product added to cart successfully');
            } catch (error) {
                console.error('Error adding product to cart:', error);
                alert('Error adding product to cart. Please try again later.');
            }
        }
    },
    mounted() {
        console.log('Component mounted.');
    }
};
</script>
