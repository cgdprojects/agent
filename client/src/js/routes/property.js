import routeImporter from '@enso-ui/ui/src/modules/importers/routeImporter';

const routes = routeImporter(require.context('./property', false, /.*\.js$/));
const RouterView = () => import('@enso-ui/ui/src/bulma/pages/Router.vue');

export default {
    path: '/property',
    component: RouterView,
    meta: {
        breadcrumb: 'property',
        route: 'property.index',
    },
    children: routes,
};
