TUGAS MATA KULIAH PEMOGRAMAN API "Dokumentasi OpenApi"

Dosen Pengampu : Andi Iwan Nurhidayat,S.Kom.,M.T

Disusun Oleh : Kelompok 6
1.	M. Badar Haula Abdi (22091397085) 2022 MIC
2.	Ahmad Balya Diwanullatif (22091397095) 2022 MIC
3.	Vitto Farin Kriswandi (22091397096) 2022 MIC

PROGRAM STUDI D4 MANAJEMEN INFORMATIKA
FAKULTAS VOKASI
UNIVERSITAS NEGERI SURABAYA
2024

Berikut source code dan tampilan hasil dokumentasi OpenApi pada project "Simple Student Api"

![awalmenu](https://github.com/vittokris/tugas_1_api_kelompok6/assets/125800929/df6e402d-27dc-40cc-a0c4-b85961c5dc55)

1. Path
   
![get](https://github.com/vittokris/tugas_1_api_kelompok6/assets/125800929/0a74aa9c-f297-4f66-8c85-80695a3c4d2a)

2. Post

![post](https://github.com/vittokris/tugas_1_api_kelompok6/assets/125800929/4bdbeb7d-0489-4500-b0ce-ce8897927034)

3. Get
![get](https://github.com/vittokris/tugas_1_api_kelompok6/assets/125800929/4720f337-5556-4378-b132-5ec3a5465026)

4. Put
![put](https://github.com/vittokris/tugas_1_api_kelompok6/assets/125800929/0dfb5590-ca5f-4a3c-9142-278ff56a40c1)

5. Delate
![delate](https://github.com/vittokris/tugas_1_api_kelompok6/assets/125800929/effffbbf-4961-4f37-8f83-dd314b3f2c94)


source code dokumentasi OpenApi menggunakan format json
{
  "openapi": "3.0.0",
  "info": {
    "title": "Simple Student API",
    "description": "API untuk mengelola data mahasiswa",
    "version": "1.0.0"
  },
  "servers": [
    {
      "url": "http://localhost"
    }
  ],
  "paths": {
    "/create.php": {
      "post": {
        "summary": "Membuat data mahasiswa baru",
        "requestBody": {
          "required": true,
          "content": {
            "application/x-www-form-urlencoded": {
              "schema": {
                "type": "object",
                "properties": {
                  "Nama": {
                    "type": "string"
                  }
                }
              }
            }
          }
        },
        "responses": {
          "200": {
            "description": "Data mahasiswa berhasil dibuat",
            "content": {
              "application/json": {
                "schema": {
                  "type": "object",
                  "properties": {
                    "message": {
                      "type": "string"
                    }
                  }
                }
              }
            }
          },
          "400": {
            "description": "Gagal membuat data mahasiswa",
            "content": {
              "application/json": {
                "schema": {
                  "type": "object",
                  "properties": {
                    "message": {
                      "type": "string"
                    }
                  }
                }
              }
            }
          }
        }
      }
    },
    "/data.php": {
      "get": {
        "summary": "Mendapatkan daftar data mahasiswa",
        "responses": {
          "200": {
            "description": "Daftar data mahasiswa berhasil didapatkan",
            "content": {
              "application/json": {
                "schema": {
                  "type": "object",
                  "properties": {
                    "data_mhs": {
                      "type": "array",
                      "items": {
                        "type": "object",
                        "properties": {
                          "id": {
                            "type": "integer"
                          },
                          "Nama": {
                            "type": "string"
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          },
          "400": {
            "description": "Gagal mendapatkan daftar data mahasiswa",
            "content": {
              "application/json": {
                "schema": {
                  "type": "object",
                  "properties": {
                    "message": {
                      "type": "string"
                    }
                  }
                }
              }
            }
          }
        }
      }
    },
    "/update.php": {
      "put": {
        "summary": "Mengupdate data mahasiswa",
        "requestBody": {
          "required": true,
          "content": {
            "application/x-www-form-urlencoded": {
              "schema": {
                "type": "object",
                "properties": {
                  "id": {
                    "type": "integer"
                  },
                  "Nama": {
                    "type": "string"
                  }
                }
              }
            }
          }
        },
        "responses": {
          "200": {
            "description": "Data mahasiswa berhasil diupdate",
            "content": {
              "application/json": {
                "schema": {
                  "type": "object",
                  "properties": {
                    "message": {
                      "type": "string"
                    }
                  }
                }
              }
            }
          },
          "400": {
            "description": "Gagal mengupdate data mahasiswa",
            "content": {
              "application/json": {
                "schema": {
                  "type": "object",
                  "properties": {
                    "message": {
                      "type": "string"
                    }
                  }
                }
              }
            }
          }
        }
      }
    },
    "/delete.php": {
      "delete": {
        "summary": "Menghapus data mahasiswa",
        "requestBody": {
          "required": true,
          "content": {
            "application/x-www-form-urlencoded": {
              "schema": {
                "type": "object",
                "properties": {
                  "id": {
                    "type": "integer"
                  }
                }
              }
            }
          }
        },
        "responses": {
          "200": {
            "description": "Data mahasiswa berhasil dihapus",
            "content": {
              "application/json": {
                "schema": {
                  "type": "object",
                  "properties": {
                    "message": {
                      "type": "string"
                    }
                  }
                }
              }
            }
          },
          "400": {
            "description": "Gagal menghapus data mahasiswa",
            "content": {
              "application/json": {
                "schema": {
                  "type": "object",
                  "properties": {
                    "message": {
                      "type": "string"
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
}



