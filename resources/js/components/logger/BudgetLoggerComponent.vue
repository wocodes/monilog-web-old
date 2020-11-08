<template>
    <div>
        <!-- Modal-->

        <!-- Add budget modal-->
        <div class="modal fade" id="logBudgetModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log Budget</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--begin::Form-->
                        <form @submit.prevent="saveBudget()">
                            <div class="form-group">
                                <label for="budget-title"><small class="font-weight-bold">Title</small></label>
                                <input class="form-control" v-model="budget.title" type="text" required id="budget-title"/>
                            </div>
                            <div class="form-group">
                                <label for="budget-description"><small class="font-weight-bold">Description</small></label>
                                <input id="budget-description" class="form-control" v-model="budget.description" type="text"/>
                            </div>
                            <div class="form-group">
                                <label for="budget-amount"><small class="font-weight-bold">Amount</small></label>
                                <input id="budget-amount" class="form-control" type="number" v-model="budget.amount" required/>
                            </div>
                            <div class="form-group">
                                <label for="budget-datetime-local-input"><small class="font-weight-bold">Date/Time</small></label>
                                <input class="form-control" type="datetime-local" v-model="budget.for" id="budget-datetime-local-input" required/>
                            </div>
                            <div class="form-group">
                                <label for="budget-color-input"><small class="font-weight-bold">Label</small></label>
                                <input class="form-control" type="color" v-model="budget.label" value="#563d7c" id="budget-color-input"/>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary font-weight-bold">Submit</button>
                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import BudgetLogComponent from "../logs/BudgetLogComponent";

    export default {
        name: "BudgetLoggerComponent",
        components: {BudgetLogComponent},
        data() {
            return {
                budget: {
                    title: '',
                    description: '',
                    amount: '',
                    for: '',
                    label: '',
                }
            }
        },
        mounted() {

        },

        methods: {
            saveBudget() {
                Swal.showLoading({title: "Processing..."});

                fetch(process.env.MIX_API_URL+'/budgets', {
                    method: 'POST',
                    body: JSON.stringify(this.budget),
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': this.$root.authToken
                    }
                })
                .then(res => res.json())
                .then(res => {
                    Swal.fire({
                        title: "Good job!",
                        text: "Budget Log Saved!",
                        icon: "success",
                        showConfirmButton: false,
                        showCancelButton: false,
                        timer: 2000,
                    }).then(function(result) {
                        if(result.dismiss === 'timer') {
                            // redirect to current page
                            window.location.reload()
                        }
                    })
                })
                .catch(err => console.log(err));
            }
        }
    }
</script>

<style scoped>

</style>
