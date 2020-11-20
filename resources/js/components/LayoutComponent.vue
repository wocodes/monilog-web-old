<template>
    <div class="main">
        <NavBar></NavBar>
        <div class="container">
            <MainContentComponent>
                <slot></slot>
            </MainContentComponent>
        </div>

        <div id="nugget" class="mx-auto bg-white w-100 mt-20">
            <p class="text-center font-weight-bold p-2 m-0">Monilog Nuggets: The best form of saving is investing. Wise investment keeps and grows your money safely. <a href="#" class="btn btn-primary btn-sm m-0 pl-2 pr-2">Invest Now</a> with Monilog</p>
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
        components: {FooterComponent, NavBar, MainContentComponent},

        mounted() {

            let nugget = document.getElementById('nugget');

            setInterval(function() {
                setTimeout(function() {
                    nugget.style.transition = 'all linear 1s';
                    nugget.style.bottom = '25px';
                }, 1000)

                setTimeout(function() {
                    nugget.style.transition = 'all linear 1s';
                    nugget.style.transitionDelay = '7s';

                    nugget.style.bottom = '-20px';
                }, 8000)
            }, 18000);
        }
    }
</script>

<style>
    body {
        background-image: url("/images/bg2-light.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }

    #nugget {
        position:fixed;
        z-index:1000;
        bottom:-17px;
        left:0;
        border-top: 1px solid #ccc;
    }
</style>
