import axios from 'axios';
import router from '../router';

const baseUrl = 'http://localhost:8000/api';

const api = axios.create({
  baseURL: `${baseUrl}`,
  withCredentials: true,
});


api.interceptors.response.use(
    response => {
        if (response.status === 200 || response.status === 201) {
            // console.log('Request passed throught interceptor!',response)
            return Promise.resolve(response.data);
        } else {
            return Promise.reject(response.data);
        }
    },
    error => {
        console.log(error);
        if (error.response.status) {
            switch (error.response.status) {
                case 401:
                    router.push('/login');
                    break;

                default:
                break;
            }
            return Promise.reject(error.response.data);
        }
    }
);

export default api;
