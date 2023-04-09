const useSetCookie = (name, data) => {
    let cookie_date = new Date();
    cookie_date.setMonth(cookie_date.getMonth() + 1);
    document.cookie = name + '=' + data + ';expires=' + cookie_date.toUTCString();
}
export default useSetCookie;
