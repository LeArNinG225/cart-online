const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}
if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

function show_element(id) {
    curr = document.getElementById(id).style.display;
    // console.log("click hua : ");
    // console.log(curr);
    console.log(typeof curr);
    if (curr == 'none' || curr == null  || curr == "")
        document.getElementById(id).style.display = 'block';
    else 
        document.getElementById(id).style.display = 'none';
}


