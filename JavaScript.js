//datauser jumlah
function kurang() {
	const jumlah = document.getElementById('jumlah');
	let a=1;
	let output = jumlah.value;
	if(output == a){
		jumlah.value=a;
	}
	else if(output > a){
		let b = parseInt(output) - a;
		jumlah.value=b;
	}
}

function tambah(){
	const jumlah = document.getElementById('jumlah');
	let a=1;
	let output = jumlah.value;
	if(output >= a){
		let b = parseInt(output) + a; //parseInt = merubah data string menjadi int, karena output berasal dari value yang bertype data string..
		jumlah.value= b;
	}
}
//datauser jumlah

const gambar = document.getElementsByName('gambar');
//data furniture user
function datauserfur(){
	

}