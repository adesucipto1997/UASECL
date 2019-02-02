## Deksripsi
Aplikasi ini untuk memenuhi tugas ECL-9 nama Ade Sucipto
## Instalasi
Download file lalau jalan kan ``composer install`` setting database di   ``.env`` 
##Pnejelasan Source Code

##Menampilkan Data di Views
1. Buka command prompt, ketik sintaks berikut (> php artisan make:model Kelas)
2. Buka file app/Kelas.php, Kemudian edit file tersebut seperti sintak saya ini :
class KelasModel extends Model
{
  protected $table = 'tabel_kelas';
  protected $primaryKey = 'id_kelas';
  public $timestamps = true;
  protected $fillable = [
    'nama_kelas'
  ];
}
