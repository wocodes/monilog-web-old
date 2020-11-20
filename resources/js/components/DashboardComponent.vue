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
                    <h1 class="p-2 text-center font-weight-bold">&#128198; &nbsp; {{ new Date | formatShortWordDate }}</h1>
                </div>
            </div>

            <div class="alert alert-default ml-4 mr-4 shadow text-center" v-if="new Date().getDate() >= '20'">
                <div class="row">
                    <div class="col">
                        <h4 class="font-weight-bold">
                            &#128276; &nbsp; Hello, the month is coming to an end and you seem to have no budget for next month.
                        </h4>

                        <small class="blockquote font-italic">Good financial intelligence requires you to plan for the future ealy...</small>
                    </div>
                    <button class="btn btn-sm btn-info col-2">&#9997; &nbsp; Make Budget Now</button>
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
<!--                            <span class="fa fa-reply mb-4" style="font-size: 100px;color:#eee;position:absolute;left:-20px;bottom:-10px;z-index:0;overflow:hidden"></span>-->
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
                            v-bind:class="{
                                'text-success': positive_diff,
                                'text-danger': negative_diff,
                                'text-warning': rundown_diff,
                            }"
                        >&#8358; {{ monthly_difference }}</h1>
                        <h6 class="font-weight-bold text-secondary mt-10">Difference</h6>
                    </div>
                </div>
            </div>

            <div class="card-deck p-4 mb-30">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <router-link to="/expense">
                            <span class="fa fa-reply mb-4 text-muted" style="font-size: 40px"></span>
                            <h1 class="font-weight-bold text-warning">
                                None
                            </h1>
                            <h6 class="font-weight-bold text-secondary mt-10">Next Month's Top Plans/Budget</h6>
                            <small class="text-secondary font-italic">click to see more detail...</small>
                            <!--                            <span class="fa fa-reply mb-4" style="font-size: 100px;color:#eee;position:absolute;left:-20px;bottom:-10px;z-index:0;overflow:hidden"></span>-->
                        </router-link>
                    </div>
                </div>


                <div class="card shadow">
                    <div class="card-body text-center">
                        <router-link to="/budget">
                            <span class="fa fa-forward mb-4 text-muted" style="font-size: 40px"></span>
                            <h1 class="font-weight-bold text-primary">
                                &#8358; 0
                            </h1>
                            <h6 class="font-weight-bold text-secondary mt-10">Next Month's Budget</h6>
                            <small class="text-secondary font-italic">click to see more detail...</small>
                        </router-link>
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
              monthly_total_expense: 0,
              monthly_total_budget: 0,
              monthly_difference: 0,
          }
        },

        computed: {
            negative_diff: function() {
              return parseInt(this.monthly_difference) < 0;
            },

            positive_diff: function() {
                return parseInt(this.monthly_difference) > 10000;
            },

            rundown_diff: function() {
                return parseInt(this.monthly_difference) < 10000;
            }
        },

        created: function() {
            // check if user has done setup
            // this.$router.replace({name: 'setup-category'});
        },

        mounted: function() {
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
