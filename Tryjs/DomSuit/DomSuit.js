function pilihanComp () {
	const comp = Math.random()
	if ( comp < 0.34 ) return 'gajah'
		if (comp >= 0.34 && comp < 0.67 ) return 'orang'
			return 'semut'
	}

	function getHasil (comp, play) {
	// menentukan rules
	if( play == comp ) return hasil = 'SERI!';
	if( play == 'gajah' ) return hasil = ( comp == 'orang' ) ? 'MENANG!' : 'KALAH!';
	if( play == 'orang' ) return hasil = ( comp == 'gajah' ) ? 'KALAH!' : 'MENANG!';
	if( play == 'semut' ) return hasil = ( comp == 'orang' ) ? 'KALAH!' : 'MENANG!';
}


function putar () {
	const imgComp = document.querySelector('.img-komputer');
	const gambar = ['gajah', 'orang', 'semut'];
	let i = 0;
	const waktuMulai = new Date().getTime();


	setInterval( function () {

		if (new Date().getTime() - waktuMulai > 1000) {
			clearInterval;
			return;
		}
		imgComp.setAttribute('src', 'img/' +gambar[i++] + '.png');
		if (i == gambar.length) {
			i = 0;

		}
	}, 100 )
}





// let pGajah = document.querySelector('.gajah');
// pGajah.addEventListener('click', function () {
// 	const computer = pilihanComp();
// 	const play = pGajah.className;

// 	const hasil1 = getHasil(computer, play)

// 	const imgComp = document.querySelector('.img-komputer');
// 	imgComp.setAttribute('src', 'img/' + computer + '.png');
// 	const info = document.querySelector('.info');
// 	info.innerHTML = hasil1;

// });




//cara 2

let ip = 0;
let ic = 0;

const pilihan = document.querySelectorAll('li img');

pilihan.forEach( function(pil) {
	// statements
	pil.addEventListener('click', function () {
		const computer = pilihanComp();
		const play = pil.className;

		const hasil1 = getHasil(computer, play)

		
		let sComp = document.querySelector('.scomp h1');
		let sPlay = document.querySelector('.splay h1');

		putar();

		setTimeout(function () {
			const imgComp = document.querySelector('.img-komputer');
			imgComp.setAttribute('src', 'img/' + computer + '.png');
			const info = document.querySelector('.info');
			info.innerHTML = hasil1;

			if (hasil1 == 'MENANG!') {

				 ip++;
				 sPlay.innerHTML = ip;

			}else if ( hasil1 == 'KALAH!' ){
				ic++;
				sComp.innerHTML = ic;
			}

		}, 1000);

		

		
		

		console.log(hasil1);

		

		
	});

});


//scor 



