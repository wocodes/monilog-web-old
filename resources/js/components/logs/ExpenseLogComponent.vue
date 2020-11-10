<template>
    <LayoutComponent>
        <ExpenseLoggerComponent></ExpenseLoggerComponent>

        <MainContentComponent>
            <h3 class="p-4 text-center">Expense Log ({{ new Date() | formatLongMonth }})</h3>
            <div id="expense-stats" class="row p-2 bg-warning" style="shadow-radius: 5px">
                <div class="col-lg-3 col-md-3 col-sm-12 mb-4">
                    <button class="btn btn-primary btn-md text-light btn-block p-3 shadow" role="button"
                            data-toggle="modal" data-target="#logExpenseModal">
                        <span class="fa fa-plus"></span>
                        Add Expense
                    </button>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">
                                Today
                                <small>({{ todaysLogs.length }})</small>
                            </h6>
                        </div>
                        <div class="col-12">
                            <p class="font-weight-light">&#8358; {{ todaysTotalLog.toLocaleString() }}</p>
                        </div>
                    </div>
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

            <div id="monthly-summary">
                <div class="row mt-4" id="expense-months-cards">
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">January</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">February</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">March</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">April</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">May</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">June</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">July</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">August</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">September</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">October</h6>
                        N120,000
                    </div>
                    <div class="col m-1 p-2 shadow">
                        <h6 class="font-weight-bold">December</h6>
                        N120,000
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
                            <th>Logged</th>
                            <th>Category</th>
                            <th>Budget</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-if="currentMonthsLogs" v-for="(log, index) in currentMonthsLogs">
                            <td>{{ ++index }}</td>
                            <td>{{ log.budget ? log.budget.title : log.title }}</td>
                            <td>{{ log.description }}</td>
                            <td>&#8358; {{ log.amount.toLocaleString() }}</td>
                            <td>{{ log.date_logged | formatShortWordDate }}</td>
                            <td><span class="badge badge-pill badge-info">Miscellenous</span></td>
                            <td>
                                <span v-if="log.budget">{{ log.budget.for | formatLongMonth }}</span>
                                <span v-else>No</span>
                            </td>
                            <td>
                                <a href="#/expense" class="action-btns"><span class="fa fa-edit p-3"></span></a>
                                <a href="#/expense" class="action-btns" @click="deleteLog(log.id)"><span class="fa fa-trash p-3 text-danger"></span></a>
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
    import ExpenseLoggerComponent from "../logger/ExpenseLoggerComponent";

    export default {
        name: "ExpenseLogComponent",
        components: {MainContentComponent, LayoutComponent, ExpenseLoggerComponent},
        data() {
            return {
                todaysLogs: [],
                todaysTotalLog: 0,
                overall_amount:0,
                overall_count:0,
                yearly_amount:0,
                yearly_count:0,
                currentMonthsLogs: [],
                currentMonthsTotalLog: 0
            }
        },
        created() {
            // fetch today's expenses
            fetch(process.env.MIX_API_URL+'/expenses/today',
                {
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": this.$root.authToken
                    }
                }
            )
            .then(response => response.json())
            .then(result => {
                console.log(result);
                this.todaysLogs = result.data
                this.todaysLogs.filter(todaysLog => {
                    this.todaysTotalLog += parseFloat(todaysLog.amount);
                })
            });

            // fetch this month's expenses
            fetch(process.env.MIX_API_URL+'/expenses/current-month',
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
                    fetch(process.env.MIX_API_URL + '/expenses/' + logId,
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
    #expense-months-cards div {
        border-radius: 10px;
        text-align: center;
    }
</style>
