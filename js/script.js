let demo = document.getElementById("countdown");
let deadline = new Date("March 5, 2024, 12:37:25").getTime(); 
let x = setInterval(function() { 
let now = new Date().getTime(); 
let time = deadline - now; 
let days = Math.floor(time / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((time%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((time % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((time % (1000 * 60)) / 1000); 
countdown.innerHTML = days + " Days : "  
+ hours + " Hours :" + minutes + " Minutes : " + seconds + " Seconds";
conhahsole.log(days + "Days : "  
+ hours + " Hours : " + minutes + " Minutes : " + seconds + " Secodns");
// check the time if its expired
    if (time < 0) { 
        clearInterval(x); 
        countdown.innerHTML = "Time is Up!"; 
    } 
}, 1000); 



window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 100)
})


// show/hide navmenu
const menu=document.querySelector(".nav_menu");
const menuBtn=document.querySelector("#open-menu-btn");
const closeBtn=document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click',()=>{
    menu.style.display="flex";
    closeBtn.style.display="inline-block";
    menuBtn.style.display="none";
})

// close navmenu
const CloseNav=()=>{
    menu.style.display="none";
    closeBtn.style.display="none";
    menuBtn.style.display="inline-block";
}
closeBtn.addEventListener('click',CloseNav)



// faqs
const faqs =document.querySelectorAll('.faq');
faqs.forEach(faq => {
    faq.addEventListener('click',()=>{
        faq.classList.toggle('open');
        // 
        const icon =faq.querySelector('.faq_icon i');
        if(icon.className === 'fa-brands fa-plus'){
            icon.className="fa-solid fa-minus";
        }
        else{
            icon.className="fa-brands fa-plus";
        }
    })
})

