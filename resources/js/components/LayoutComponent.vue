<template>
    <div class="main">
        <NavBar></NavBar>
        <div class="container">
            <MainContentComponent>
                <slot></slot>
            </MainContentComponent>
        </div>
        <FooterComponent class="fixed-bottom bg-light"></FooterComponent>
    </div>
</template>

<script>
    import NavBar from "./NavBar";
    import MainContentComponent from "./MainContentComponent";
    import FooterComponent from "./FooterComponent";
    export default {
        name: "LayoutComponent",
        components: {FooterComponent, NavBar, MainContentComponent}
    }
</script>

<style scoped>

</style>
