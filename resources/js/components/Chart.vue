<template>
    <div class="tradingview-widget-container">
  <div id="tradingview_e62e1"></div>
</div>
</template>

  
<script>

export default {
    props: {
        routes: {
            type: Object
        },
    },
    data() {
        return {
            symbols: [],
        };
    },
    methods: {
    },

    mounted(){
        new TradingView.widget(
            {
            //"autosize": true,
            "height": 610,
            "symbol": "BTCUSD",
            "interval": "D",
            "timezone": "Etc/UTC",
            "theme": "dark",
            "style": "1",
            "locale": "fr",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "hide_side_toolbar": false,
            "container_id": "tradingview_e62e1"
            }
            );
    }
};
</script>
<style lang="scss">

</style>
