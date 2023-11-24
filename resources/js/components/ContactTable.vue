<template>
    <div>

        <h2>Contacts</h2>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="contact in contacts" :key="contact.id" class="border border-primary">
                <td>{{ contact.id }}</td>
                <td>{{ contact.name }}</td>
                <td>{{ contact.email }}</td>
                <td>{{ contact.text }}</td>
                <td>
                    <button @click="editContact(contact.id)" class="btn btn-primary">Edit</button>
                    <button @click="deleteContactConfirmation(contact.id)" class="btn btn-danger">Delete</button>
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
            contacts: [],
        };
    },
    mounted() {
        this.fetchContacts();
    },
    methods: {
        fetchContacts() {
            axios.get('/contacts')
                .then(response => {
                    this.contacts = response.data.contacts;
                })
                .catch(error => {
                    console.error('Error fetching contacts:', error);
                });
        },
        editContact(id) {
            // Programmatically navigate to the edit route
            window.location.href = `/contacts/${id}/edit`;
        },
        deleteContactConfirmation(id) {
            if (window.confirm('Are you sure you want to delete this contact?')) {
                this.deleteContact(id);
            }
        },
        deleteContact(id) {
            axios.delete(`/contacts/${id}`)
                .then(response => {
                    console.log(`Contact with ID ${id} deleted successfully.`, response.data);
                    // Optionally, you can update the contacts array or perform other actions

                    // Refresh the current page
                    window.location.reload();
                })
                .catch(error => {
                    console.error(`Error deleting contact with ID ${id}:`, error);
                });
        },
    },
};
</script>
