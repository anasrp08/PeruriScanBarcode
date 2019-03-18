$(document).ready(function(){
	
	// Sembunyikan loading simpan, loading ubah, loading hapus, pesan error, pesan sukes, dan tombol reset
	 
	$(document).on('input','#noWa',function(){
		var phone=$('#noWa').val();
	   if(phone.indexOf('0')!==0){
		 alert('Awali Nomor dengan 08');
		 $('#noWa').val('');
	   }
	});
	 
	
	$("#btn-simpan").click(function(){ // Ketika tombol simpan di klik
		// debugger
		var data = new FormData();
		
		var getChecked = document.getElementById("defaultCheck17").checked;
		var nama = document.getElementById("namaDepan").name;
		var alamat1 = document.getElementById("alamat").name;
		var kota1 = document.getElementById("kota").name;
		var birthdate1 = document.getElementById("birthdate").name;
		var email1 = document.getElementById("email").name;
		// var angktn1 = document.getElementById('input[name="angkatan"]').name;
		var latihan1 = document.getElementById("latihan").name;
		var tujuan1 = document.getElementById("tujuan").name;
		var noWa1 = document.getElementById("noWa").name;

		var namaDepan=$("#namaDepan").val();
		var namaBlkg=$("#namaBlkg").val();
		var alamat=$("#alamat").val();
		var kota=$("#kota").val();
		var birthdate=$("#birthdate").val();
		// var kelamin=$("#namaDepan").val();
		var pendidikan=$("#pendidikan").val();
		 
		var email=$("#email").val();
		var noWa=$("#noWa").val();
		var angktn=$('input[name="angkatan"]:checked').val();
		var latihan=$("#latihan").val();
		var tujuan=$("#tujuan").val();
		var kelamin=$('input[name="cmethod"]:checked').val();
		var bidPend=$("#bidPend").val();
		var FB=$("#FB").val();
		var IG=$("#IG").val();
		var twitter=$("#twitter").val();
		var bidKeahlian=$("#bidKeahlian").val();
		// var chkAlat = [];
		var fotoEmpty=document.getElementById("foto");
		// var ktpEmpty=document.getElementById("ktp");
		//  console.log(fotoEmpty.files.length)
		//  console.log(ktpEmpty.files.length)
		function getValueUsingClass(){
		
			/* declare an checkbox array */
			var chkAlat = [];
			
			/* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
			$(".form-check-input:checked").each(function() {
				chkAlat.push($(this).val());
			});
			
			/* we join the array separated by the comma */
			var selected;
			selected = chkAlat.join(',');
			/* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
			if(selected.length == 0){
				alert("Pilih salah satu alat terlebih dahulu");
				return false
				// alert("You have selected " + selected);		
				// swal("Ada Form yang belum terisi!", selected, "warning");
			} 
			
			data.append('busur',chkAlat);
				return true
				// swal("tes", "belum memilih", "warning");
			
		}
		getValueUsingClass()
		if(isEmpty($("#namaDepan"),nama)){ 
			// if(isEmpty(namaBlkg)){ 
				if(isEmpty($("#alamat"),alamat1)){
					if(isEmpty($("#kota"),kota1)){
						if(isEmpty($("#birthdate"),birthdate1)){
							if(isEmpty($("#email"),email1)){
								if(isEmpty($("#noWa"),noWa1)){
									if(isEmpty($('input[name="angkatan"]:checked'))){
										if(isEmpty($("#latihan"),latihan1)){
										if(isEmpty($("#tujuan"),tujuan1)){
											if(fotoEmpty.files.length != 0){
												// if(){
												// if(ktpEmpty.files.length != 0){
													if(GetChecked(getChecked)){
													// alert("esd")
													// getValueUsingClass();
													Exec()
													// swal("Ada Form yang belum terisi!", "Silahkan isi form secara lengkap & benar", "warning");
												}
											// }

											}

										}

									}
								}

								}
							}

						}
					}
				}
			
		}
		function isEmpty(comp,Name){
			if(comp.val().trim() ==""){
				swal("Form "+Name +" Belum Terisi!", "Silahkan isi form secara lengkap & benar", "warning");
				comp.css({"background-color": "#f3000052"})
				return false
			}
			comp.css({"background-color": "transparent"})
			return true
		}
		function GetChecked(comp){
			if(comp==false){
				swal("Pernyataan belum di centang!", "Silahkan centang pernyataan", "warning");	
				return false;
			}
			return true
		}

		// if(getChecked == false){
		// 	swal("Pernyataan belum di centang!", "Silahkan centang pernyataan", "warning");
		
		// }else{

		
		function Exec(){
		 
		data.append('namaDepan',$("#namaDepan").val());
		data.append('namaBlkg',$("#namaBlkg").val());
		data.append('alamat',$("#alamat").val());
		data.append('kota',$("#kota").val());
		data.append('birthdate',$("#birthdate").val());
		data.append('kelamin',$('input[name="cmethod"]:checked').val());

		data.append('pendidikan',$("#pendidikan").val());
		
		data.append('email',$("#email").val());
		data.append('noWa',$("#noWa").val());
	
		data.append('angkatan',$('input[name="angkatan"]:checked').val());
		data.append('latihan',$("#latihan").val());
		
		data.append('bidPend',$("#bidPend").val());
		data.append('bidKeahlian',$("#bidKeahlian").val());
		data.append('FB',$("#FB").val());
		data.append('IG',$("#IG").val());
		data.append('twitter',$("#twitter").val());
		data.append('tujuan',$("#tujuan").val());
		
		// Ambil data foto yang dipilih pada form, dan masukkan ke variabel data
		data.append('foto', $("#foto")[0].files[0]);
		// data.append('ktp', $("#ktp")[0].files[0]);
 
		$("#loading-simpan").show(); // Munculkan loading simpan
		//=========================
		swal({
			title: 'Ingin Menyimpan Data Diri ?',  
			type: 'question',
			html:'<p><h5><b>'+namaDepan+' '+namaBlkg+'</b></h5></p>'+
			'<table style="width:100%" class="center">'+
			'<tr><th>Alamat</th><th>:</th><th>'+alamat+'</th></tr>'+  
			'<tr><td>Kota</td><th>:</th><td>'+kota+'</td></tr>'+
			'<tr><td>HP</td><th>:</th><td>'+noWa+'</td></tr>'+
			'<tr><td>TglLahir</td><th>:</th><td>'+birthdate+'</td></tr>'+
			'<tr><td>JK</td><th>:</th><td>'+kelamin+'</td> </tr>'+
			// '<tr><td>Pendidikan</td><th>:</th><td>'+pendidikan+'</td> </tr>'+
			'<tr><td>Email</td><th>:</th><td>'+email+'</td> </tr>'+
			'<tr><td>Gabung</td><th>:</th><td>Angkatan '+angktn+'</td> </tr>'+
			  '</table>',
			showCancelButton: true,
			confirmButtonText: 'Ya',
			showLoaderOnConfirm: true,
			preConfirm: function (response) {
				return new Promise(function (resolve) {
					$.ajax({
						url: 'proses_simpan.php', // File tujuan
						type: 'POST', // Tentukan type nya POST atau GET
						data: data, // Set data yang akan dikirim
						processData: false,
						contentType: false,
						dataType: "text",
						beforeSend: function(e) {
							if(e && e.overrideMimeType) {
								e.overrideMimeType("application/json;charset=UTF-8");
							}
						},
						error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
									console.log(xhr.responseText);
									// alert(thrownError.responseText); // munculkan alert
							// 		swal("Error", xhr.responseText, "error");
								}
						// success: function(response){
						// 	console.log(response)
						// 	console.log(response.status)
						// 	swal('success!', 'Simpan Berhasil', 'success').then(function() {
						// 					location.reload();
						// 				});
						// }
					})
					.done(function (response){
						console.log(response)
						var response1=JSON.parse(response);
						console.warn(response1.status);
						if(response1.status =="Sukses"){
							swal({
												title: 'Registrasi Sukses',
												type: 'success',
												showCancelButton: false,
												text: response1.status+" "+response1.pesan,
												confirmButtonText: 'Done',
												showLoaderOnConfirm: true,
												allowOutsideClick: false,
												closeOnConfirm : true
											}).then(function() {
								location.reload();
							});
						} else {
							swal({
												type: 'error',
												title: 'Oops...',
												text: response1.status+" "+response1.pesan,
												footer: response1.proc,
											  })
						}	
					}).fail(function(){
						swal('Oops...', 'Simpan Gagal !', 'error');
					})
				})
			},
			allowOutsideClick: false,
			allowEscapeKey: false,
			allowEnterKey: false
		})
		.catch(swal.noop);

		//=======================
		// $.ajax({
		// 	url: 'proses_simpan.php', // File tujuan
		// 	type: 'POST', // Tentukan type nya POST atau GET
		// 	data: data, // Set data yang akan dikirim
		// 	processData: false,
		// 	contentType: false,
		// 	dataType: 'text',
		// 	beforeSend: function(e) {
		// 		if(e && e.overrideMimeType) {
		// 			e.overrideMimeType("application/json;charset=UTF-8");
		// 		}
		// 	},
		// 	success: function(response){ // Ketika proses pengiriman berhasil
		// 		var tes=JSON.parse(response);
		// 		console.log(tes.status)
		// 		if(tes.status == "sukses"){
		// 		// 	alert("suskses");
		// 		swal({
		// 				title: 'Registrasi Sukses',
		// 				type: 'success',
		// 				showCancelButton: false,
		// 				text: tes.status+" "+tes.pesan,
		// 				confirmButtonText: 'Done',
		// 				showLoaderOnConfirm: true,
		// 				allowOutsideClick: false,
		// 				closeOnConfirm : true
		// 			});
					 
		// 		}else{
		// 			swal({
		// 				type: 'error',
		// 				title: 'Oops...',
		// 				text: tes.status+" "+tes.pesan,
		// 				footer: tes.proc,
		// 			  })
		// 		}
				
		 
		// 	},
		// 	error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
		// 		// alert(xhr.responseText); // munculkan alert
		// 		swal("Error", xhr.responseText, "error");
		// 	}
		// });
	}
	
	});

	
	 
});
