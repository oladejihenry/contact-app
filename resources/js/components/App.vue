<template>
    <div class="contactListContainer">
        <add-search />
        <div class="heading">
            <h2 id="title">Create New Contact</h2>
            <add-contact-form />
        </div>
        <list-view :contact="contact" />
    </div>
</template>

<script>
import addContactForm from "./addContactForm.vue";
import listView from "./listView.vue";
import addSearch from "./addSearch.vue";
export default {
    components: {
        addContactForm,
        listView,
        addSearch
    },
    data: function() {
        return{
            contact: []
        }
    },
    methods: {
        getContact() {
            axios.get('api/contact')
            .then(response => {
                this.contact = response.data
            })
            .catch( error => {
                console.log( error );
            })
        }
    },
    created() {
        this.getContact();
    }
}
</script>

<style scoped>
.contactListContainer {
    width: 350px;
    margin: auto;
}

.heading {
    background: #e6e6e6;
    padding: 10px;
}

#title {
    text-align: center;
}
</style>
