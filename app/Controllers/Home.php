<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$berita = $this->berita->published();

		$kompetensi = $this->kompetensi->list();
		$kategori = $this->kategori->list();
		$pengumuman = $this->pengumuman->list();
		$data = [
			'title' => 'Selamat Datang!',

			'konfigurasi' => $konfigurasi,
			'berita' => $berita,

			'kompetensi' => $kompetensi,
			'kategori' => $kategori,
			'pengumuman' => $pengumuman,
		];
		// return view('front/layout/menu', $data);
		return view('front', $data);
	}

	public function berita()
	{
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$berita = $this->berita->published();
		$kategori = $this->berita->kategori();
		$beritaTerbaru = $this->berita->publishedTerbaru();
		$data = [
			'title' => 'Berita',
			'berita' => $berita,
			'kategori' => $kategori,
			'konfigurasi' => $konfigurasi,
			'beritaTerbaru' => $beritaTerbaru,
			'beritaRaw' => $this->berita
		];

		if ($this->request->getGet('kategori') != null) {
			$data['berita'] = $this->berita->beritaByKategori($this->request->getGet('kategori'));
			return view('front/berita/berita', $data);
		}

		return view('front/berita/berita', $data);
	}

	public function detail_berita($slug_berita = null)
	{
		if (!isset($slug_berita)) return redirect()->to('/home#berita');
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$beritaTerbaru = $this->berita->publishedTerbaru();
		$berita = $this->berita->detail_berita($slug_berita);
		$kategori = $this->berita->kategori();
		if ($berita) {
			$data = [
				'title'  => 'Berita - ' . $berita->judul_berita,
				'konfigurasi' => $konfigurasi,
				'berita' => $berita,
				'kategori' => $kategori,
				'beritaTerbaru' => $beritaTerbaru,
				'beritaRaw' => $this->berita
			];
			return view('front/berita/detail', $data);
		} else {
			return redirect()->to('/home#berita');
		}
	}

	public function kompetensi()
	{
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$kompetensi = $this->kompetensi->list();
		$data = [
			'title'  => 'Kompetensi Keahlian',
			'konfigurasi' => $konfigurasi,
			'kompetensi' => $kompetensi,
		];
		return view('front/kompetensi/kompetensi', $data);
	}

	public function detail_kompetensi($id = null)
	{
		if (!isset($id)) return redirect()->to('/home#kompetensi');
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$kompetensi = $this->kompetensi->detail_kompetensi($id);
		$list_foto = $this->foto->detail_foto($id);
		$kategori = $this->kategori->list();
		if ($kompetensi) {
			$data = [
				'title'  => 'Kompetensi Keahlian - ' . $kompetensi->nama_kompetensi,
				'konfigurasi' => $konfigurasi,
				'kompetensi' => $kompetensi,
				'list_foto' => $list_foto,
				'kategori' => $kategori,
			];
			return view('front/kompetensi/detail', $data);
		} else {
			return redirect()->to('/home#kompetensi');
		}
	}

	public function profil_sekolah()
	{
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title'  => 'Profil Sekolah',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/profil_sekolah/index', $data);
	}

	public function pengumuman()
	{
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$pengumuman = $this->pengumuman->list();
		$data = [
			'title'  => 'Profil Sekolah',
			'konfigurasi' => $konfigurasi,
			'pengumuman' => $pengumuman,
		];
		return view('front/pengumuman/index', $data);
	}

	public function detail_pengumuman()
	{
		if ($this->request->isAJAX()) {
			$id = $this->request->getVar('pengumuman_id');
			$pengumuman = $this->pengumuman->find($id);
			$data = [
				'title'           => 'Lihat Pengumuman',
				'judul_pengumuman'     => $pengumuman['judul_pengumuman'],
				'isi_pengumuman'   => $pengumuman['isi_pengumuman'],
			];
			$msg = [
				'sukses' => view('front/pengumuman/lihat', $data)
			];
			echo json_encode($msg);
		}
	}
}
