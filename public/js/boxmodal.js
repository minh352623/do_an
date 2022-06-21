var btn_cart = document.getElementById('js__box_user');

btn_cart.addEventListener("click",function(){
    
})



var left = document.querySelectorAll('.cart_item_left');
var right = document.querySelectorAll('.cart_item_right');

for (let j = 0; j < right.length; j++) {
    right[j].addEventListener("click",function(e){
            let btn = e.target;
            let btnnum = btn.parentElement.children[1];
            let valcar = btnnum.innerHTML;  
            let newvalue = parseInt(valcar)+1;
            btnnum.innerHTML = newvalue;                
  })    
    
}

for (let i = 0; i < left.length; i++) {
    left[i].addEventListener("click",function(e){ 
         // a--;
            let btn = e.target;
            let btnnum = btn.parentElement.children[1];
            let valcar = btnnum.innerHTML;  
            let newvalue = parseInt(valcar) -1;
            btnnum.innerHTML = newvalue;                    
    })
    
}


///form carrt

var btncart = document.querySelector('.js__formcart');
var formcart = document.querySelector('.form_cart');
var btnclose = document.querySelector('.btn_close')

btncart.addEventListener('click',function(){
    formcart.classList.add('open');
})

btnclose.addEventListener('click',function(){
    formcart.classList.remove('open');
})





