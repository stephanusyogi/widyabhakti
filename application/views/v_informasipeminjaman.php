<style>
    .dibawahini{
        color: blue;
        text-decoration: underline;
    }
    .dibawahini:hover{
        cursor: pointer;
    }

</style>
    
    
    <!-- Section Carousel Jumbotron -->
    <section class="carjumbotronpeminjaman">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/banner1.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="main-text hidden-xs" data-aos="fade-down">
                    <div class="container text-center">
                        <h1>Informasi Peminjaman</h1>
                    </div>
                </div>
    </section>

    <!-- Section Deskripsi Peminjaman -->
    <section class="section-peminjaman" data-aos="fade-up">
        <div class="container">
            <h1 class="title">Informasi Peminjaman Gedung dan Ruangan WidyaBhakti Pastoral Center</h1>
            <div class="row">
                <div class="col-md-6">
                    <p class="my-0" >Harap membaca langkah-langkah alur peminjaman <span class="dibawahini" onclick="scrollToStep()">dibawah ini</span>,hubungi contact center berikut apabila mengalami kendala.</p>
                    <p >+62231418941 (WA) || 0341-2131414</p>
                    <p style="font-weight:500;">Klik tombol dibawah untuk mengisi formulir peminjaman.</p>
                    <button class="btn btn-primary mt-2 mb-2" style="font-size:14px;"  onclick="window.location='<?= base_url('peminjaman/formulirpeminjaman') ?>';">Isi Formulir Peminjaman</button>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Periksa Jadwal Ruangan Yang Ingin Anda Pinjam</h5>
                            <hr>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Ruangan Yang Akan Dipinjam :</p>
                                            <div class="image-ruangan"></div>
                                            <select class="wb-form-control" id="ruanganpeminjaman">
                                                <option selected disable>Pilih Ruangan</option>
                                                <?php foreach($dataruangan['data'] as $row ){?>
                                                    <option value="<?= $row['id_ruangan']; ?>"><strong><?= $row['nama_ruangan']; ?></strong> - Lt. <?= $row['lantai'] == '0' ? 'Ground' : $row['lantai'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <p class="mt-2">Tanggal Peminjaman:</p>
                                            <input class="wb-form-control" type="date" id="datepeminjaman" required>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Jadwal Pemakaian :</p>
                                            <div class="resultjadwalruangan"></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-info mt-2" id="checkruangan">Check Ruangan</button>
                                </form>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="alur-peminjaman mt-4" id="imgalur">
                <h1 style="text-align: center;color:#8C2D25;font-weight: 500;">Langkah - Langkah Prosedur Peminjaman</h1>
                <hr style="border:1px solid #9c514b;">
            </div>
        </div>
    </section>

    <script>
        function scrollToStep() {
            var elmnt = document.getElementById("imgalur");
            elmnt.scrollIntoView({behavior: 'smooth'});
        }

        $(document).ready(function() {
            // Lihat Gambar Ruangan
            $('#ruanganpeminjaman').change(function() {
                // Get value selected option
                var id_item = $(this).val();

                var settings = {
                    "url": `https://apiwidyabhakti.parokikatedralmalang.org/api/detailruangan/${id_item}`,
                    "method": "GET",
                    "timeout": 0,
                };

                $.ajax(settings).done(function (res) {
                    // Append Element Image
                    var src = 'src="<?php echo base_url() ?>admin/uploads/img_ruangan/'+ res.data[0].thumbnail +'"';
                    var image = $(`<img class="rounded mb-2" ${src} alt="" style="width: 100%;">`);

                    $('.image-ruangan').empty().append(image);
                });
            });

            // Check Jadwal Ruangan
            $("#checkruangan").click(function(evt) {
            evt.preventDefault();
            var datepeminjaman = document.getElementById("datepeminjaman").value;
            var ruanganpeminjaman = document.getElementById("ruanganpeminjaman").value;
                if(datepeminjaman){
                    
                    $(function() {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 4000
                        });
                        Toast.fire({
                            icon: 'info',
                            title: '&nbsp;Please Wait!'
                        })
                    });

                    var form = new FormData();
                    form.append("datepeminjaman", datepeminjaman);
                    form.append("ruanganpeminjaman", ruanganpeminjaman);
                    var getdata = {
                            "url": "https://apiwidyabhakti.parokikatedralmalang.org/api/checkpeminjaman",
                            "method": "POST",
                            "timeout": 0,
                            "headers": {
                                "Accept": "application/json"
                            },
                            "processData": false,
                            "mimeType": "multipart/form-data",
                            "contentType": false,
                            "data": form
                        };

                        $.ajax(getdata).done(function (response) {

                        $(function() {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 4000
                            });
                            Toast.fire({
                                icon: 'success',
                                title: '&nbsp;Data Jadwal Berhasil Ditampilkan'
                            })
                        });
                        
                        var res = JSON.parse(response);
                        if(res.status == 'dateandruangan'){

                            let waktu = [];
                            for(i=0 ; i < res.data.jadwal_terpakai.length ; ++i){
                            waktu.push('<p>Pkl. '+res.data.jadwal_terpakai[i].waktu_mulai+'<span> - </span>Pkl. '+res.data.jadwal_terpakai[i].waktu_selesai+'</p>');
                            }
                            
                            $(".resultjadwalruangan").empty().append('<div class="jadwal-ruangan"><hr><div class="waktuterpakai">'+waktu.join('')+'</div><p style="font-size:14px;color:red;">* Waktu diatas merupakan keterangan bahwa ruangan telah terpakai pada jarak waktu tersebut.</p></div><hr>');
                        }else{

                            $(".resultjadwalruangan").empty().append('<div class="text-center"><h4 style="color:#683a3a;">Ruangan Belum Terpakai Di Jadwal Yang Anda Cari.</h4></div>');
                        }
                    });
                }else{
                    alert("Dimohon Untuk Mengisi Field Data Yang Kosong.");
                    return false;
                }
            });
        });
    </script>