let notif = document.querySelector('.notif-bell');
let bellon = document.querySelector('.on-bell');
let belloff = document.querySelector('.off-bell');

let toggle = false;

notif.addEventListener('click', (e) => {
    e.preventDefault();
    toggle = !toggle;
    togglenotif();
})

function togglenotif(){
    if(bellon.style.display == 'block'){
        belloff.style.display = 'block';
        notif.style.backgroundColor = 'lightblue'
        bellon.style.display = 'none';
        toggle = false;
    }else{
        belloff.style.display = 'none';
        notif.style.backgroundColor = 'lightpink';
        bellon.style.display = 'block';
        toggle = true;
    }
}