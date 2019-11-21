<template>
    <div class="container">
        <img v-bind:src="url" @click="followUser" style="width:50px;">

    </div>
</template>

<script>

    module.exports = {
        props: ['postId','follows'],

        data: function(){
            // alert(this.postId);
            // alert(this.follows);


            return{
                status:this.follows,
            }
        },
        methods:{
            followUser(){

                axios.post('/like/' + this.postId)
                .then(response=> {

                    this.status = !this.status;
                    console.log(response.data);}
                )
                .catch(errors=>{
                    if(errors.response.status == 401){
                        window.location = '/login';
                    }
                    else{
                        alert(errors.response.status);
                    }
                });
            }
        },

        computed:{

            
            url: function() {
                return (this.status) ? "https://www.pngfind.com/pngs/m/6-62455_instagram-heart-emoji-free-download-transparent-heart-symbol.png":
                "https://i2.wp.com/blog.sarkapakostova.cz/wp-content/uploads/2018/12/heart-outline-19.png?fit=983%2C983";
            }
        }
    } 
    
</script>
