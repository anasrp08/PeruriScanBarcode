$(document).ready(function() {

    $(document).on('input', '#nohu', function() {


        var nohu = $('#nohu').val();

        $('#labelhu').text(nohu);

        setTimeout(insertData(), 1000);
        setTimeout(function() {
            $('#labelhu').text();
        }, 3000);


    })

    function fadeout() {
        $('#labelhu').text();
    }

    function insertData() {
        var plant = $('#plant').val();

        var scanby = $('#scanby').val();

        var ta = $('#ta').val();
        var tglkirim = $('#tglkirim').val();
        var pecahan = $('#pecahan').val();
        var nohu = $('#nohu').val();
        if (nohu.length == 10) {
            var data = new FormData();
            data.append('plant', plant);
            data.append('scanby', scanby);

            data.append('ta', ta);
            data.append('tglkirim', tglkirim);
            data.append('pecahan', pecahan);
            data.append('nohu', nohu); // Munculkan loading simpan
            console.log(data)
            var x = document.getElementById("myAudio");

            //=========================
            $.ajax({
                    url: 'p_simpanscan.php', // File tujuan
                    type: 'POST', // Tentukan type nya POST atau GET
                    data: data, // Set data yang akan dikirim
                    processData: false,
                    contentType: false,
                    dataType: "text",
                    beforeSend: function(e) {
                        if (e && e.overrideMimeType) {
                            e.overrideMimeType("application/json;charset=UTF-8");
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika terjadi error
                        console.log(xhr.responseText);

                    }

                })
                .done(function(response) {
                    console.log(response)
                    var response1 = JSON.parse(response);
                    console.warn(response1.status);
                    if (response1.status == "0") {
                        //do nothing
                    } else if (nohu.length > 10) {
                        swal({
                            type: 'error',
                            title: 'No HU terlalu panjang',
                            text: nohu
                        })
                    } else {
                        x.play();
                        swal({
                            type: 'error',
                            title: 'Double No. HU',
                            text: response1.pesan + " " + nohu,
                            footer: response1.proc,
                            html: '<input id="nodoos" class="swal2-input" placeholder="Masukkan No Doos">' +
                                '<input id="nopallet" class="swal2-input" placeholder="Masukkan No Pallet">',
                            focusConfirm: false,
                            preConfirm: () => {

                                var nodoos = document.getElementById('nodoos').value
                                var nopallete = document.getElementById('nopallet').value
                                data.append('nodoos', nodoos);
                                data.append('nopallete', nopallete);

                                $.ajax({
                                    url: 'p_simpandouble.php', // File tujuan
                                    type: 'POST', // Tentukan type nya POST atau GET
                                    data: data, // Set data yang akan dikirim
                                    processData: false,
                                    contentType: false,
                                    dataType: "text",
                                    beforeSend: function(e) {
                                        if (e && e.overrideMimeType) {
                                            e.overrideMimeType("application/json;charset=UTF-8");
                                        }
                                    },
                                    error: function(xhr, ajaxOptions, thrownError) { // Ketika terjadi error
                                        alert("terjadi kesalahan");
                                        console.log(xhr.responseText);

                                    }

                                }).done(function(response) {
                                    console.log(response)
                                })

                            }
                        }).then(function(result) {
                            console.log(result)

                        })

                    }
                    $('#nohu').val('');
                }).fail(function() {
                    swal('Oops...', 'Simpan Gagal !', 'error');
                })
        } else {
            console.log("kurang")

        }
    }

});