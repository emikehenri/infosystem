document.addEventListener('DOMContentLoaded', () => {
    let navlinks = [
    {
        nav_id: 'studentsection',
        nav_content: './admincomp/studentsec.html'
    },
    {
        nav_id: 'teachersection',
        nav_content: './admincomp/teachersec.html'
    }
];

    function Nav(){
        let studMain = document.querySelector('#dashcomponent');

       

        navlinks.forEach(links => {
            let studboard = document.getElementById(links.nav_id);
            studboard.addEventListener('click', navigator);
            async function navigator(e){
                e.preventDefault();
                await GetDashboard(links.nav_content)

            }
        })

       async function GetDashboard(url){
        try{
            let response = await fetch(url)
            if(!response.ok){
                throw new Error(`${response.text}`)
            }

            let data = await response.text()
            studMain.innerHTML = data;

        }catch (error){
            console.error('failed to connect');
        }

       }
    }
    Nav();


})