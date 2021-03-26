

//manipulation dom js 1


let judul = document.getElementById('judul');
judul.innerHTML = 'Andrian Title';
judul.setAttribute('name', 'Adri');

let a = document.querySelector('section a');
a.innerHTML = 'Andrian';
a.removeAttribute('href');
a.classList.add('styl1');

let p = document.querySelector('section .p1');
p.classList.remove('p1');