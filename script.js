function goBack() {
    window.history.back();
}
function showOrderSummary(nama, makanan, inputMakanan, minuman, inputMinuman) {
    console.log('Pesanan Terkirim:');
    console.log('Nama: ' + nama);
    console.log('Makanan: ' + makanan + inputMakanan);
    console.log('Minuman: ' + minuman + inputMinuman);
    console.log('makanan lain: ' + inputMakanan);
    console.log('minuman lain: ' + inputMinuman);
}