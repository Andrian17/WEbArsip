//DOM
//bedasakan elemen
const judul = document.getElementById('judul');
judul.style.color = 'red';
judul.style.backgroundColor = '#ccc';

const p = document.getElementsByTagName('p')
p[1].style.color = 'red';
p[2].style.backgroundColor = '#ccc';

//query selector

const p4 = document.querySelector('#b p');
p4.style.color = 'yellow';
p4.style.backgroundColor = 'blue';


const li2 = document.querySelector('selector#b ul li:nth-child2');
li2.style.backgroundColor = 'orange';
