<template>
    <div>
        <h2 id="title">Contact List</h2>
        <div v-for="(contact, index) in contact" :key="index">
            <list-contact
                :contact="contact"
                class="contact"
            />
        </div>
    </div>
</template>

<script>
import listContact from "./listContact.vue"
export default {
    props: ['contact'],
    components: {
        listContact
    }
}
</script>

<style scoped>
.contact{
    background: #e6e6e6;
    padding:5px;
    margin-top: 5px;
}
#title {
    text-align: center;
}
</style>
