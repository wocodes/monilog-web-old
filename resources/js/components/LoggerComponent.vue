<template>
    <div class="container mb-4 pt-lg-5">
        <form @submit.prevent="submitLog">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text"
                           placeholder="Spent some cash today? Log it here"
                           class="form-control p-4" id="log_title"
                           v-model="log_title" required autocomplete="log_title">
                </div>
                <div class="form-group col-md-3">
                    <input id="log_amount"
                           type="number"
                           min="100"
                           class="form-control p-4"
                           placeholder="Amount Spent"
                           v-model="log_amount" required autocomplete="log_amount">
                </div>
                <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-primary btn-lg"
                            @mouseenter="show_log_details=true">Save Log</button>
                </div>
            </div>

            <div class="form-row moreLogDetails" v-show="show_log_details">
                <div class="form-group col-md-6">
                    <input type="text"
                           placeholder="Have more detail for your expense?"
                           class="form-control p-4" id="log_description"
                           v-model="log_description" autocomplete="log_description">
                </div>
                <div class="form-group col-md-3">
                    <input id="log_date"
                           type="date"
                           class="form-control p-4"
                           v-model="log_date" autocomplete="log_date">
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "LoggerComponent",
        data() {
            return {
                show_log_details: false,
                log_title: '',
                log_amount: '',
                log_description: '',
                log_date: '',
                status: null,
                currentDate: null
            }
        },
        created() {
            console.log('det', this.$parent.user);
            if(this.$parent.user === null) window.location.href = '/login';
        },
        methods: {
            submitLog() {
                let data = {
                    "title": this.log_title,
                    "amount": this.log_amount,
                    "description": this.log_description,
                    "date": this.log_date,
                }

                // fetch('http://monilog-api-laravel.local/api/expenses',
                fetch('https://api-monilog.schoolly.co/api/expenses',
                    {
                        method: 'POST',
                        body: JSON.stringify(data),
                        headers: {
                            "Content-Type": "application/json",
                            "Authorization": this.$parent.authToken
                        }
                    }
                )
                    .then(response => response.json())
                    .then(result => {

                        if(result.status === 'success') {
                            // dispatch event to another component (LogsComponent)

                            Swal.fire({
                                text: result.message,
                                icon: result.status,
                                toast: true,
                                position: 'top-end',
                                timer: 4000,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                background: '#cfefb7'
                            })

                            this.log_title = '';
                            this.log_amount = '';
                            this.log_description = '';
                            this.log_date = '';

                            $('.toast').toast()
                        }
                    })
                    .catch(err => console.log(err));
            }
        }
    }
</script>

<style scoped>
    #todays_log {
        font-size: 20px;
        width: 100%;
    }

    #log_input {
        width: 100% !important;
    }

    .moreLogDetails {
        /*display:none;*/
    }
</style>
