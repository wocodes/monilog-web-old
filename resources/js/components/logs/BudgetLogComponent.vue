<template>
    <LayoutComponent>
        <BudgetLoggerComponent></BudgetLoggerComponent>

        <MainContentComponent>
            <h3 class="p-4 text-center">Budget Log ({{ new Date() | formatLongMonth }})</h3>
            <div id="budget-stats" class="row p-2 bg-success" style="border-radius: 5px">
                <div class="col-lg-3 col-md-3 col-sm-12 mb-4">
                    <button class="btn btn-dark btn-md text-light btn-block p-3 shadow" role="button"
                            data-toggle="modal" data-target="#logBudgetModal">
                        <span class="fa fa-plus"></span>
                        Add Budget
                    </button>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">
                                This Month
                                <small>({{ currentMonthsLogs.length }})</small>
                            </h6>
                        </div>
                        <div class="col-12">
                            <p class="font-weight-light">
                                &#8358; {{ currentMonthsTotalLog.toLocaleString() }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">
                                This Year
                                <small>({{ yearly_count }})</small>
                            </h6>
                        </div>
                        <div class="col-12">
                            <p class="font-weight-light">
                                &#8358; {{ overall_amount.toLocaleString() }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">
                                Overall
                                <small>({{ overall_count }})</small>
                            </h6>
                        </div>
                        <div class="col-12">
                            <p class="font-weight-light">
                                &#8358; {{ overall_amount.toLocaleString() }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row p-4 table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>For</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-if="currentMonthsLogs" v-for="(log, index) in currentMonthsLogs">
                        <td>{{ ++index }}</td>
                        <td>{{ log.budget ? log.budget.title : log.title }}</td>
                        <td>{{ log.description }}</td>
                        <td>&#8358; {{ log.amount.toLocaleString() }}</td>
                        <td>{{ log.for | formatLongMonth }}</td>
                        <td><span class="badge badge-pill badge-info">Miscellenous</span></td>
                        <td>
                            <a href="#/budget" class="action-btns"><span class="fa fa-edit p-2"></span></a>
                            <a href="#/budget" class="action-btns" @click="deleteLog(log.id)"><span class="fa fa-trash p-2 text-danger"></span></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </MainContentComponent>
    </LayoutComponent>
</template>

<script>
    import LayoutComponent from "../LayoutComponent";
    import MainContentComponent from "../MainContentComponent";
    import BudgetLoggerComponent from "../logger/BudgetLoggerComponent";

    export default {
        name: "BudgetLogComponent",
        components: {MainContentComponent, LayoutComponent, BudgetLoggerComponent},
        data() {
            return {
                overall_amount:0,
                overall_count:0,
                yearly_amount:0,
                yearly_count:0,
                currentMonthsLogs: [],
                currentMonthsTotalLog: 0
            }
        },
        created() {
            // fetch this month's budgets
            fetch(process.env.MIX_API_URL+'/budgets/current-month',
                {
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": this.$root.authToken
                    }
                }
            )
                .then(response => response.json())
                .then(result => {
                    this.currentMonthsLogs = result.current;

                    this.overall_amount = result.overall_amount;
                    this.overall_count = result.overall_count;

                    this.yearly_amount = result.yearly_amount;
                    this.yearly_count = result.yearly_count;

                    this.currentMonthsLogs.filter(log => {
                        this.currentMonthsTotalLog += parseFloat(log.amount);
                    })
                });
        },

        methods: {
            deleteLog(logId) {
                let confirm = window.confirm("Are you sure you want to delete this log?");

                if (confirm) {
                    // delete expense
                    fetch(process.env.MIX_API_URL + '/budgets/' + logId,
                        {
                            method: 'DELETE',
                            headers: {
                                "Content-Type": "application/json",
                                "Authorization": this.$root.authToken
                            }
                        }
                    )
                        .then(response => response.json())
                        .then(result => {
                            window.location.reload();
                        });
                }
            }
        }
    }
</script>

<style scoped>

</style>
