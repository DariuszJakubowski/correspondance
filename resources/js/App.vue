<template>
    <div>
        <Header />

        <div id="wrapper">
            <Sidebar />

            <div id="content-wrapper">

                <router-view />

                <Footer />
            </div>
        </div>
    </div>
</template>

<script>

import Header from "./components/layouts/Header.vue";
import Sidebar from "./components/layouts/Sidebar.vue";
import Footer from "./components/layouts/Footer.vue";

export default {
    components: {
        Header,
        Sidebar,
        Footer
    },
    created() {
        // document.querySelector("body").style.backgroundColor = "#00f";
    }
};
</script>
