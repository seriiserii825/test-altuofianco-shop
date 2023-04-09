import useDecrypt from "../../../vue/hooks/useDecrypt";
export default function toggleLoggedContent() {
    const logged_all = document.querySelectorAll('.logged');
    const not_logged_all = document.querySelectorAll('.not-logged');
    const user = localStorage.getItem('altuofianco_user');
    if (user) {
        logged_all.forEach((item) => {
            item.style.display = 'block';
        });
        not_logged_all.forEach((item) => {
            item.style.display = 'none';
        });
        const token = JSON.parse(useDecrypt(user));
        console.log(JSON.stringify(token, null, 4), 'token')
        setAgent(token);
    } else {
        logged_all.forEach((item) => {
            item.style.display = 'none';
        });
        not_logged_all.forEach((item) => {
            item.style.display = 'block';
        });
    }
    function setAgent(token) {
        const agent = document.querySelector('.agent');
        const agent_email = document.querySelector('.agent__email');
        const agent_phone = document.querySelector('.agent__phone');
        const agent_title = document.querySelector('.agent__title');
        const agent_list_phone = document.querySelector('.agent__list--phone');
        const agent_list_email = document.querySelector('.agent__list--email');
        const agent_img = document.querySelector('.agent__img img');
        agent_img.src = token.agent_photo;
        agent_title.innerHTML = token.agent_name;
        agent_email.setAttribute('href', `mailto:${token.agent_email}`);
        agent_phone.setAttribute('href', `tel:${token.agent_phone.replace(/[^\d]/g, '')}`);
        agent_list_phone.querySelector('span').textContent = token.agent_phone;
        agent_list_email.querySelector('span').textContent = token.agent_email;
        agent_list_phone.setAttribute('href', `tel:${token.agent_phone.replace(/[^\d]/g, '')}`);
        agent_list_email.setAttribute('href', `mailto:${token.agent_email}`);
        setTimeout(() => {
            agent.classList.add('visible');
        }, 500);
    }
}