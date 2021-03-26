
// //object literal
// let mahasiswa = {
// 	nama : 'Andrian',
// 	energi : 10,
// 	makan : function (porsi) {
// 		/* body... */
// 		this.energi = this.energi + porsi;
// 		console.log(`Halo ${this.nama}, Selamat Makan`);
// 	}
// }

// let mahasiswa2 = {
// 	nama : 'Cimen',
// 	energi : 14,
// 	makan : function (porsi) {
// 		/* body... */
// 		this.energi = this.energi + porsi;
// 		console.log(`Halo ${this.nama}, Selamat Makan`);
// 	}
// }


// function declaration

// //useless
// function dataDiri () {
// 	var data = ['nama', 'Alamat', 'umur', 'pacar', 'hobi'];
// 	var a = "";
// 	var b = [data.length];
// 	var tes;

// 	//menambah array
// 	//data.push("status");
// 	//menghapus index array
// 	//data.pop();

// 	for (var i = 0; i < data.length; i++) {
// 		a = prompt("Input data : " + data[i]);
// 		b[i] = a;
// 		 tes += data[i] + "	: " +b[i] + "\n";
// 	}
// 	document.write(tes);
// }

//  dataDiri();

//foreach pada array
// var data = ['nama', 'Alamat', 'umur', 'pacar', 'hobi'];
// data.forEach( function(e, i) {
// 	// statements
// 	document.write("mahasiswa ke " + (i+1) +" adalah : "+ e + "\t"); 
// });


// //funtion expression
// var nama = function (nama) {
// 	document.write("Nama Saya : " + nama);
// 	// body... 
// }
// nama("Andrian");


// //function recursife

// function hitRecurssif (a) {
// 	if (a == 0) {
// 		return;
// 	}
// 	console.log(a);
// 	return a - hitRecurssif(a - 1);
// }

// hitRecurssif(5);

// function recursif2 (n) {
// 	if (n > 7) {
// 		return;
// 	}

// 	document.write("Andrian");
// 	document.write("<br>");
// 		return n + recursif2(n+1);
// }

// recursif2(1);
