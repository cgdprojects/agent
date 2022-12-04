const PropertyCreate = () => import('../../pages/property/Create.vue');

export default {
    name: 'property.create',
    path: 'create',
    component: PropertyCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Property',
    },
};
