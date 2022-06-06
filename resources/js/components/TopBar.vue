<template>
    <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 shadow">
        <!-- test -->
                <div class="px-4 justify-between inset-y-0 grid grid-cols-12 content-center">
                    <div class="col-span-11">
                        <Vue3Marquee>
                            <div> testeuuuuu </div>
                            <div> testeuuuuu </div>
                            <div> testeuuuuu </div>
                            <div> testeuuuuu </div>
                            <div> testeuuuuu </div>
                            <div> testeuuuuu </div>
                            <div> testeuuuuu </div>
                            <div> testeuuuuu </div>
                            <div> testeuuuuu </div>
                            <div> testeuuuuu </div>
                        </Vue3Marquee>
                    </div>
                    <div class="ml-4 col-span-1 items-center md:ml-6">

                        <!-- Profile dropdown -->
                        <div class="ml-3">
                            <div>
                                <button type="button"
                                    class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>
<script>
export default {
    props: {
        routes: {
            default() {
                return [];
            },
        },
    },
    data() {
        return {
            symbol: [],
        };
    },
    methods: {
        
    },
};
</script>
<style lang="scss">

</style>
