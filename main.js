const { createApp } = Vue
createApp({
    data() {
        return {
            title: 'records',
            records: ''
        }
    },

    methods: {

    },
    mounted() {
        axios
            .get('server.php')
            .then(response => {
                console.log(response.data);
                this.records = response.data;
            })
    }
}).mount('#app')