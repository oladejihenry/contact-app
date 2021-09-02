<template>
    <div class="addContact">
        <form @submit.prevent="addContact">
            <input type="text" v-model="contact.first_name" placeholder="First Name" />
            <br>
            <input type="text" v-model="contact.last_name" placeholder="Last Name" />
            <br>
            <input type="email" v-model="contact.email" placeholder="Email" />
            <br>
            <input type="number" v-model="contact.telephone" placeholder="Telephone" />
            <br>
            <button type="submit">Create Contact</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            contact: {

            }
        }
    },
    methods: {
        addContact() {
            axios.post('api/contact/store', this.contact)
            .then(response => {
                this.contact = {};
            })
            .catch( error => {
                console.log(error);
            } )
        }
    }
}
</script>

<style scoped>
.addContent{
    padding-bottom: 9px;
    width: 90px;
}
input{
    border:0px;
    font-size:15px;
    outline: none;
    margin-bottom: 20px;
    margin-right: 10px;
    width:100%;
}
.plus{
    font-size:20px;
}
.active {
    color: #00CE25;
}
.inactive{
    color: #999999;
}
</style>
