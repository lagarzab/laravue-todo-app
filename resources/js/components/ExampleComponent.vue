<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <!-- <form action="/tasklist" method="post">
                            <input type="hidden" name="_token" :value="csrf"> -->
                            <button class='btn btn-primary' @click='createTaskList'>Create List</button>
                        <!-- </form> -->
                        <router-link :to="{name: 'login'}">Hello</router-link>
                        <router-link :to="{name: 'tasklists'}">Task Lists</router-link>
                        <router-link to='/none'>None</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          }),
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            createTaskList () {
                axios.post('/api/tasklists')
                    .then(res => console.log(res))
                    .catch(err => console.error(err))
            }
        }
    }
</script>
