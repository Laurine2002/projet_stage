let popup_btn=document.querySelector(".open-popup");
let popup_backs=document.querySelector(".popup-back");
let popup_forms=document.querySelector(".popup-form");
let modal_close=document.querySelectorAll(".close-popup");

console.log("js");

const fActivePopup=event=>{
    popup_backs.classList.toggle("active");
};


popup_btn.addEventListener('click', fActivePopup );

modal_close.forEach ( close=>{
    close.addEventListener('click',function(event){
        popup_backs.classList.remove("active");
        (popup_forms).reset()
    });
});

popup_backs.addEventListener('click', function(event){
    popup_backs.classList.remove("active");
});
popup_forms.addEventListener('click', function(e){ e.stopPropagation()});






