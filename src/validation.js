document.addEventListener('DOMContentLoaded', () => {
    function Validate(){
        let login = document.querySelector('#signin');

            login.addEventListener('click', (e) => {
                e.preventDefault();
                let email = document.querySelector('#mail').value;
                let passlog = document.querySelector('#passw').value;
                
                Auth(email, passlog);
        });

        function Auth(mail, pass){
            let emailadd = mail;
            let passw = pass
            if(emailadd === "Admin" || passw === 'admin'){
              window.location.href = "./component/dashboard.html";

            }else{
                console.log('error')
            }
        }
    }
    Validate()

});