import CryptoJS from "crypto-js";
const useEncrypt = (data) => {
    return CryptoJS.AES.encrypt(data, 'secret key 123').toString();
}
export default useEncrypt;
