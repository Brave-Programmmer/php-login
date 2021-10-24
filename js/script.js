main_ul = document.getElementsByClassName('.ul_tag');
products = document.querySelector('.pro');
dropdown = document.querySelector('.dropdown_ul')



products.addEventListener('click', ()=>{
//document.getElementsByClassName("maincontent").style.display = 
    dropdown.classList.add('v-resp');
})

    // products.addEventListener('mouseleave', ()=>{
    //     //    document.getElementsByClassName("maincontent").style.display = 
    //         dropdown.classList.remove('v-resp');
    //     })

