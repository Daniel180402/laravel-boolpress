<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
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
                    <li class="nav-item">
                        <router-link
                            class="nav-link active"
                            :to="{ name: 'home' }"
                            aria-current="page"
                            >Home
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link
                            class="nav-link active"
                            :to="{ name: 'posts-list' }"
                            aria-current="page"
                            >Posts List
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link
                            class="nav-link active"
                            :to="{ name: 'about-us' }"
                            aria-current="page"
                            >About Us
                        </router-link>
                    </li>
                </ul>
                <span class="navbar-text">
                    Navbar text
                </span>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Header",
};
</script>
