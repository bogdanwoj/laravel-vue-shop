<template>
    <div>
        <h2 class="text-danger">Edit Contact</h2>
        <div class="row">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" v-model="contact.name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" v-model="contact.email" required>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Message</label>
                <textarea class="form-control" v-model="contact.text" rows="3" required></textarea>
            </div>

            <button @click="saveChanges" class="btn btn-primary">Save Changes</button>
        </div>

    </div>



</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            contact: {
                id: null,
                name: '',
                email: '',
                text: '',
            },
        };
    },
    mounted() {
        this.fetchContactDetails();
    },
    methods: {
        fetchContactDetails() {
            const contactId = this.$route.params.id;

            axios.get(`/contacts/${contactId}`)
                .then(response => {
                    this.contact = response.data.contact;
                })
                .catch(error => {
                    console.error('Error fetching contact details for editing:', error);
                });
        },
        saveChanges() {
            const contactId = this.$route.params.id;
            axios.put(`/contacts/${contactId}`, this.contact)
                .then(response => {
                    console.log('Contact details updated successfully:', response.data);
                    this.$router.push({ name: 'admin.dashboard' });
                })
                .catch(error => {
                    console.error('Error updating contact details:', error);
                });
        },
    },
};
</script>
