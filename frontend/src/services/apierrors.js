import axios from 'axios'
// const baseURL = "https://anchoriaam.com/loanapp/public"
const baseURL = "http://localhost:8000"

export default {
    sendErrors(error){
        return axios({
            method: 'post',
            url: baseURL+'/api/senderrors',
            data: error
        });
    }
}