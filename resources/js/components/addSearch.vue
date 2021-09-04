<template>
    <div class="search">
        <h3>Search For Email</h3>
        <input type="text" v-model="keywords" placeholder="Enter Email .....">
        <ul v-if="results.length > 0">
            <li v-for="result in results" :key="result.id" v-text="result.email"></li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            keywords: null,
            results: []
        };
    },
    watch: {
        keywords(after, before) {
            this.fetch();
        }
    },
    methods: {
        fetch() {
            axios.get('api/contact/search', { params: { keywords: this.keywords } })
                .then(response => this.results = response.data)
                .catch(error => {});
        }
    }
}
</script>
<style scoped>
.search{
    margin-bottom:9px;
}
input{
    width:100%;

}
</style>
