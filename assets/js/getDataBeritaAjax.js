function ajaxGetDataBerita() {
    $.ajax({
        url: '../controller/news/get_data_news.php', // URL ke file PHP Anda
        method: 'GET', // Metode request
        dataType: 'json', // Format data yang diharapkan
        success: function(response) {
            // Mengosongkan daftar sebelum mengisi data baru
            $('#news-list').empty();
            
            // Iterasi data dan menambahkannya ke list
            $.each(response, function(index, item) {
                $('#news-list').append('<li class="list-group-item">' + item.description + '</li>');
                console.log(item.description)
            });
        },
        error: function(xhr, status, error) {
            console.log('Error:', error); // Menangani error
        }
    });
}

// Panggil fungsi ajaxGetDataBerita
ajaxGetDataBerita();