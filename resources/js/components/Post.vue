<template>
    <a class="text-decoration-none text-black" href="#">
        <div class="col">
            <div class="card h-100">
                <img
                    :src="post.image_url"
                    class="card-img-top"
                    :alt="'image of' + 'post.title'"
                />
                <div class="card-body">
                    <h5 class="card-title">{{ post.title }}</h5>
                    <p class="card-text">{{ post.content }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{ post.updated_at }}</small>
                </div>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    name: "Post",
    components: {},
    props: ["post"],
};
</script>

<style></style>
