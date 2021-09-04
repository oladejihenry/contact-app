<template>
    <div class="contact">
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Telephone</th>
            </tr>
            <tr>
                <td>{{ contact.first_name }}</td>
                <td>{{ contact.last_name }}</td>
                <td>{{ contact.email }}</td>
                <td>{{ contact.telephone }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    props: ['contact']
}
</script>
<style scoped>
.contact{
    width: 100%;
}
</style>
