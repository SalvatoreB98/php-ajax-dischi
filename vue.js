window.addEventListener("load",()=>{
    const app = new Vue({
        el: '#root',
        data: {
            albums : []
        },
        mounted(){
            axios.get("server.php").then((resp)=>{
                this.albums = resp.data;
                console.log(this.albums)
            }).catch((er)=>{
                console.log(er);
            })
        }
    });
});
