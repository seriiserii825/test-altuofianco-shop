import useDecrypt from "../../../vue/hooks/useDecrypt";
import {axiosInstance} from "../../../vue/utils/axios-instances";
export default function checkToken() {
    const token = localStorage.getItem('altuofianco_user');
    if (token) {
        checkTokenApi(token);
    }
    async function checkTokenApi(token) {
        const decrypted = useDecrypt(token);
        const user = JSON.parse(decrypted);
        const auth_token = user.auth_token;
        try {
            const result = await axiosInstance.get(`/check_token?auth_token=${auth_token}`);
            if (result.data.status !== 'success') {
                localStorage.removeItem('altuofianco_user');
                window.location.reload();
            }
        } catch (e) {
            console.log(e, 'e')
            localStorage.removeItem('altuofianco_user');
            window.location.reload();
        }
    }
}