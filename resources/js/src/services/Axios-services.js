import axios from 'axios';

export const instance = (baseURL) => {
    const axiosInstance = axios.create({
        baseURL,
        headers: {
            "Content-Type": "application/json",
        },
    });
    return axiosInstance;
};
class AxiosService {
    static instance;
    constructor() {
        this.BASE = this.initInstance();
    }
    static getInstance() {
        if (!AxiosService.instance) {
            AxiosService.instance = new AxiosService();
        }
        return AxiosService.instance;
    }
    initInstance() {
        const axios = instance(
            'https://delivery-api-6ats.onrender.com'
        );
        axios.interceptors.request.use(
            async config => {
                // TODO Cheack token with Config
            },
            error => {
                return Promise.reject(error);
            }
        )
        return axios;
    }
}
export default AxiosService.getInstance();