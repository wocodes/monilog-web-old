<template>
    <LayoutComponent>
        <MainContentComponent>
            <div class="row p-4">
                <div class="col-sm mb-2">
                    <router-link to="/expense">
                        <a class="btn btn-warning btn-lg text-light btn-block p-3" role="button">
                            <span class="fa fa-plus"></span>
                            Add Expense
                        </a>
                    </router-link>
                </div>

                <div class="col-sm mb-2">
                    <router-link to="/budget">
                        <a class="btn btn-primary btn-lg text-light btn-block p-3" role="button">
                            <span class="fa fa-plus"></span>
                            Add Budget
                        </a>
                    </router-link>
                </div>
                <div class="col-sm">
                    <h1 class="p-2 text-center font-weight-bold">{{ new Date | formatShortWordDate }}</h1>
                </div>
            </div>

            <div class="card-deck p-4">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <router-link to="/expense">
                            <span class="fa fa-reply mb-4 text-muted" style="font-size: 40px"></span>
                            <h1 class="font-weight-bold text-warning">
                                &#8358; {{monthly_total_expense }}
                            </h1>
                            <h6 class="font-weight-bold text-secondary mt-10">This Month's Total Expense</h6>
                            <small class="text-secondary font-italic">click to see more detail...</small>
                        </router-link>
                    </div>
                </div>


                <div class="card shadow">
                    <div class="card-body text-center">
                        <router-link to="/budget">
                            <span class="fa fa-forward mb-4 text-muted" style="font-size: 40px"></span>
                            <h1 class="font-weight-bold text-primary">
                                &#8358; {{monthly_total_budget}}
                            </h1>
                            <h6 class="font-weight-bold text-secondary mt-10">This Month's Total Budget</h6>
                            <small class="text-secondary font-italic">click to see more detail...</small>
                        </router-link>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body text-center">
                        <span class="fa fa-thumbs-up mb-4 text-muted" style="font-size: 40px"></span>
                        <h1 class="font-weight-bold"
                            :class="{
                                'text-success': 'stats.monthly_difference > 1000',
                                'text-danger': 'stats.monthly_difference < 0',
                            }"
                        >&#8358; {{ monthly_difference }}</h1>
                        <h6 class="font-weight-bold text-secondary mt-10">Difference</h6>
                    </div>
                </div>
            </div>

            <!--
            <h4 class="mt-10">Activity Log</h4>
            <div class="row">
                <ul>
                    <li><strong>Logged Expense:</strong> Bought Airtime - N1,000 -
                        <small class="text-secondary">10, Nov. @ 5.14pm</small>
                    </li>
                    <li><strong>Logged Budget:</strong> Data Subscription - N20,000 -
                        <small class="text-secondary">10, Nov. @ 5.14pm</small></li>
                    <li><strong>Logged Expense:</strong> Cable Subscription - N4,000 -
                        <small class="text-secondary">10, Nov. @ 5.14pm</small></li>
                </ul>
            </div>
            -->
        </MainContentComponent>
    </LayoutComponent>
</template>

<script>
    import ExpenseLogComponent from "./logs/ExpenseLogComponent";
    import LogExpenseComponent from "./logger/ExpenseLoggerComponent"
    import LayoutComponent from "./LayoutComponent";
    import MainContentComponent from "./MainContentComponent";

    export default {
        name: "DashboardComponent",
        components: {
            MainContentComponent,
            "logs-component": ExpenseLogComponent, LogExpenseComponent, LayoutComponent},
        data: function() {
          return {
              budgets: [],
              user: {},
              monthly_total_expense: 0,
              monthly_total_budget: 0,
              monthly_difference: 0,
          }
        },

        created: function() {
            this.user = this.$root.user
            fetch(process.env.MIX_API_URL + '/stats', {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': this.$root.authToken
                }
            })
            .then(res => res.json())
            .then(res => {
                this.monthly_total_expense = res.monthly_total_expense.toLocaleString();
                this.monthly_total_budget = res.monthly_total_budget.toLocaleString();
                this.monthly_difference = res.monthly_difference.toLocaleString();
            })
        },
        methods: {

        }
    }
</script>

<style scoped>

</style>
