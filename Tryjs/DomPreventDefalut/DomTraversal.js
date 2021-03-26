const x = document.querySelectorAll('.close');

const card = document.querySelectorAll('.card');

const cont = document.querySelector('.container');


// x.addEventListener('click', function () {
// 	cont.removeChild(card);
// })

// for (let i = 0; i < x.length; i++) {
// 	x[i].addEventListener('click', function (e) {
// 		e.target.parentElement.style.display = 'none';
	
// 	});
// }

x.forEach( function(element) {
	element.addEventListener('click', function (e) {
		e.target.parentElement.style.display = 'none';
		e.preventDefault();

		//event bubling
		e.stopPropagation();
	})
});

const cards = document.querySelectorAll('.card');
card.forEach( function(cards) {
	cards.addEventListener('click', function (e) {
		alert('okk');
	})
});