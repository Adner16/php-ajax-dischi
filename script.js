console.log('js ok');
console.log('Vue oK',Vue);
console.log('axios ok', axios)

Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        discs : []
    },
    mounted(){
        axios.get('http://localhost/api/discs/index.php').then(res =>{
            this.discs = res.data;
            console.log(this.discs);
        });
    }
});