<template>
    <div class="mt-180">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.</div>
                        <div class="card-body">

                            <div v-if="success" class="alert alert-success" role="alert">
                                Your message was send successfully!
                            </div>

                            <form @submit.prevent="submitForm" class="mt-10">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input v-model="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                                </div>
                                <div class="form-group mt-1">
                                    <label for="email">Email address</label>
                                    <input v-model="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea v-model="message" class="form-control" id="message" rows="6" required></textarea>
                                </div>
                                <div class="mx-auto">
                                    <button type="submit" class="btn btn-primary text-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                        <div class="card-body">
                            <p>3 rue des Champs Elysées</p>
                            <p>75008 PARIS</p>
                            <p>France</p>
                            <p>Email : email@example.com</p>
                            <p>Tel. +33 12 56 11 51 84</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Contact",
    data() {
        return {
            name: "",
            email: "",
            message: "",
            success: false, // New property to track success state
        };
    },
    methods: {
        submitForm() {
            const formData = {
                name: this.name,
                email: this.email,
                text: this.message,
            };

            axios.post("/contact/store", formData)
                .then(response => {
                    console.log(response.data); // Handle success
                    this.success = true; // Set success to true
                    this.resetForm(); // Reset the form
                })
                .catch(error => {
                    console.error(error); // Handle error
                    // Optionally, show an error message to the user
                });
        },
        resetForm() {
            // Reset form fields
            this.name = "";
            this.email = "";
            this.message = "";

            // Hide success message after a few seconds
            setTimeout(() => {
                this.success = false;
            }, 5000); // Adjust the duration as needed
        },
    },
};
</script>

<style scoped>
/* Add your component-specific styles here if needed */
</style>
