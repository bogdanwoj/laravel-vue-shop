
require('./bootstrap');
// Import the necessary libraries
import { createApp } from 'vue';
import AddToCart from './components/AddToCart.vue';
import Cart from './components/Cart.vue';
import Checkout from './components/Checkout.vue';
import BadgeIcon from "./components/BadgeIcon";
import Contact from "./components/Contact.vue";
import ProductTable from "./components/ProductTable.vue";
import ContactTable from "./components/ContactTable.vue";



// Create the app instance
const app = createApp({});

// Register the 'add-to-cart' component globally
app.component('add-to-cart', AddToCart);
app.component('cart', Cart);
app.component('checkout', Checkout);
app.component('badge-icon', BadgeIcon);
app.component('contact', Contact);
app.component('ContactTable', ContactTable);
app.component('ProductTable', ProductTable);

// Mount the app to the specified element with ID 'app' in your HTML
app.mount("#app");

