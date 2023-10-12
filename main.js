const { createApp } = Vue

createApp({
    data() {
        return {
            title: 'records',
            records: '',
            selected: null,
            newRecord: {
                title: '',
                author: '',
                year: null,
                poster: '',
                genre: null
            }
        }
    },

    methods: {

        selectIndex(index) {
            this.selected = index;
            console.log(this.selected);
        },

        addRecord() {
            //console.log(this.newRecord);

            axios
                .request({
                    url: 'server.php',
                    method: 'POST',
                    data: {
                        newRecord: this.newRecord
                    },
                    headers: { 'Content-Type': 'multipart/form-data' }

                })
                .then(response => {
                    console.log(this.newRecord);
                    this.records = response.data;

                    this.newRecord = {
                        title: '',
                        author: '',
                        year: null,
                        poster: '',
                        genre: null
                    }

                })
        }

    },
    mounted() {
        axios
            .request({
                url: 'server.php',
                methods: 'GET'
            })

            .then(response => {
                console.log(response.data);
                this.records = response.data;
            })
    }
}).mount('#app')