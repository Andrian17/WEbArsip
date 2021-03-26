
//obj biasa
var aku = {

	nama : "Andrian",
	umur : 19,
	alamat : {
		jalan : "Jl. Lanco",
		kota : "Bima"
	},
	ip : [3.25, 4, 2.9, 3]

};

//obj constraktor
function data (nama, umur, Alamat) {
	this.nama = nama;
	this.umur = umur;
	this.Alamat = Alamat;
}

var aku2 = new data('Andrian', 19, 'Bima');

function halo (nama) {
	console.log(this);
	console.log(nama);

}
//new halo();
var obj2 = new halo('Cimen');