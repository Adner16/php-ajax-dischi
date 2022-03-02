console.log('js ok');
console.log('Vue oh',Vue);
console.log('axios ok', axios)

Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        movies = []
    },
    mounted(){
        axios.get('http://localhost/api/movies').then(res =>{
            this.data.php = res.data;
        }).catch(err => {console.log(error(err)) })
    }
});