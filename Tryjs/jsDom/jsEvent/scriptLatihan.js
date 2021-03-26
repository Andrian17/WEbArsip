//toggle / ganti warna
let btn = document.getElementById('btn1')
//let btn = document.getElementsByTagName('body');
btn.onclick = function () {

	document.body.classList.toggle('salmon');
}


//acak warna

let newBtn = document.createElement('button');
let textBtn = document.createTextNode('acak warna');
newBtn.appendChild(textBtn);
newBtn.setAttribute('type', 'button');	
btn1.after(newBtn);

newBtn.addEventListener('click', function () {
	let r = Math.round(Math.random() * 255 + 1);
	let g = Math.round(Math.random() * 255 + 1);
	let b = Math.round(Math.random() * 255 + 1);

	document.body.style.backgroundColor = 'rgb('+r+', '+g+', '+b+')';
});


//range warna rgb

// let bMerah = document.getElementById('merah');
// bMerah.addEventListener('input', function () {
// 	const r = bMerah.value;
// 	const g = bHijau.value;
// 	const b = bBiru.value;
// 	document.body.style.backgroundColor = 'rgb('+r+','+g+', '+b+')';
// });

// let bHijau = document.getElementById('hijau');
// bHijau.addEventListener('input', function () {
// 	const r = bMerah.value;
// 	const g = bHijau.value;
// 	const b = bBiru.value;
// 	document.body.style.backgroundColor = 'rgb('+r+','+g+', '+b+')';
// });

// let bBiru = document.getElementById('biru');
// bBiru.addEventListener('input', function () {
// 	const r = bMerah.value;
// 	const g = bHijau.value;
// 	const b = bBiru.value;
// 	document.body.style.backgroundColor = 'rgb('+r+','+g+', '+b+')';
// });



//simple trick

let pr = document.getElementById('awal');

pr.addEventListener('input', function ()  {

	let bBiru = document.getElementById('biru');
	let bMerah = document.getElementById('merah');
	let bHijau = document.getElementById('hijau');

	const r = bMerah.value;
	const g = bHijau.value;
	const b = bBiru.value;
	document.body.style.backgroundColor = 'rgb('+r+','+g+', '+b+')';
});

//ganti warna bersarkan kursor mause

document.body.addEventListener('mousemove', function (event) {
	let Xpos = Math.round((event.clientX / window.innerWidth) * 255);
	let Ypos =  Math.round((event.clientY / window.innerHeight) * 255);
	console.log(Xpos);
	document.body.style.backgroundColor = 'rgb('+Xpos+', '+Ypos+', '+100+')'
	
});

