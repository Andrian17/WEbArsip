
//dom manipulation

//buat elemen baru
//cara 1
const pBaru = document.createElement('p');
const teksP = document.createTextNode('Paragraf Baru');

// simpan ke dalam paragraf
pBaru.appendChild(teksP);
// simpan pBaru di body
const sectionA = document.getElementById('a');
sectionA.appendChild(pBaru);

//cara2
let liBaru = document.createElement('li');
const teksLi = document.createTextNode('li Baru cara 2');
liBaru.appendChild(teksLi);
let ul = document.querySelector('section#b ul')
const li2 = ul.querySelector('li:nth-child(2)')
ul.insertBefore(liBaru, li2);


//remove elemen html
const link = document.getElementsByTagName('a')[0];
sectionA.removeChild(link);

//replace

const sectionB = document.getElementById('b');
const p4 = sectionB.querySelector('p');
const h2Baru = document.createElement('h2');
const teksH2Baru = document.createTextNode('Judul Baru');
h2Baru.appendChild(teksH2Baru);
sectionB.replaceChild(h2Baru, p4);

//style
pBaru.style.backgroundColor = 'salmon';
h2Baru.style.backgroundColor = 'salmon';
liBaru.style.backgroundColor = 'salmon';
