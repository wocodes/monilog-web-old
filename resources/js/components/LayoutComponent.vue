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

<style>
    body {
        background-image: url("/images/bg2-light.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }
</style>
