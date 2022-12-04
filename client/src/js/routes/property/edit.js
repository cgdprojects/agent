const PropertyEdit = () => import('../../pages/property/Edit.vue');

export default {
    name: 'property.edit',
    path: ':property/edit',
    component: PropertyEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Property',
    },
};
