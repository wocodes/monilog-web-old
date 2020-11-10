<template>
    <LayoutComponent>
        <MainContentComponent>
            <div class="modal fade" id="setupCategoryModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header p-2">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <span class="font-size-h2">&#128221;</span>
                                Select Expense & Budget Categories
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                           <ul class="list-inline">
                               <li class="list-inline-item">
                                   <span class="badge badge-pill badge-primary font-size-h3 shadow"
                                        @click="selectedCat(1)">Miscellenous</span>
                               </li>
                               <li class="list-inline-item">
                                   <span class="badge badge-pill badge-secondary font-size-h3"
                                         @click="selectedCat(2)">Subscription</span>
                               </li>
                               <li class="list-inline-item">
                                   <span class="badge badge-pill badge-warning font-size-h3"
                                         @click="selectedCat(3)">Loans</span>
                               </li>
                               <li class="list-inline-item">
                                   <span class="badge badge-pill badge-success font-size-h3"
                                         @click="selectedCat(4)">Savings</span>
                               </li>
                           </ul>

                            <h5 class="font-weight-bold mt-10">Selected:</h5>
                                <ul class="list-inline">
                                    <li class="list-inline-item" v-for="cat in selectedCategories">
                                        <span class="badge badge-pill badge-secondary font-size-h3">{{ cat }}</span>
                                    </li>
                                </ul>

                        </div>
                    </div>
                </div>
            </div>
        </MainContentComponent>
    </LayoutComponent>
</template>

<script>
    import LayoutComponent from "../LayoutComponent";
    import MainContentComponent from "../MainContentComponent";
    export default {
        name: "CategorySelectionComponent",
        components: {MainContentComponent, LayoutComponent},
        data() {
            return {
                selectedCategories: []
            }
        },
        mounted() {
            this.openModal();
        },
        methods: {
            openModal() {
                $('#setupCategoryModal').modal('show');
            },

            selectedCat(id) {
                this.selectedCat()
            }
        }
    }
</script>

<style scoped>

</style>
