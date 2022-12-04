const PropertyShow = () => import('../../pages/property/Show.vue');

export default {
    name: 'property.show',
    path: ':property',
    component: PropertyShow,
    meta: {
        breadcrumb: 'show',
        title: 'Show Property',
    },
};
