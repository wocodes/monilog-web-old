<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Today's Log <strong>( {{ '&#8358;' + todaysTotalLog.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') }} )</strong></div>

                    <div class="card-body">
                        <p v-if="!todaysLogs.length" class="text-center">
                            <em>
                                You're yet to log any expense for today. <br>Sure you haven't made any?
                            </em>
                        </p>

                        <ol v-if="todaysLogs.length">
                            <li v-for="log in todaysLogs">
                                {{ log.title }} - {{ '&#8358;' + log.amount }}
                                <small style="display: block">
                                    {{ log.description }}
                                </small>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">This Month's Log <strong>( {{ '&#8358;' + currentMonthsTotalLog.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') }}  )</strong></div>


                    <div class="card-body">
                        <ol>
                            <li v-for="log in currentMonthsLogs">
                                {{ log.title }} - {{ '&#8358;' + log.amount }}
                                <small>({{ log.date_logged | formatShortWordDate }})</small>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LogsComponent",
        data() {
            return {
                todaysLogs: [],
                currentMonthsLogs: [],
                todaysTotalLog: 0,
                currentMonthsTotalLog: 0
            }
        },
        created() {
            // fetch today's expenses
            // fetch('http://monilog-api-laravel.local/api/expenses/today',
            fetch('https://monilog.schoolly.co/api/expenses/today',
                {
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": this.$parent.authToken
                    }
                }
            )
            .then(response => response.json())
            .then(result => {
                this.todaysLogs = result.data
                this.todaysLogs.filter(todaysLog => {
                    this.todaysTotalLog += parseFloat(todaysLog.amount);
                })
            });

            // fetch this month's expenses
            fetch('http://monilog-api-laravel.local/api/expenses/current-month',
                {
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": this.$parent.authToken
                    }
                }
            )
            .then(response => response.json())
            .then(result => {
                let logs = result.data;
                this.currentMonthsLogs = logs.slice(0, 10);
                this.currentMonthsLogs.filter(log => {
                    this.currentMonthsTotalLog += parseFloat(log.amount);
                })
            });
        }
    }
</script>

<style scoped>

</style>
