<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article component Chart.js</div>

                    <div class="card-body">
                        <canvas id="chart-articles" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    
import { Bar } from 'vue-chartjs'

    Vue.component('chart-articles', {
        extends: Bar,
        mounted() {
            // Overwriting base render method with actual data.
            this.renderChart({
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ],
                datasets: [{
                    label: 'GitHub Commits',
                    backgroundColor: '#f87979',
                    data: [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11]
                }]
            })
        }
    })

    export default {
        data() {
            return {
                articles: ""
            }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/articles').then(response => {
                console.log(response.data.data);
                this.articles = response.data.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }

</script>
