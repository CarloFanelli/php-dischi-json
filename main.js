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
            .request({
                url: 'records.json',
                methods: 'GET'
            })

            .then(response => {
                //console.log(response.data);
                this.records = response.data;
            })
    }
}).mount('#app')