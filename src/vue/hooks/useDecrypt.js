import CryptoJS from "crypto-js";
const useDecrypt = (data) => {
    const bytes = CryptoJS.AES.decrypt(data, 'secret key 123');
    return bytes.toString(CryptoJS.enc.Utf8);
}
export default useDecrypt;
