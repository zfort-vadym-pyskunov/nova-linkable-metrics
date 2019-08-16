Nova.booting((Vue, router, store) => {
    Vue.component('linkable-partition-metric', require('./components/Metrics/LinkablePartitionMetric'));
    Vue.component('linkable-trend-metric', require('./components/Metrics/LinkableTrendMetric'));
    Vue.component('linkable-value-metric', require('./components/Metrics/LinkableValueMetric'));
});
