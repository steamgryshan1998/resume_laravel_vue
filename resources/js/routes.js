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
            component: CV,
            name: 'CV'
        },
        {
            path: '/adminpanel',
            component: AdminPanel,
            // beforeEnter: (to, form, next) => {
            //     axios.get('/api/athenticated').then(() =>{
            //         next()
            //     }).catch(()=>{
            //         return next({name: 'Login'})
            //     })
            // }
        },
        {
            path: '/login',
            component: Login,
            name: 'Login'
        },
        {
            path: '/signup',
            component: Registration
        }
    ]
}
