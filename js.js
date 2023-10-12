function confirmSubmit() {
    // Menampilkan dialog konfirmasi
    var confirmation = confirm("Anda yakin ingin mengirimkan data booking?");

    // Jika pengguna menekan tombol "OK" pada konfirmasi, form akan dikirimkan (return true)
    // Jika pengguna menekan tombol "Cancel" pada konfirmasi, form tidak akan dikirimkan (return false)
    return confirmation;
}
