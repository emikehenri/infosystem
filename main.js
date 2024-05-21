document.addEventListener('DOMContentLoaded', () => {
        let signin = document.querySelector('#signin');

        signin.addEventListener('click', (e) => {
            e.preventDefault();
            console.log('clicked');
        })

});