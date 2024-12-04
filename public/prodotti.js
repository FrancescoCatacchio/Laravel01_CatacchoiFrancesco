AOS.init();

let navbar = document.querySelector('#navbar');

window.addEventListener('scroll',()=>{
    if(window.scrollY >10){
        navbar.classList.add('bg-transp')
        navbar.classList.remove('nav-cust')
    }else{
        navbar.classList.add('nav-cust')

    }
})