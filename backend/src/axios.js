import axios from "axios";
import store from "./store";
import router from "./router";

const url=`${import.meta.env.VITE_BASE_URL}`;
//console.log(JSON.stringify(import.meta.env));
const axiosClient = axios.create({
    baseURL: `${import.meta.env.VITE_BASE_URL}`
    //baseURL: 'http://localhost:8000/api'
});

//interceptor is a special function called before a request is made//
axiosClient.interceptors.request.use(config => {
    config.headers.Authorization = `Bearer ${store.state.user.token}`
    return config;
})

axiosClient.interceptors.response.use(response => {
    //console.log(response);
    return response;
}, error => {
    if (error.response.status === 401) {
        sessionStorage.removeItem('TOKEN');
        router.push({ name: 'login' })
    }

    throw error;
})

export default axiosClient