const p2 = document.querySelector('.p2');
//event handler
function ubahwarnap2 () {
	p2.style.backgroundColor = 'green';
}
p2.onclick = ubahwarnap2;

const p3 = document.querySelector('.p3');

function ubahwarnap3 () {
	p3.style.backgroundColor = 'salmon';
	// const pBaru = document.createElement('p');
	// const teksP = document.createTextNode('Paragraf Baru');

// simpan ke dalam paragraf
//pBaru.appendChild(teksP);
//const sectionA = document.getElementById('a');
//sectionA.appendChild(pBaru);
}
p3.onclick = ubahwarnap3;		



//event listener
const p4 = document.querySelector('section#b p');
let i = parseInt(1);
p4.addEventListener('click', function () {
	
	const ul = document.querySelector('section#b ul')
	const liBaru = document.createElement('li');
	const textLi = document.createTextNode('Item Baru'+i);
	liBaru.appendChild(textLi);
	ul.appendChild(liBaru);
	i++
	
});



p4.addEventListener('mouseenter', function() {
	p4.style.backgroundColor = 'red';
})
p4.addEventListener('mouseleave', function() {
	p4.style.backgroundColor = 'white';
})


