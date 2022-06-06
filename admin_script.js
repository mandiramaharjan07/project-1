
let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header .account-box');
const select = document.getElementById("select");


document.querySelector('#menu-btn').onclick = () =>{
navbar.classList.toggle('active');

accountBox.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () =>{
    accountBox.classList.toggle('active');
    navbar.classList.remove('active');
}
window.onscroll = () =>{
    navbar.classList.remove('active');
    accountBox.classList.remove('active');
}

// function disable{

// }
// console.log(select.options[select.selectedIndex].text);
// function disable () {
//     console.log(select.options[select.selectedIndex].text);
//     if (select.options[select.selectedIndex].text === "completed"){
//         button.disabled = true;
//         button.remove();
//     }
//     console.log(button);
// }

