<template>
        <span class="badge badge-pill badge-danger align-top">{{ cartItemCount }}</span>
</template>

<script>
export default {
    data() {
        return {
            cartItemCount: 0,
        };
    },
    mounted() {
        this.fetchCartItemCount();
    },
    methods: {
        async fetchCartItemCount() {
            try {
                const response = await axios.get('/countCartItems');
                this.cartItemCount = parseInt(response.data[0], 10);
            } catch (error) {
                console.error('Error fetching cart item count', error);
            }
        },
    },
};
</script>

<style scoped>

</style>
