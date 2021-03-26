//dom selection

const judul = document.getElementById('judul'); //element

judul.style.color = 'red';
judul.innerHTML = 'Road to pro';

let paraf = document.getElementsByTagName('p'); //html collection
//mirip array
//paraf[0].style.backgroundColor = 'grey';
let bg = ['grey', 'lightblue', 'orange', 'salmon'];
for (var i = 0; i < paraf.length; i++) {
	paraf[i].style.backgroundColor = bg[i];
}

let h1 = document.getElementsByTagName('h1')[0]; //memilih 1 element menggunakan getByTagName
h1.style.fontSize = '40px';

let a = document.getElementsByTagName('p')[1];
a.innerHTML = 'Andrian000';

let li = document.querySelector('#b ul li:nth-child(2)');
li.innerHTML = 'Ini Saya';
li.style.backgroundColor = 'lightblue';

let all = document.querySelectorAll('ul li');
for (var i = 0; i < all.length; i++) {
	all[i].style.color = 'orange';
}


