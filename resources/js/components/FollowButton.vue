<template>
    <div>
        <button class="btn btn-primary ml-5 mr-10" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId','follows'], //To accept the value from the controller

        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return {
                status: this.follows,
            }
        },
        methods:{
            followUser(){
                axios.post('/follow/'+this.userId)
                .then(response => {
                    console.log(response.data);
                });
            }
        },
        computed :{
            buttonText(){
                return (this.status) ? 'Unfollow':'follow';

            }
        }
    }
</script>
