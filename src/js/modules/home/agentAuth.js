export default function agentAuth() {
    const agent = document.querySelector('.agent');
    const agent_btn = document.querySelector('.agent__btn');
    agent_btn.addEventListener('click', function () {
        agent_btn.style.display = 'none';
        agent.classList.add('active');
    });
}