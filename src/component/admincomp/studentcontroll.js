// document.addEventListener('DOMContentLoaded', () => {
//     let users = [];

//     function register() {
//       const finame = document.getElementById('fname').value;
//       const lname = document.getElementById('lname').value;
//       const course = document.getElementById('course').value;
//       const year = document.getElementById('year').value;
//       const Mail = document.getElementById('email').value;
//       const pass = document.getElementById('password').value;

//       const user = {
//         firstname: finame,
//         lastname: lname,
//         course: course,
//         year: year,
//         email: Mail,
//         password: pass
//       };

//       users.push(user);
//       console.log(users);

//       displayUsers();
//       document.getElementById('registrationForm').reset();
//     }

//     function displayUsers() {
//       const userTableBody = document.getElementById('userTableBody');
//       userTableBody.innerHTML = users.map((user, index) => `
//         <tr>
//           <td>${index + 1}</td>
//           <td>${user.firstname}</td>
//           <td>${user.lastname}</td>
//           <td>${user.course}</td>
//           <td>${user.year}</td>
//           <td>${user.email}</td>
//         </tr>
//       `).join('');
//     }

//     let stud = document.querySelector('#butt');

//     console.log(stud);
//   });