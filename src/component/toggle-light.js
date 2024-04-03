//this lines of codes functions the light and dark theme
document.addEventListener('DOMContentLoaded', () => {
    let dayBtn = document.querySelector('.light-button');
    let sidechange = document.querySelector('.sidebar-container');
    let titletext = document.querySelector('.title-text');
    let textmenu = document.querySelectorAll('.navlink');
    let navbarColor = document.querySelector('.dash-navbar');
    let usermail = document.querySelector('.user-email');
    let userrole = document.querySelector('.role');
    let sun = document.querySelector('.sun');
    let moon = document.querySelector('.moon');
    let switches = false;
    
    dayBtn.addEventListener('click', (e) => {
        e.preventDefault();
        switches = !switches;
        toggle();
    });
    
    const toggle = () => {
        if (switches) {
            sun.style.display = 'none';
            moon.style.display = 'block';
            dayBtn.style.backgroundColor = '#050505';
            sidechange.style.backgroundColor = '#0F1C2E';
            titletext.style.color = '#4d648d';
            usermail.style.color = 'white';
            userrole.style.color = 'white';
            // Loop through each item in textmenu NodeList
            textmenu.forEach(item => {
                item.style.color = 'white';
            });
        } else {
            moon.style.display = 'none';
            sun.style.display = 'block';
            dayBtn.style.backgroundColor = 'lightyellow';
            sidechange.style.backgroundColor = '#ffff';
            titletext.style.color = '#050505';
            usermail.style.color = '#050505';
            userrole.style.color = '#050505';
            // Loop through each item in textmenu NodeList
            textmenu.forEach(item => {
                item.style.color = '#050505';
            });
        }
    };
    
})
