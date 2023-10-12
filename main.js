const { createApp } = Vue

createApp({
    data() {
        return {
            title: 'records',
            records: '',
            selected: null
        }
    },

    methods: {

        selectIndex(index) {
            this.selected = index;
            console.log(this.selected);
        }

    },
    mounted() {
        axios
            .request({
                url: 'records.json',
                methods: 'GET'
            })

            .then(response => {
                console.log(response.data);
                this.records = response.data;
            })
    }
}).mount('#app')