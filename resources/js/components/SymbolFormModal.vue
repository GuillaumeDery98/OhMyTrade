<template>
    <div>
        <button type="button" @click="showModal"
            class="inline-flex items-center border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <a-modal v-model:visible="visible" :title="labels.symbols_form_title" @ok="handleOk">
            <form method="post" action="">
                <div class="pb-1">
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ labels.symbols_form_name
                    }}</label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="pb-1">
                    <label for="tv_symbol" class="block text-sm font-medium text-gray-700">{{
                            labels.symbols_form_tv_symbol
                    }}</label>
                    <div class="mt-1">
                        <input type="text" name="tv_symbol" id="tv_symbol"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="pb-1">
                    <label for="tv_indicators" class="block text-sm font-medium text-gray-700">{{
                            labels.symbols_form_tv_indicators
                    }}</label>
                    <div class="mt-1">
                        <input type="text" name="tv_indicators" id="tv_indicators"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="pb-1">
                    <label for="twitter" class="block text-sm font-medium text-gray-700">{{ labels.symbols_form_twitter
                    }}</label>
                    <div class="mt-1">
                        <input type="text" name="twitter" id="twitter"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="pb-1">
                    <label for="news" class="block text-sm font-medium text-gray-700">{{ labels.symbols_form_news
                    }}</label>
                    <div class="mt-1">
                        <input type="text" name="news" id="news"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
            </form>
        </a-modal>
    </div>
</template>
<script>
import { defineComponent, ref } from 'vue';
export default defineComponent({
    props: {
        labels: {
            type: Object
        },
    },
    setup() {
        const visible = ref(false);

        const showModal = () => {
            visible.value = true;
        };

        const handleOk = e => {
            console.log(e);
            visible.value = false;
        };

        return {
            visible,
            showModal,
            handleOk,
        };
    },

});
</script>
<style lang="scss">
</style>
