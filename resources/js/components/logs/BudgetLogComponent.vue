<template>
    <div>
        <div class="col-xxl-12 order-2 order-xxl-1">
            <!--begin::Advance Table Widget 2-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Budget Logs</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">See all your logged budget here</span>
                    </h3>
                    <div class="card-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                            <li class="nav-item">
                                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_1">Month</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2 pb-0 mt-n3">
                    <div class="tab-content mt-5" id="myTabTables11">
                        <!--begin::Tap pane-->
                        <div class="tab-pane show active" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-head-custom table-head-bg table-borderless table-vertical-centerr">
                                    <thead>
                                    <tr class="text-left text-uppercase">
                                        <th class="w-40px"></th>
                                        <th class="min-w-200px">Item</th>
                                        <th class="min-w-100px">Amount</th>
                                        <th class="min-w-125px">Description</th>
                                        <th class="min-w-110px">Category</th>
                                        <th class="min-w-150px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-if="currentMonthsLogs" v-for="log in currentMonthsLogs">
                                        <td class="pl-0 py-4">
                                            <div class="symbol symbol-50 symbol-light">
                                                                                    <span class="symbol-label">
                                                                                        <img src="/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                                                                                    </span>
                                            </div>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ log.title }}</a>
                                            <div>
                                                <span class="font-weight-lighter">{{ log.date_logged | formatShortWordDate }}</span>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ '&#8358;' + log.amount.toLocaleString() }}</span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-muted font-weight-500">{{ log.description }}</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="label label-lg label-light-success label-inline">Success</span>
                                        </td>
                                        <td class="text-right pr-0">

                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr class="text-left text-uppercase">
                                        <td class="w-40px"></td>
                                        <td class="min-w-200px font-weight-bolder font-size-lg">TOTAL AMOUNT</td>
                                        <td class="min-w-100px font-weight-bolder font-size-lg">&#8358; {{ currentMonthsTotalLog.toLocaleString() }}</td>
                                        <td class="min-w-125px"></td>
                                        <td class="min-w-110px"></td>
                                        <td class="min-w-150px"></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 2-->
        </div>
    </div>
</template>

<script>
    export default {
        name: "BudgetLogComponent",
        data() {
            return {
                todaysLogs: [],
                currentMonthsLogs: [],
                todaysTotalLog: 0,
                currentMonthsTotalLog: 0
            }
        },
        created() {
            // fetch this month's expenses
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
                    this.currentMonthsLogs = result.data;
                    console.log('data',this.currentMonthsLogs);

                    this.currentMonthsLogs.filter(log => {
                        this.currentMonthsTotalLog += parseFloat(log.amount);
                    })
                });
        }
    }
</script>

<style scoped>

</style>
