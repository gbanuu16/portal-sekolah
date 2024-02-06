<?php

namespace App\Controllers;

class Kompetensi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kompetensi Keahlian'
        ];
        return view('auth/kompetensi/index', $data);
    }

    public function getdata()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title'          => 'Kompetensi Keahlian',
                'list'           => $this->kompetensi->list(),
                'jumlahfoto'     => $this->kompetensi->jumlahfoto(),
            ];
            $msg = [
                'data' => view('auth/kompetensi/list', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function formtambah()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'Tambah Kompetensi Keahlian',
            ];
            $msg = [
                'data' => view('auth/kompetensi/tambah', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function simpan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama_kompetensi' => [
                    'label' => 'Nama Kompetensi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'deskripsi_kompetensi' => [
                    'label' => 'Deskripsi Kompetensi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_kompetensi'  => $validation->getError('nama_kompetensi'),
                        'deskripsi_kompetensi'  => $validation->getError('deskripsi_kompetensi'),
                    ]
                ];
            } else {
                $simpandata = [
                    'nama_kompetensi'  => $this->request->getVar('nama_kompetensi'),
                    'deskripsi_kompetensi'  => $this->request->getVar('deskripsi_kompetensi'),
                    'slug_kompetensi'  => $this->request->getVar('slug_kompetensi'),
                    'sampul'        => $this->request->getVar('sampul'),
                    'tgl_kompetensi'   => $this->request->getVar('tgl_kompetensi'),
                    'user_id'       => $this->request->getVar('user_id'),
                ];

                $this->kompetensi->insert($simpandata);
                $msg = [
                    'sukses' => 'Data berhasil disimpan'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function formedit()
    {
        if ($this->request->isAJAX()) {
            $kompetensi_id = $this->request->getVar('kompetensi_id');
            $list =  $this->kompetensi->find($kompetensi_id);
            $data = [
                'title'          => 'Edit Kompetensi Keahlian',
                'kompetensi_id'     => $list['kompetensi_id'],
                'nama_kompetensi'   => $list['nama_kompetensi'],
                'deskripsi_kompetensi'   => $list['deskripsi_kompetensi'],
            ];
            $msg = [
                'sukses' => view('auth/kompetensi/edit', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama_kompetensi' => [
                    'label' => 'Nama Kompetensi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'deskripsi_kompetensi' => [
                    'label' => 'Deskripsi Kompetensi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_kompetensi'  => $validation->getError('nama_kompetensi'),
                        'deskripsi_kompetensi'  => $validation->getError('deskripsi_kompetensi'),
                    ]
                ];
            } else {
                $updatedata = [
                    'nama_kompetensi'  => $this->request->getVar('nama_kompetensi'),
                    'deskripsi_kompetensi'  => $this->request->getVar('deskripsi_kompetensi'),
                    'slug_kompetensi'  => $this->request->getVar('slug_kompetensi'),
                    'tgl_kompetensi'   => $this->request->getVar('tgl_kompetensi'),
                    'user_id'       => $this->request->getVar('user_id'),
                ];

                $kompetensi_id = $this->request->getVar('kompetensi_id');
                $this->kompetensi->update($kompetensi_id, $updatedata);
                $msg = [
                    'sukses' => 'Kompetensi berhasil diupdate'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function hapus()
    {
        if ($this->request->isAJAX()) {

            $kompetensi_id = $this->request->getVar('kompetensi_id');
            //check
            $cekdata = $this->kompetensi->find($kompetensi_id);
            $fotolama = $cekdata['sampul'];
            if ($fotolama != 'default.png') {
                unlink('img/sampul/' . $fotolama);
                unlink('img/sampul/thumb/' . 'thumb_' . $fotolama);
            }

            $cekfoto = $this->foto->hapusfoto($kompetensi_id);
            foreach ($cekfoto as $cekfoto) {
                $oldfoto  = $cekfoto['nama_foto'];
                unlink('img/foto/' . $oldfoto);
                unlink('img/foto/thumb/' . 'thumb_' . $oldfoto);
            }



            $this->kompetensi->delete($kompetensi_id);
            $this->foto->hapusket($kompetensi_id);
            $msg = [
                'sukses' => 'Kompetensi Berhasil Dihapus'
            ];

            echo json_encode($msg);
        }
    }

    public function hapusall()
    {
        if ($this->request->isAJAX()) {
            $kompetensi_id = $this->request->getVar('kompetensi_id');
            $jmldata = count($kompetensi_id);
            for ($i = 0; $i < $jmldata; $i++) {
                //check
                $cekdata = $this->kompetensi->find($kompetensi_id[$i]);
                $fotolama = $cekdata['sampul'];
                if ($fotolama != 'default.png') {
                    unlink('img/sampul/' . $fotolama);
                    unlink('img/sampul/thumb/' . 'thumb_' . $fotolama);
                }

                $cekfoto = $this->foto->hapusfoto($kompetensi_id[$i]);
                foreach ($cekfoto as $cekfoto) {
                    $oldfoto  = $cekfoto['nama_foto'];
                    unlink('img/foto/' . $oldfoto);
                    unlink('img/foto/thumb/' . 'thumb_' . $oldfoto);
                }

                $this->kompetensi->delete($kompetensi_id[$i]);
                $this->foto->hapusket($kompetensi_id[$i]);
            }


            $msg = [
                'sukses' => "$jmldata Kompetensi berhasil dihapus"
            ];
            echo json_encode($msg);
        }
    }

    public function formupload()
    {
        if ($this->request->isAJAX()) {
            $kompetensi_id = $this->request->getVar('kompetensi_id');
            $list =  $this->kompetensi->find($kompetensi_id);
            $data = [
                'title' => 'Upload Sampul Kompetensi Keahlian',
                'list'  => $list,
                'kompetensi_id' => $kompetensi_id
            ];
            $msg = [
                'sukses' => view('auth/kompetensi/upload', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function doupload()
    {
        if ($this->request->isAJAX()) {

            $kompetensi_id = $this->request->getVar('kompetensi_id');

            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'sampul' => [
                    'label' => 'Upload Sampul',
                    'rules' => 'uploaded[sampul]|mime_in[sampul,image/png,image/jpg,image/jpeg]|is_image[sampul]',
                    'errors' => [
                        'uploaded' => 'Masukkan gambar',
                        'mime_in' => 'Harus gambar!'
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'sampul' => $validation->getError('sampul')
                    ]
                ];
            } else {

                //check
                $cekdata = $this->kompetensi->find($kompetensi_id);
                $fotolama = $cekdata['sampul'];
                if ($fotolama != 'default.png') {
                    unlink('img/sampul/' . $fotolama);
                    unlink('img/sampul/thumb/' . 'thumb_' . $fotolama);
                }

                $filegambar = $this->request->getFile('sampul');

                $updatedata = [
                    'sampul' => $filegambar->getName()
                ];

                $this->kompetensi->update($kompetensi_id, $updatedata);

                \Config\Services::image()
                    ->withFile($filegambar)
                    ->fit(800, 533, 'center')
                    ->save('img/sampul/thumb/' . 'thumb_' .  $filegambar->getName());
                $filegambar->move('img/sampul');
                $msg = [
                    'sukses' => 'Gambar berhasil diupload!'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function formfoto()
    {
        if ($this->request->isAJAX()) {
            $kompetensi_id = $this->request->getVar('kompetensi_id');
            $foto = $this->foto->list($kompetensi_id);
            $list =  $this->kompetensi->find($kompetensi_id);
            $data = [
                'title' => 'Kompetensi Keahlian -  ' . $list['nama_kompetensi'],
                'foto'  => $foto,
                'list'  => $list,
                'kompetensi_id' => $kompetensi_id
            ];
            $msg = [
                'sukses' => view('auth/kompetensi/foto', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function uploadfoto()
    {
        if ($this->request->isAJAX()) {

            $kompetensi_id = $this->request->getVar('kompetensi_id');

            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'ket_foto' => [
                    'label' => 'Keterangan Foto',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong!',
                    ]
                ],
                'nama_foto' => [
                    'label' => 'Upload Foto',
                    'rules' => 'uploaded[nama_foto]|mime_in[nama_foto,image/png,image/jpg,image/jpeg]|is_image[nama_foto]',
                    'errors' => [
                        'uploaded' => 'Masukkan foto!',
                        'mime_in' => 'Harus gambar!'
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'ket_foto' => $validation->getError('ket_foto'),
                        'nama_foto'     => $validation->getError('nama_foto')
                    ]
                ];
            } else {



                $filegambar = $this->request->getFile('nama_foto');

                $insertdata = [
                    'kompetensi_id' => $this->request->getVar('kompetensi_id'),
                    'ket_foto'   => $this->request->getVar('ket_foto'),
                    'nama_foto'       => $filegambar->getName(),
                ];

                $this->foto->insert($insertdata);

                \Config\Services::image()
                    ->withFile($filegambar)
                    ->fit(800, 533, 'center')
                    ->save('img/foto/thumb/' . 'thumb_' .  $filegambar->getName());
                $filegambar->move('img/foto');
                $msg = [
                    'sukses' => 'Gambar berhasil diupload!'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function hapusfoto()
    {
        if ($this->request->isAJAX()) {

            $foto_id = $this->request->getVar('foto_id');
            //check
            $cekdata = $this->foto->find($foto_id);
            $fotolama = $cekdata['nama_foto'];
            if ($fotolama != 'default.png') {
                unlink('img/foto/' . $fotolama);
                unlink('img/foto/thumb/' . 'thumb_' . $fotolama);
            }
            $this->foto->delete($foto_id);
            $msg = [
                'sukses' => 'Foto berhasil dihapus!'
            ];

            echo json_encode($msg);
        }
    }
}
