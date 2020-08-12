console.log("Js Active");

//ambil elemen2 yang di butuhkan 
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tombolCari.addEventListener('mouseover',function(){
//     alert('Berhsil sad');
// });

//tambahkan evebt ketika keyword di tulis
keyword.addEventListener('keyup', function() {
    // alert("dengar");

    //buat objek ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // console.log("ajax oke");
            // console.log(xhr.responseText);
            container.innerHTML = xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open('GET', 'ajax/data-admin.php?keyword=' + keyword.value, true);
    xhr.send();


});