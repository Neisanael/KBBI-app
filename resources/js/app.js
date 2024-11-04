import './bootstrap';

const kataList = [
    { kata: "Akademik", definisi: "Segala sesuatu yang berhubungan dengan dunia pendidikan di kampus." },
    { kata: "Asisten Dosen", definisi: "Mahasiswa yang membantu dosen dalam kegiatan akademik." },
    { kata: "KRS", definisi: "Kartu Rencana Studi, digunakan untuk memilih mata kuliah setiap semester." },
    // Tambahkan kata lain sesuai data yang kamu miliki
];

const kataContainer = document.getElementById('kata-container');
const searchBar = document.getElementById('searchBar');

// Fungsi untuk menampilkan daftar kata
function displayKata(kataList) {
    kataContainer.innerHTML = '';
    kataList.forEach(kataItem => {
        const kataElement = document.createElement('div');
        kataElement.classList.add('kata-item');
        kataElement.innerHTML = `<strong>${kataItem.kata}</strong>: ${kataItem.definisi}`;
        kataContainer.appendChild(kataElement);
    });
}

// Menampilkan semua kata di awal
displayKata(kataList);

// Fungsi pencarian
searchBar.addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const filteredKata = kataList.filter(kataItem =>
        kataItem.kata.toLowerCase().includes(searchTerm)
    );
    displayKata(filteredKata);
});


