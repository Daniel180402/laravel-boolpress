<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Boolpress</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarText"
                aria-controls="navbarText"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li
                        class="nav-item me-1"
                        v-for="(item, index) in navItems"
                        :key="index"
                    >
                        <router-link
                            class="nav-link active"
                            :to="{ name: item.routeName }"
                        >
                            {{ item.label }}
                        </router-link>
                    </li>
                </ul>
                <span class="navbar-text"> Eppur su muove </span>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Header",
    data: function () {
        return {
            navItems: [
                {
                    label: "Home",
                    routeName: "home",
                },
                {
                    label: "Posts",
                    routeName: "posts",
                },
                {
                    label: "About us",
                    routeName: "about-us",
                },
            ],
        };
    },
};
</script>
