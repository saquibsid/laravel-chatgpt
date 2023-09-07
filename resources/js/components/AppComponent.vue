<template>
        <search-input-component></search-input-component>
</template>
<script>
    import SearchInputComponent from './SearchInputComponent.vue';
    export default {
        components:{
            SearchInputComponent
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
