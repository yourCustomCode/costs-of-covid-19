<template>
    <div>
        <h3 class="cov-damage cov-damage-alert-label">BISHER ENTSTANDENER SCHADEN</h3>
        <h2 class="cov-damage cov-damage-alert-val">
            {{ formatCurrency(data.revenue_loss_total) }}
        </h2>
        <h3 class="cov-damage cov-damage-success-label">VERHINDERTER SCHADEN</h3>
        <h2 class="cov-damage cov-damage-success-val">
            {{ formatCurrency(data.credit_sum) }}
        </h2>
        <h3 class="cov-damage cov-damage-warning-label">VERBLIEBENER SCHADEN</h3>
        <h2 class="cov-damage cov-damage-warning-val">
            {{ formatCurrency(data.revenue_loss_left) }}
        </h2>
        <a class="btn-primary cov-participate" href="/register"> > JETZT MITMACHEN < </a>
        <div class="container cov-stats">
            <div class="row">
                <div class="col-sm">
                    <div class="cov-stat">
                        <p class="cov-stat-label">Zuletzt vergebene Kredite</p>
                        <p class="cov-stat-val" v-for="item in data.recent_col_1">
                            {{ formatCurrency(item) }}
                        </p>
                    </div>
                </div>
<!--                <div class="col-sm">-->
<!--                    <div class="cov-stat">-->
<!--                        <p class="cov-stat-label">Zuletzt erfasste Schäden</p>-->
<!--                        <p class="cov-stat-val" v-for="item in data.recent_col_2">-->
<!--                            {{ formatCurrency(item) }}-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            this.loadData();
            let me = this;
            setInterval(function () {
                me.loadData();
            }, 750);
        },

        methods: {
            loadData: function () {
                axios.get('/api/total', {})
                    .then(response => {
                        this.data = response.data
                    });
            },

            formatCurrency: function (val) {
                return val.toLocaleString("de") + " €";
            }
        },

        data: function () {
            return {
                data: {
                    revenue_loss_total: '-',
                    revenue_loss_left: '-',
                    credit_sum: '-',
                    recent_col_1: [],
                    recent_col_2: []
                },
            }
        }
    }
</script>
