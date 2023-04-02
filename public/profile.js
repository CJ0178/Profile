function changeColorNav(){
    var navbar = document.getElementById('navbar');
    var scrollValue = window.scrollY;
    console.log(scrollValue);
    if(scrollValue < 300){
        navbar.classList.remove('navColor');
    } else {
        navbar.classList.add('navColor');
    }
    
    // const responsive1 = window.matchMedia('(max-width: 832px)');
    // if(responsive1.matches){
    //     if(scrollValue < 100){
    //         navbar.classList.remove('navColor');
    //     } else {
    //         navbar.classList.add('navColor');
    //     }
    // }
    
    // const responsive2 = window.matchMedia('(max-width: 540px)');
    // if(responsive2.matches){
    //     if(scrollValue < 78){
    //         navbar.classList.remove('navColor');
    //         navbar.classList.remove('menu_color');
    //     } else {
    //         navbar.classList.add('navColor');
    //         navbar.classList.remove('menu_color');
    //     }
    // }
}
window.addEventListener('scroll', changeColorNav);