<?php 
    session_start();
	$NAMA = $_SESSION["userName"];
		if (!isset($_SESSION["loggedIn"]) && !isset($_SESSION["user_id"]))
		{
			header("Location: login.php");
			exit();
		}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Terms -- Gemdev</title>
	<meta charset="utf-8">
	<!--------------------------------------------my own css and bootstrap css-------------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="Terms.css">
	<!-------------------------------------------font awesome-------------------------------->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<header>
		<div class="navbar navbar-default fixed-top">
				<div href="#default" id="logo"><img src="./img/GemDev_logo.png" width="250" height="65"></div>
					<nav>
						<ul>
							<li class="nav-item active"><a class="nav-link" href="./home1.php">Home</a></li>
							<li class="nav-item active"><a class="nav-link" href="list_project_user.php">List Project</a></li>

    						<li class="nav-item active">
								<button type="button" class="btn" id="icon-profile" data-toggle="popover" 
										data-placement="bottom" 
										data-trigger="manual"
										title='Welcome , <?= $NAMA?>'
										data-content="
										<a class='nav-link' href='./created_project.php' style='color:black'>Created Project</a>
										<a class='nav-link' href='./add_project.php' style='color:black'>Add Project</a>
										<a class='nav-link' href='./backed_project.php' style='color:black'>Backed Project</a>
										<a class='nav-link' href='./profile.php' style='color:black'>Profile</a>										
										<a class='nav-link' href='./settings.php' style='color:black'>Settings</a>
										<a class='nav-link' href='./logout.php' style='color:black'>Logout</a>"
										data-html="true">
									<img src = "account/<?php echo $retrieveprofile["filefotoprofil"]; ?>" width='25' height='25'/>
								</button>
							</li>
						</ul>
				</nav>
		</div>
	</header>
	<section id="Terms">
		<div class="contain">
			<h1>Terms of Use</h1>
			
			<p><font size = "6"><Strong> 1.  Selamat datang di Gemdev!</Strong></font></p>
			
			<h2>Page ini menjelaskan syarat penggunaan website kami. Saat anda menggunakan Demgev, anda menyetujui seluruh peraturan pada page ini. Beberapa dari peraturan perlu diekspresikan dalam bentuk bahasa yang legal, tapi kami telah mencoba untuk memberikan penjelasan yang mudah dimengerti dan jelas mengenai seluruh arti.</h2>
			
			<p>Selamat datang di Gemdev. Dengan menggunakn website dan servis yangditawarkan oleh Gemdev. Anda menyetujui peraturan (terms) legal ini. Anda juga menyetujui privacy policy kami dan menyetujui segala peraturan didalam site. </p>
			
			<p>Kami dapat merubah peraturan dari waktu ke waktu. Jika kami merubah, kami akan memberitahu anda mengenai apa yang berubah, baik dengan memberikan notifikasi kepada anda dari website atau dengan mengirimkan anda email. Versi terbaru dari terms tidak akan langsung diaplikasikan – kami akan memberi tahu tanggal pasti peraturan tersebut berlaku. Bila anda tetap menggunakan Gemdev setelah itu, anda berarti menyetujui peraturan baru.</p>
			
			<p><font size = "6"><Strong> 2. Tentang pembuatan account</Strong></font></p>
			
			<p>Untuk sign up account Gemdev, anda perlu berumur 18 tahun atau lebih. Anda bertanggung jawab atas account anda dan segala aktivitas yang dilakukan.</p>
			
			<p>Anda dapat menggunakan gemdev tanpa mendaftar account. Namun untuk dapat menggunakan beberapa fungsi Demgev. Anda perlu mendaftar, memilih nama account dan password. Setelah anda melakukan hal tersebut, informasi yang anda berikan harus akurat dan lengkap. Jangan menyamar menjadi orang lain ataupun memilih nama yang bersifat menyerang. Jika anda tidak mengikuti peraturan tersebut, kami dapat membatalkan account anda.</p>
			
			<p>Anda bertanggung jawab untuk segala aktivitas pada account anda dan untuk menjaga kerahaiaan password anda. Jika anda menemukan seseorang menggunakan account anda tanpa izin, anda harus melaporkannya ke pihak support kami.</p>
			
			<p><font size = "6"><Strong> 3. Hal yang anda tidak boleh lakukan</Strong></font></p>
			
			<p>Section ini adalah daftar hal yang anda seharusnya sudah tahu tidak boleh dilakukan – berbohong, melanggar hukum, perlakuan tidak pantas pada orang lain, mencuri data, hack komputer orang lain dan sebagainya. Tolong kendalikan diri anda dan jangan lakukan hal ini.</p>
			
			<p>Jutaan orang menggunakan Gemdev. Kami berharap semua pengguna dapat bertanggung jawab atas perlakuan mereka dan membantu menciptakan tempat yang nyaman.jangan lakukan hal-hal berikut pada website ini:</p>
			
			<li>Jangan melanggar peraturan: Jangan melakukan tindakan apa pun yang melanggar atau melanggar hak orang lain, melanggar hukum, atau melanggar kontrak atau kewajiban hukum apa pun yang Anda miliki terhadap siapa pun.</li>

			<li>Jangan berbohong pada orang lain: Jangan mengeposkan informasi yang Anda tahu salah, menyesatkan, atau tidak akurat. Jangan melakukan sesuatu yang menipu atau menipu.</li>

			<li>Jangan menawarkan barang terlarang: Jangan menawarkan imbalan apa pun yang ilegal, melanggar salah satu kebijakan, aturan, atau pedoman Gemdev, atau melanggar hukum, undang-undang, peraturan, atau peraturan yang berlaku</li>

			<li>Jangan melecehkan orang lain: Jangan melakukan apa pun yang mengancam, kasar, melecehkan, memfitnah, memfitnah, menyiksa, cabul, profan, atau menyerbu privasi orang lain.</li>

			<li>Jangan spam: Jangan menyebarkan materi iklan atau promosi yang tidak diinginkan atau tidak sah, atau surat sampah, spam, atau surat berantai. Jangan menjalankan daftar email, listservs, atau segala jenis penjawab-otomatis atau spam di atau melalui Situs.</li>

			<li>Jangan merusak komputer orang lain: Jangan menyebarkan virus perangkat lunak, atau apa pun (kode, film, program) yang dirancang untuk mengganggu fungsi yang tepat dari perangkat lunak, perangkat keras, atau peralatan apa pun di Situs (apakah itu milik Gemdev atau pihak lain).</li>

			<li>Jangan menyalahgunakan informasi personal orang lain: Ketika Anda menggunakan Gemdev - dan terutama jika Anda membuat proyek yang sukses - Anda mungkin menerima informasi tentang pengguna lain, termasuk hal-hal seperti nama mereka, alamat email, dan alamat pos. Informasi ini disediakan untuk tujuan berpartisipasi dalam proyek Gemdev: jangan menggunakannya untuk tujuan lain, dan jangan menyalahgunakannya.</li>

			<p>Kami juga perlu memastikan bahwa website ini aman dan sistem kami berfungsi selayaknya. Jadi jangan melakukan hal-hal berikut: - beberapa diantaranya menunjuk pada “jangan merusak sistem kami” - </p>

			<li>Jangan mencoba mengganggu cara kerja Layanan website.</li>
			
			<li>Jangan mencoba merusak atau mengakses sistem,password,data dan informasi secara ilegal </li>

			<li>Jangan melakukan hal yang dapat membuat server down.</li>

			<p><font size = "6"><Strong> 4.Cara Kerja Pendanaan</Strong></font></p>

			<p>Bagian ini membahas detail dukungan dan pembuatan proyek - hal-hal seperti bagaimana uang dikumpulkan, apakah janji dapat diubah atau dibatalkan, dan bagaimana pembuat konten dapat menghubungi pendukung untuk memberikan hadiah.</p>
			
			<p>Ini adalah ketentuan yang berlaku saat Anda mendukung proyek:</p>
			
			<li>Anda hanya dikenakan biaya jika proyek mencapai tujuan penggalangan dana. Anda akan memberikan informasi pembayaran Anda saat Anda berjanji, tetapi Anda tidak akan ditagih. Pembayaran Anda hanya akan dikumpulkan jika, pada saat tenggat waktu pendanaan proyek, proyek telah mencapai tujuan penggalangan dana. Jumlah pasti yang Anda janjikan adalah jumlah yang akan dikumpulkan Gemdev. Jika kampanye belum mencapai tujuan penggalangan dana, Anda tidak akan ditagih, tidak ada dana yang akan dikumpulkan, dan tidak ada uang yang akan berpindah tangan.</li>

			<li>Dalam beberapa kasus kami akan mencadangkan biaya pada kartu Anda. Gemdev dan mitra pembayarannya dapat mengotorisasi atau mencadangkan biaya pada kartu kredit Anda (atau metode pembayaran apa pun yang Anda gunakan) untuk jumlah apa pun hingga janji lengkap, kapan saja antara janji dan pengumpulan dana.</li>

			<li>Anda dapat mengubah atau membatalkan janji Anda kapan saja sebelum batas waktu pendanaan proyek (dengan satu pengecualian). Anda dapat meningkatkan, menurunkan, atau membatalkan janji Anda kapan saja selama kampanye, dengan satu pengecualian. Selama 24 jam terakhir kampanye, Anda tidak dapat menurunkan atau membatalkan janji Anda tanpa menghubungi dukungan pelanggan terlebih dahulu - jika tindakan itu akan menghentikan proyek di bawah sasaran pendanaannya. Setelah proyek didanai, Anda hanya dapat membatalkan atau mengubah janji Anda dengan membuat pengaturan khusus langsung dengan pencipta.</li>

			<li>Perkiraan Tanggal Penyerahan adalah taksiran pembuat konten. Tanggal yang tercantum pada setiap hadiah adalah taksiran pembuat ketika mereka akan memberikan hadiah - bukan jaminan untuk dipenuhi pada tanggal tersebut. Jadwal dapat berubah saat pembuat bekerja di proyek. Kami meminta pembuat konten untuk berpikir dengan hati-hati, menetapkan tanggal saat mereka merasa yakin mereka dapat bekerja, dan berkomunikasi dengan pendukung tentang perubahan apa pun.</li>

			<li>Pencipta mungkin perlu mengirimi Anda pertanyaan tentang imbalan Anda. Untuk mengirimkan hadiah, pembuat konten mungkin memerlukan informasi dari Anda, seperti alamat surat atau ukuran kaos Anda. Mereka akan meminta informasi itu setelah kampanye berhasil. Untuk menerima hadiah, Anda harus memberikan informasi dalam jumlah waktu yang wajar.</li>

			<li>Gemdev tidak menawarkan pengembalian uang. Tanggung jawab untuk menyelesaikan proyek sepenuhnya terletak pada pencipta proyek. Gemdev tidak memegang dana atas nama pembuat konten, tidak dapat menjamin karya para pembuat, dan tidak menawarkan pengembalian uang.</li>

			<p>Ini adalah ketentuan yang berlaku saat Anda membuat proyek:</p>

			<li>Anda dapat mengembalikan janji individu jika Anda mau. Setelah proyek Anda didanai, Anda dapat membatalkan dan mengembalikan dana janji pendukung kapan saja. Jika Anda melakukannya, Anda tidak memiliki kewajiban lebih lanjut kepada pendukung spesifik tersebut, dan tidak ada kesepakatan di antara Anda.</li>

			<li>Kami akan membebankan biaya kami sebelum memasukkan dana ke akun Anda. Gemdev dan mitra pembayarannya akan mengurangi biaya sebelum mengirimkan hasil kampanye.</li>

			<li>Beberapa janji tidak dapat dikumpulkan, yang dapat mengurangi jumlah pendanaan yang Anda dapatkan.Karena beberapa pembayaran tidak dapat dikumpulkan - misalnya, ketika kartu kredit pendukung berakhir sebelum pendanaan berakhir, dan mereka tidak memberikan informasi terkini - kami tidak dapat menjamin bahwa jumlah dana yang Anda terima akan sama dengan jumlah penuh yang dikurangi biaya.</li>

			<li>Kami akan membantu menyelesaikan sengketa kartu pembayaran. Jika pendukung proyek Anda menyengketakan biaya dengan penerbit kartu mereka, kami akan menangani penyajian ulang biaya untuk menyelesaikan sengketa dengan penerbit kartu. Anda akan diberi tahu bahwa perselisihan telah diajukan, dan Anda akan dapat memberikan bukti untuk membantu kami menyelesaikannya sesuai keinginan Anda. Jika sengketa pemegang kartu ditemukan valid, Anda mengizinkan kami untuk menagih nomor kartu kredit yang Anda berikan ketika Anda memulai proyek untuk jumlah tagihan balik.</li>

			<li>Jangan hitung ayam Anda sebelum menetas. Jangan berasumsi Anda akan dapat meluncurkan proyek Anda saat Anda inginkan; mungkin ada alasan mengapa kami tidak dapat menerimanya, atau masalah yang membutuhkan waktu untuk diselesaikan. Jangan beranggapan Anda akan dapat segera mengumpulkan dana Anda; mungkin ada penundaan antara akhir dari kampanye yang sukses dan akses Anda ke dana. Dan jangan mengambil tindakan apa pun dengan mengandalkan pengumpulan uang apa pun yang dijanjikan sampai Anda benar-benar memiliki kemampuan untuk menariknya dari akun Anda dan membelanjakannya.</li>


			<p><font size = "6"><Strong> 5. Biaya Jasa Kami</Strong></font></p>

			<p>Biaya hanya dibebankan pada proyek yang berhasil didanai. Kami mengenakan biaya 5%, selain biaya apa pun dari mitra pembayaran kami.</p>

			<p>Membuat akun di Gemdev gratis. Jika Anda membuat proyek yang berhasil didanai, kami (dan mitra pembayaran kami) mengumpulkan biaya. Biaya mitra kami mungkin sedikit berbeda berdasarkan lokasi Anda.</p>

			<p>Kami tidak akan mengumpulkan biaya apa pun tanpa memberi Anda kesempatan untuk meninjau dan menerimanya. Jika biaya kami berubah, kami akan mengumumkannya di Situs kami. Beberapa dana yang dijanjikan oleh pendukung dikumpulkan oleh penyedia pembayaran. Setiap penyedia pembayaran adalah perusahaannya sendiri, dan Gemdev tidak bertanggung jawab atas kinerjanya.</p>

			<p>Anda bertanggung jawab untuk membayar biaya tambahan atau pajak apa pun yang terkait dengan penggunaan Gemdev Anda.</p>

			<p><font size = "6"><Strong> 6. Kekayaan Intelektual Anda</Strong></font></p>

			<p>Kami tidak memiliki produk yang Anda posting di Gemdev. Tetapi ketika Anda mengeposkannya, Anda memberi kami izin untuk menggunakan atau menyalinnya, namun kami perlu untuk menjalankan situs, atau menunjukkan kepada orang-orang apa yang terjadi di dalamnya. (Kami biasanya hanya menggunakan ini untuk mempromosikan proyek dan memamerkan komunitas kami di situs web.) Anda bertanggung jawab atas konten yang Anda posting, dan Anda memberi tahu kami bahwa semuanya boleh digunakan.</p>

			<p>Gemdev tidak memiliki konten yang Anda kirimkan kepada kami ("Konten" Anda). Tetapi kami membutuhkan lisensi tertentu dari Anda untuk melakukan Layanan kami. Saat Anda mengirimkan proyek untuk ditinjau, atau meluncurkan proyek, Anda menyetujui persyaratan ini:</p>
			<br>

			<li>Kami dapat menggunakan konten yang Anda kirimkan. Anda memberikan kepada kami, dan pihak lain yang bertindak atas nama kami, hak dunia, non-eksklusif, abadi, tidak dapat dibatalkan, bebas royalti, dapat disublisensikan, dan dapat dialihkan untuk menggunakan, berolahraga, mengomersialkan, dan mengeksploitasi hak cipta, publisitas, merek dagang, dan hak basis data sehubungan dengan Konten Anda.</li>

			<li>Saat kami menggunakan konten, kami dapat membuat perubahan, seperti mengedit atau menerjemahkannya. Anda memberi kami hak untuk mengedit, memodifikasi, memformat ulang, mengutip, menghapus, atau menerjemahkan semua Konten Anda.</li>

			<li>Anda tidak akan mengirimkan barang yang tidak Anda miliki hak ciptanya (kecuali Anda memiliki izin). Konten Anda tidak akan berisi materi hak cipta pihak ketiga, atau materi yang tunduk pada hak kepemilikan pihak ketiga lainnya, kecuali Anda memiliki izin dari pemilik materi yang sah, atau Anda secara hukum berhak memposting materi tersebut (dan untuk memberikan Gemdev semua hak lisensi yang diuraikan di sini).</li>

			<li>Setiap royalti atau lisensi pada Konten Anda adalah tanggung jawab Anda. Anda akan membayar semua royalti dan jumlah lain yang dibayarkan kepada siapa pun atau entitas berdasarkan Konten Anda, atau di hosting Gemdev dari Konten tersebut.</li>

			<li>Anda berjanji bahwa jika kami menggunakan Konten Anda, kami tidak melanggar hak atau hak cipta siapa pun. Jika Gemdev atau penggunanya mengeksploitasi atau memanfaatkan pengajuan Anda dengan cara-cara yang dimaksud dalam perjanjian ini, Anda berjanji bahwa ini tidak akan melanggar atau melanggar hak-hak pihak ketiga mana pun, termasuk (tanpa batasan) hak privasi, hak publisitas, hak cipta, hak kontrak, atau hak kekayaan intelektual atau hak milik lainnya.</li>

			<li>Anda bertanggung jawab atas hal-hal yang Anda posting. Semua informasi yang dikirimkan ke Situs, baik yang diposting secara publik atau ditransmisikan secara pribadi, adalah tanggung jawab sepenuhnya dari orang yang berasal dari mana konten tersebut berasal.</li>

			<li>Kami tidak bertanggung jawab atas kesalahan dalam konten Anda. Gemdev tidak akan bertanggung jawab atas kesalahan atau kelalaian apa pun dalam konten apa pun.</li>

			<p><font size = "6"><Strong> 6. Kekayaan Intelektual Gemdev</Strong></font></p>

			<p>Konten di Gemdev dilindungi dengan berbagai cara. Anda berhak menggunakannya untuk tujuan pribadi tertentu, tetapi Anda tidak dapat menggunakannya untuk iklan apa pun tanpa mendapatkan izin terlebih dahulu.</p>

			<p>Layanan Gemdev dilindungi secara hukum dengan berbagai cara, termasuk hak cipta, merek dagang, merek layanan, paten, rahasia dagang, dan hak dan undang-undang lainnya. Anda setuju untuk menghormati semua hak cipta dan pemberitahuan hukum lainnya, informasi, dan pembatasan yang terkandung dalam konten apa pun yang diakses melalui Situs. Anda juga setuju untuk tidak mengubah, menerjemahkan, atau menciptakan karya turunan dari Layanan.</p>

			<p>Gemdev memberi Anda lisensi untuk mereproduksi konten dari Layanan hanya untuk penggunaan pribadi. Lisensi ini mencakup konten terlindungi milik Gemdev dan konten buatan pengguna di Situs. (Lisensi ini berlaku di seluruh dunia, tidak eksklusif, tidak dapat disublisensikan, dan tidak dapat dipindahtangankan.) Jika Anda ingin menggunakan, mereproduksi, memodifikasi, mendistribusikan, atau menyimpan salah satu konten ini untuk tujuan komersial, Anda memerlukan izin tertulis dari Gemdev atau pemegang hak cipta yang relevan. "Tujuan komersial" berarti Anda bermaksud menggunakan, menjual, melisensikan, menyewakan, atau mengeksploitasi konten untuk penggunaan komersial, dengan cara apa pun.</p>

			<p><font size = "6"><Strong> 7. Delete Account Anda</Strong></font></p>

			<p>Anda dapat menghapus akun Anda kapan saja. Menghapus akun Anda tidak akan membuat konten yang telah Anda poskan hilang.</p>

			<p>Anda dapat menghentikan akun Anda kapan saja. Semua ketentuan perjanjian ini bertahan penghentian akun, termasuk hak kami mengenai konten apa pun yang telah Anda kirimkan ke Situs. (Misalnya, jika Anda meluncurkan proyek, menghapus akun Anda tidak akan menghapus proyek dari Situs.)</p>

			<p><font size = "6"><Strong> 8. Hak Kami</Strong></font></p>

			<p>Untuk beroperasi, kami harus dapat mempertahankan kendali atas apa yang terjadi di situs web kami. Jadi di bagian ini, kami berhak mengambil keputusan untuk melindungi kesehatan dan integritas sistem kami. Kami tidak menganggap enteng kekuatan ini ringan, dan kami hanya menggunakannya ketika kami benar-benar harus melakukannya.</p>

			<p>Gemdev memiliki hak-hak ini:</p>

			<li>Kita dapat membuat perubahan pada Situs dan Layanan Gemdev tanpa pemberitahuan atau kewajiban.</li>

			<li>Kami berhak memutuskan siapa yang berhak menggunakan Gemdev. Kami dapat membatalkan akun atau menolak untuk menawarkan Layanan kami. (Terutama jika Anda menyalahgunakannya.) Kami dapat mengubah kriteria kelayakan kami kapan saja. Jika hal-hal ini dilarang oleh hukum tempat Anda tinggal, maka kami mencabut hak Anda untuk menggunakan Gemdev dalam yurisdiksi itu.</li>

			<li>Kami berhak membatalkan janji apa pun untuk proyek apa pun, kapan saja dan karena alasan apa pun.</li>

			<li>>Kami memiliki hak untuk menolak, membatalkan, menyela, menghapus, atau menangguhkan proyek apa pun setiap saat dan karena alasan apa pun.</li>

			<p>Gemdev tidak bertanggung jawab atas kerusakan apa pun sebagai akibat dari tindakan ini, dan adalah kebijakan kami untuk tidak mengomentari alasan untuk tindakan semacam itu.</p>

			<p><font size = "6"><Strong> 9 .Indemnification</Strong></font></p>

			<p>Jika Anda melakukan sesuatu di Gemdev yang akhirnya membuat kami dituntut, Anda harus membantu membela kami.</p>

			<p>Jika Anda melakukan sesuatu yang membuat kami dituntut, atau melanggar janji apa pun yang Anda buat dalam perjanjian ini, Anda setuju untuk membela, mengganti kerugian, dan membuat kami tidak berbahaya dari semua kewajiban, klaim, dan pengeluaran (termasuk biaya pengacara yang layak dan biaya hukum lainnya ) yang muncul dari atau berhubungan dengan penggunaan Anda atau penyalahgunaan Gemdev. Kami berhak untuk menganggap pembelaan dan kontrol eksklusif terhadap masalah apa pun yang tunduk pada klausul ganti rugi ini, dalam hal ini Anda setuju bahwa Anda akan bekerja sama dan membantu kami dalam menegaskan pertahanan apa pun.</p>

			<hr>

			<p>Update ini akan berlaku mulai tanggal 18 oktober 2018 pukul 12:00 WIB</p>
		</div>
	</section>

<footer id="footer">
		<div class=ftr-wrapper>
			<ul>
				<a href="./aboutus1.php">ABOUT US</a> | <a href="./contact1.php">CONTACT</a>
			</ul>
		</div>

		<div class="ftr-social-icons">
			<ul>
				<li><a href="https://www.facebook.com/GemDev-1233795066722877/" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/gemdev2"  target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
	
		<div class="ftr-bottom-section-wrapper">
			<i class="fa fa-copyright"></i>GemDev 2018 <address class="footer-address" role="company address">Jakarta, Indonesia</address>
		</div>
		<div class="ftr-bottom-section-wrapper">
			<a href="Terms1.php">Terms of Use</a> | <a href="./Policy1.php">Privacy Policy</a>
		</div>
	</footer>
	<!-------------------------------------------js cdn---------------------------------------------->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".box").on("click", "li", function(){
				var tabsId = $(this).attr("id");
				$(this).addClass("active").siblings().removeClass("active");
				$("#" + tabsId + "-content-box").addClass("active").siblings().removeClass("active");
			})
		})
	</script>
	<script type="text/javascript">
		$(function () {
  			$('[data-toggle="popover"]').popover()
		})
	</script>
	<script type="text/javascript">
		$('[data-trigger="manual"]').click(function() {
    	$(this).popover('toggle');
		}).blur(function() {
    	$(this).popover('hide');
		});
	</script>
</body>
</html>	
