document.addEventListener('DOMContentLoaded', () => {
    function adminComp() {
        let admin = document.getElementById('studentsection');
        let studdash = document.querySelector('#dashcomponent');

        admin.addEventListener('click', adminnav);

        async function adminnav(e) {
            e.preventDefault();
            let com = await getDashboard();
            // Clear previous content in admindash before appending new content
            studdash.innerHTML = '';
            studdash.appendChild(com);
        }

        async function getDashboard() {
            try {
                let response = await fetch('./studentsec.html');
                let data = await response.text();
                // Create a new div element to hold the fetched content
                let contentDiv = document.createElement('div');
                contentDiv.innerHTML = data;
                return contentDiv;
            } catch (error) {
                console.log('Oops, error fetching the data:', error);
            }
        }
    }

    adminComp();
});
