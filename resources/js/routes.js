import MainComponent from "./components/MainComponent"
import AdminPanel from "./components/AdminPanel"
import Login from "./components/Login"
import Registration from "./components/Registration"
import CV from "./components/CV";
export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: CV
        },
        {
            path: '/adminpanel',
            component: AdminPanel
        },
        {
            path: '/login',
            component: Login
        },
        {
            path: '/signup',
            component: Registration
        }
    ]
}
