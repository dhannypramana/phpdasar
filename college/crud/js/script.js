// Ambil Elemen yang dibutuhkan menggunakan DOM
var keyword = document.getElementById('keyword');
var submit_keyword = document.getElementById('submit-keyword');
var table_container = document.getElementById('table-container');

keyword.addEventListener('keyup' , function() {
    
    // Buat Objek AJAX
    var xhr = new XMLHttpRequest();

    // Cek Kesiapan AJAX
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            table_container.innerHTML = xhr.responseText;
        }
    }

    // Eksekusi Ajax
    xhr.open('GET', 'ajax/books.php?keyword=' + keyword.value, true);
    xhr.send();
})