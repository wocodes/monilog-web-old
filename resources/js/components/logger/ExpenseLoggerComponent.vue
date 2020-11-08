<template>
    <div>
        <!-- Modal-->
        <div class="modal fade" id="logExpenseModal" tabindex="-1" role="dialog" aria-labelledby="logExpenseModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log an Expense</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form" @submit.prevent="submitLog">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="expense-budget"><small class="font-weight-bold">Select Budget</small></label>
                                    <select id="expense-budget" class="form-control form-control-lg form-control-solid"
                                           v-model="selectedBudget">
                                        <option value="" selected>- Select Budget -</option>
                                        <option v-for="budget in unloggedBudgets" v-bind:value="budget.id">{{ budget.title }} - &#8358;{{ budget.amount.toLocaleString() }}</option>
                                    </select>
                                </div>

                                <div class="form-group" v-show="!selectedBudget">
                                    <label for="expense-title"><small class="font-weight-bold">Title</small></label>
                                    <input id="expense-title" type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="What did you spend on?"
                                           v-model="logTitle" />
                                </div>

                                <div class="form-group">
                                    <label for="expense-amount"><small class="font-weight-bold">Title</small></label>
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text" >&#8358;</span></div>
                                        <input id="expense-amount"
                                               type="number"
                                               min="100" class="form-control form-control-solid"
                                               placeholder="Amount Spent"
                                               v-model="logAmount" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox-list">
                                        <label class="checkbox">
                                            <input type="checkbox" @click="showLogDetails = !showLogDetails"/>
                                            <span></span>
                                            Add More Info
                                        </label>
                                    </div>
                                </div>


                                <div v-show="showLogDetails">
                                    <div class="form-group">
                                        <label for="expense-description"><small class="font-weight-bold">Description</small></label>
                                        <textarea id="expense-description"
                                                  class="form-control form-control-solid"
                                                  placeholder="Have more detail for your expense?"
                                                  v-model="logDescription" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="expense-date"><small class="font-weight-bold">Date</small></label>
                                        <input id="expense-date"
                                               type="date" class="form-control form-control-solid"
                                               placeholder="Date spent"
                                               v-model="logDate" required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
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
                showLogDetails: false,
                selectedBudget: null,
                logTitle: '',
                logAmount: '',
                logDescription: '',
                logDate: '',
                status: null,
                currentDate: null,
                unloggedBudgets: []
            }
        },

        mounted() {
            fetch(process.env.MIX_API_URL+"/budgets/unlogged", {
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": this.$root.authToken
                }
            })
            .then(res => res.json())
            .then(res => {
                this.unloggedBudgets = res
            });
        },

        methods: {
            submitLog() {
                Swal.showLoading({title: "Processing..."});

                let data = {
                    "budget_id": this.selectedBudget,
                    "title": this.logTitle,
                    "amount": this.logAmount,
                    "description": this.logDescription,
                    "date_logged": this.logDate,
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
                            timer: 1000,
                        }).then(function(result) {
                            if(result.dismiss === 'timer') {
                                // redirect to current page
                                window.location.reload()
                            }
                        })

                        this.logTitle = '';
                        this.logAmount = '';
                        this.logDescription = '';
                        this.logDate = '';
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
