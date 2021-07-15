import CV from "./components/CV"
import AdminPanel from "./components/AdminPanel"
import Login from "./components/Login"
import Registration from "./components/Registration"
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
