<template>

    <div>
        <!-- Modal-->
        <div class="modal fade" id="logExpenseModal" tabindex="-1" role="dialog" aria-labelledby="logExpenseModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log an Expense</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form">
                            <div class="card-body">
                                <div class="form-group">
<!--                                    <label>Item Name:</label>-->
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="Spent some cash today? Log it here"
                                           v-model="log_title" required />

<!--                                    <span class="form-text text-muted">Please enter item name</span>-->
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text" >&#8358;</span></div>
                                        <input type="number"
                                               min="100" class="form-control form-control-solid"
                                               placeholder="Amount Spent"
                                               v-model="log_amount" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox-list">
                                        <label class="checkbox">
                                            <input type="checkbox" @click="show_log_details = !show_log_details"/>
                                            <span></span>
                                            Add More Info
                                        </label>
                                    </div>
                                </div>


                                <div v-show="show_log_details">
                                    <div class="form-group">
                                        <textarea class="form-control form-control-solid"
                                                  placeholder="Have more detail for your expense?"
                                                  v-model="log_description" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="date" class="form-control form-control-solid"
                                               placeholder="Date spent"
                                               v-model="log_date" required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary font-weight-bold" @click="submitLog">Save</button>
                        <button type="button" class="btn btn-default font-weight-bold" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LogExpenseComponent",
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
        methods: {
            submitLog() {
                Swal.showLoading({title: "Processing..."});

                let data = {
                    "title": this.log_title,
                    "amount": this.log_amount,
                    "description": this.log_description,
                    "date_logged": this.log_date,
                }


                fetch(process.env.MIX_API_URL+'/expenses',
                    {
                        method: 'POST',
                        body: JSON.stringify(data),
                        headers: {
                            "Content-Type": "application/json",
                            "Authorization": this.$root.authToken
                        }
                    }
                )
                    .then(response => response.json())
                    .then(result => {

                        if(result.status === 'success') {
                            // dispatch event to another component (LogsComponent)

                            Swal.fire({
                                title: "Good job!",
                                text: "Expense Log Saved!",
                                icon: "success",
                                showConfirmButton: false,
                                showCancelButton: false,
                                timer: 2000,
                            }).then(function(result) {
                                if(result.dismiss === 'timer') {
                                    // redirect to current page
                                    console.log(234);
                                    // this.$router.go(0);
                                    window.location.reload()
                                }
                            })
                            // });
                            //
                            // Swal.fire({
                            //     text: result.message,
                            //     icon: result.status,
                            //     toast: true,
                            //     position: 'top-end',
                            //     timer: 4000,
                            //     timerProgressBar: true,
                            //     showConfirmButton: false,
                            //     background: '#cfefb7'
                            // })

                            this.log_title = '';
                            this.log_amount = '';
                            this.log_description = '';
                            this.log_date = '';
                        }
                    })
                    .catch(err => console.log(err));
            }
        }
    }
</script>

<style scoped>
    .card-body {
        padding: 0 !important;
    }

    .modal-body {
        padding-bottom: 0 !important;
    }
</style>
