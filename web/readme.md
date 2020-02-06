## Pengelolaan Proyek

# Sprint 1

- Membuat project baru laravel versi 5.5
- Membuat database limakel3

- Membuat table semester
- Membuat field id (primary key, increments) di table semester
- Membuat field nama (string) di table semester
- Membuat field timestamps() di table semester

- Membuat table scrummaster
- Membuat field id (primary key, increments) di table scrummaster
- Membuat field nama (string) di table scrummaster
- Membuat field timestamps() di table scrummaster

- Membuat table tema
- Membuat field id (primary key, increments) di table tema
- Membuat field semester_id (foreign key id table semester) di table tema
- Membuat field nama (string) di table tema
- Membuat field scrummaster_id (foreign key id table scrummaster) di table tema
- Membuat field tanggal_awal (date) di table tema
- Membuat field tanggal_akhir (date) di table tema
- Membuat field timestamps() di table tema

- Membuat dummy data di table semester
- Membuat dummy data di table scrummaster

- Membuat model Semester
- Mendeklrasikan table di model Semester
- Mendeklrasikan fillable di model Semester
- Mendeklrasikan casts di model Semester
- Mendeklrasikan rules di model Semester
- Membuat method temas() foreign key table tema di model Semester

- Membuat model Scrummaster
- Mendeklrasikan table di model Scrummaster
- Mendeklrasikan fillable di model Scrummaster
- Mendeklrasikan casts di model Scrummaster
- Mendeklrasikan rules di model Scrummaster
- Membuat method temas() foreign key table tema di model Scrummaster

- Membuat model Tema
- Mendeklrasikan table di model Tema
- Mendeklrasikan guarded di model Tema
- Membuat method semester() foreign key table semester di model Tema
- Membuat method scrummaster() foreign key table scrummaster di model Tema

- Membuat controller TemaController
- Membuat method index() di TemaController
- Membuat method create() di TemaController
- Membuat method store() di TemaController
- Membuat method show() di TemaController
- Membuat method edit() di TemaController
- Membuat method update() di TemaController
- Membuat method destroy() di TemaController
- Membuat routing resource tema dari TemaController

- Memasukkan assets template argon dashboard free

- Membuat file views/dashboard.blade.php
- Memasukkan code dashboard template argon di views/dashboard.blade.php

- Membuat file views/draft.blade.php

- Membuat folder views/layouts

- Membuat file views/layouts/header.blade.php
- Memasukkan code <head> dan assets css template argon di views/layouts/header.blade.php

- Membuat file views/layouts/sidebar.blade.php
- Memasukkan code sidebar template argon di views/layouts/sidebar.blade.php

- Membuat file views/layouts/message.blade.php
- Membuat code message di views/layouts/message.blade.php

- Membuat file views/layouts/footer.blade.php
- Memasukkan assets javascript template argon di views/layouts/footer.blade.php

- Membuat file views/layouts/copyright.blade.php
- Memasukkan code <footer> template argon di views/layouts/header.blade.php

- Membuat file views/layouts/master.blade.php
- Menginclude header.blade.php, sidebar.blade.php, footer.blade.php di views/layouts/master.blade.php

- Membuat folder views/temas

- Membuat file views/temas/index.blade.php
- Membuat dropdown field table semester di views/temas/index.blade.php
- Membuat table field table tema di views/temas/index.blade.php
- Membuat show/hide table field dari dropdown field di views/temas/index.blade.php
- Membuat button create data table tema di views/temas/index.blade.php
- Membuat button show data table tema di views/temas/index.blade.php
- Membuat button edit data table tema di views/temas/index.blade.php
- Membuat button delete data table tema di views/temas/index.blade.php

- Membuat file views/temas/create.blade.php
- Membuat form data table tema di views/temas/create.blade.php
- Menginclude views/layouts/message.blade.php di views/temas/create.blade.php
- Membuat dropdown field semester_id table tema di views/temas/create.blade.php
- Membuat text field nama table tema di views/temas/create.blade.php
- Membuat dropdown field scrummaster_id table tema di views/temas/create.blade.php
- Membuat date field tanggal_awal table tema di views/temas/create.blade.php
- Membuat date field tanggal_akhir table tema di views/temas/create.blade.php
- Membuat button batal di views/temas/create.blade.php
- Membuat button kirim di views/temas/create.blade.php

- Membuat file views/temas/show.blade.php
- Menginclude views/layouts/message.blade.php di views/temas/show.blade.php
- Membuat label field semester_id table tema di views/temas/show.blade.php
- Membuat label field nama table tema di views/temas/show.blade.php
- Membuat label field scrummaster_id table tema di views/temas/show.blade.php
- Membuat label field tanggal_awal table tema di views/temas/show.blade.php
- Membuat label field tanggal_akhir table tema di views/temas/show.blade.php
- Membuat button kembali di views/temas/show.blade.php

- Membuat file views/temas/edit.blade.php
- Membuat form data table tema di views/temas/edit.blade.php
- Menginclude views/layouts/message.blade.php di views/temas/edit.blade.php
- Membuat dropdown field semester_id table tema di views/temas/edit.blade.php
- Membuat text field nama table tema di views/temas/edit.blade.php
- Membuat dropdown field scrummaster_id table tema di views/temas/edit.blade.php
- Membuat date field tanggal_awal table tema di views/temas/edit.blade.php
- Membuat date field tanggal_akhir table tema di views/temas/edit.blade.php
- Membuat button batal di views/temas/edit.blade.php
- Membuat button ubah di views/temas/edit.blade.php

# Sprint 2

- Membuat table prodi
- Membuat field id (primary key, increments) di table prodi
- Membuat field kode (string) di table prodi
- Membuat field nama (string) di table prodi
- Membuat field timestamps() di table prodi

- Membuat table tim
- Membuat field id (primary key, increments) di table tim
- Membuat field nama (string) di table tim
- Membuat field semester_id (foreign key id table semester) di table tim
- Membuat field prodi_id (foreign key id table prodi) di table tim
- Membuat field timestamps() di table tim

- Membuat field tim_id (foreign key id table tim, nullable) di table tema

- Membuat table membertim
- Membuat field id (primary key, increments) di table membertim
- Membuat field tim_id (foreign key id table tim) di table membertim
- Membuat field nim (nim) di table membertim
- Membuat field peran (peran) di table membertim
- Membuat field timestamps() di table membertim

- Membuat dummy data di table prodi
- Membuat dummy data di table tim
- Membuat dummy data di table tema
- Membuat dummy data di table membertim

- Menghapus deklarasi fillable di model Semester
- Menghapus deklarasi casts di model Semester
- Menghapus deklarasi rules di model Semester

- Menghapus deklarasi fillable di model Scrummaster
- Menghapus deklarasi casts di model Scrummaster
- Menghapus deklarasi rules di model Scrummaster

- Membuat model Prodi 
- Mendeklrasikan table di model Prodi
- Membuat method tims() foreign key table tim di model Prodi

- Membuat model Tim 
- Mendeklrasikan table di model Tim
- Mendeklrasikan guarded di model Tim
- Membuat method semester() foreign key table semester di model Tim
- Membuat method prodi() foreign key table prodi di model Tim
- Membuat method membertims() foreign key table membertim di model Tim

- Membuat model Membertim 
- Mendeklrasikan table di model Membertim
- Mendeklrasikan guarded di model Membertim
- Membuat method tim() foreign key table tim di model Membertim

- Membuat controller TimController
- Membuat method index() di TimController
- Membuat method create() di TimController
- Membuat method store() di TimController
- Membuat method show() di TimController
- Membuat method edit() di TimController
- Membuat method update() di TimController
- Membuat method destroy() di TimController
- Membuat routing resource tim dari TimController

- Membuat controller MembertimController
- Membuat method index() di MembertimController
- Membuat method create() di MembertimController
- Membuat method store() di MembertimController
- Membuat method show() di MembertimController
- Membuat method edit() di MembertimController
- Membuat method update() di MembertimController
- Membuat method destroy() di MembertimController
- Membuat routing resource membertim dari MembertimController

- Membuat folder views/tims

- Membuat file views/tims/index.blade.php
- Membuat dropdown field table semester di views/tims/index.blade.php
- Membuat table field table tim di views/tims/index.blade.php
- Membuat show/hide table field dari dropdown field di views/tims/index.blade.php
- Membuat button create data table tim di views/tims/index.blade.php
- Membuat button show data table tim di views/tims/index.blade.php
- Membuat button edit data table tim di views/tims/index.blade.php
- Membuat button delete data table tim di views/tims/index.blade.php

- Membuat file views/tims/create.blade.php
- Membuat form data table tim di views/tims/create.blade.php
- Menginclude views/layouts/message.blade.php di views/tims/create.blade.php
- Membuat dropdown field semester_id table tim di views/tims/create.blade.php
- Membuat text field nama table tim di views/tims/create.blade.php
- Membuat dropdown field prodi_id table tim di views/tims/create.blade.php
- Membuat button batal di views/tims/create.blade.php
- Membuat button kirim di views/tims/create.blade.php

- Membuat file views/tims/show.blade.php
- Menginclude views/layouts/message.blade.php di views/tims/show.blade.php
- Membuat label field semester_id table tim di views/tims/show.blade.php
- Membuat label field nama table tim di views/tims/show.blade.php
- Membuat label field prodi_id table tim di views/tims/show.blade.php
- Membuat button kembali di views/tims/show.blade.php

- Membuat file views/tims/edit.blade.php
- Membuat form data table tim di views/tims/edit.blade.php
- Menginclude views/layouts/message.blade.php di views/tims/edit.blade.php
- Membuat dropdown field semester_id table tim di views/tims/edit.blade.php
- Membuat text field nama table tim di views/tims/edit.blade.php
- Membuat dropdown field prodi_id table tim di views/tims/edit.blade.php
- Membuat button batal di views/tims/edit.blade.php
- Membuat button ubah di views/tims/edit.blade.php

- Membuat folder views/membertims

- Membuat file views/membertims/index.blade.php
- Membuat dropdown field table tim di views/membertims/index.blade.php
- Membuat table field table membertim di views/membertims/index.blade.php
- Membuat show/hide table field dari dropdown field di views/membertims/index.blade.php
- Membuat button create data table membertim di views/membertims/index.blade.php
- Membuat button show data table membertim di views/membertims/index.blade.php
- Membuat button edit data table membertim di views/membertims/index.blade.php
- Membuat button delete data table membertim di views/membertims/index.blade.php

- Membuat file views/membertims/create.blade.php
- Membuat form data table membertim di views/membertims/create.blade.php
- Menginclude views/layouts/message.blade.php di views/membertims/create.blade.php
- Membuat dropdown field tim_id table membertim di views/membertims/create.blade.php
- Membuat text field nim table membertim di views/membertims/create.blade.php
- Membuat text field peran table membertim di views/membertims/create.blade.php
- Membuat button batal di views/membertims/create.blade.php
- Membuat button kirim di views/membertims/create.blade.php

- Membuat file views/membertims/show.blade.php
- Menginclude views/layouts/message.blade.php di views/membertims/show.blade.php
- Membuat label field tim_id table membertim di views/membertims/show.blade.php
- Membuat label field nim table membertim di views/membertims/show.blade.php
- Membuat label field peran table membertim di views/membertims/show.blade.php
- Membuat button kembali di views/membertims/show.blade.php

- Membuat file views/membertims/edit.blade.php
- Membuat form data table membertim di views/membertims/edit.blade.php
- Menginclude views/layouts/message.blade.php di views/membertims/edit.blade.php
- Membuat dropdown field tim_id table membertim di views/membertims/edit.blade.php
- Membuat text field nim table membertim di views/membertims/edit.blade.php
- Membuat text field peran table membertim di views/membertims/edit.blade.php
- Membuat button batal di views/membertims/edit.blade.php
- Membuat button ubah di views/membertims/edit.blade.php

# Sprint 3

- Menghapus field kode di table prodi

- Membuat table peran
- Membuat field id (primary key, increments) di table peran
- Membuat field nama (string) di table peran
- Membuat field timestamps() di table peran

- Membuat table mahasiswa
- Membuat field id (primary key, increments) di table mahasiswa
- Membuat field nim (string) di table mahasiswa
- Membuat field nama (string) di table mahasiswa
- Membuat field timestamps() di table mahasiswa

- Membuat field final_skor (double) di table tim
- Membuat field created_by (string, default Scrum Master) di table tim

- Menghapus field nim (nim) di table membertim
- Menghapus field peran (peran) di table membertim
- Membuat field mahasiswa_id (foreign key id table mahasiswa) di table membertim
- Membuat field peran_id (foreign key id table peran) di table membertim
- Membuat field tanggung_jawab (text) di table membertim
- Membuat field final_skor (double) di table membertim
- Membuat field created_by (string, default Scrum Master) di table membertim

- Mengubah nama table tema menjadi project
- Membuat field dekripsi (text) di table project
- Mengubah nama field tanggal_awal menjadi tanggal_mulai di table project
- Membuat field jumlah_sprint (integer) di table project
- Membuat field budget (double, default 0) di table project
- Membuat field status (string, default Baru) di table project
- Membuat field persen (double, default 0) di table project
- Membuat field tim_id (foreign key id table tim) di table project
- Membuat field created_by (string, default Project Owner) di table project

- Membuat table mvp
- Membuat field id (primary key, increments) di table mvp
- Membuat field project_id (foreign key id table project) di table mvp
- Membuat field sprint (integer) di table mvp
- Membuat field tanggal_rilis (date) di table mvp
- Membuat field deskripsi (text) di table mvp
- Membuat field timestamps() di table mvp

- Membuat dummy data di table peran
- Membuat dummy data di table mahasiswa
- Mengubah nama dummy data table tema menjadi project
- Membuat dummy data di table mvp

- Mengubah method temas() menjadi projects() di model Semester
- Mengubah method temas() menjadi projects() di model Scrummaster

- Membuat model Peran 
- Mendeklrasikan table di model Peran
- Membuat method membertims() foreign key table membertim di model Peran

- Membuat model Mahasiswa 
- Mendeklrasikan table di model Mahasiswa
- Membuat method membertims() foreign key table membertim di model Mahasiswa

- Membuat method projects() foreign key table project di model Tim

- Membuat method peran() foreign key table peran di model Membertim
- Membuat method mahasiswa() foreign key table mahasiswa di model Membertim

- Mengubah nama model Tema menjadi Project
- Membuat method tim() foreign key table tim di model Project
- Membuat method mvps() foreign key table mvp di model Project

- Membuat model Mvp
- Mendeklrasikan table di model Mvp
- Mendeklrasikan guarded di model Mvp
- Membuat method project() foreign key table project di model Mvp

- Mengubah nama controller TemaController menjadi ProjectController
- Membuat method tim() di ProjectController
- Membuat method pilih() di ProjectController
- Membuat method membertim() di ProjectController

- Membuat controller PilihController
- Membuat method tim() di PilihController
- Membuat method pilih() di PilihController
- Membuat method membertim() di PilihController
- Membuat routing get tim dari PilihController
- Membuat routing put patch project dari PilihController
- Membuat routing get membertim dari PilihController

- Membuat controller MvpController
- Membuat method index() di MvpController
- Membuat method create() di MvpController
- Membuat method store() di MvpController
- Membuat method show() di MvpController
- Membuat method edit() di MvpController
- Membuat method update() di MvpController
- Membuat method destroy() di MvpController
- Membuat routing resource mvp dari MvpController

- Mengubah nama views/tema menjadi views/projects

- Membuat textarea field deskripsi table project di views/projects/create.blade.php
- Mengubah nama field tanggal_awal menjadi tanggal_mulai di views/projects/create.blade.php
- Membuat number field jumlah_sprint table project di views/projects/create.blade.php
- Membuat text field budget table project di views/projects/create.blade.php

- Membuat label field deskripsi table project di views/projects/show.blade.php
- Mengubah nama label field tanggal_awal menjadi tanggal_mulai di views/projects/show.blade.php
- Membuat label field jumlah_sprint table project di views/projects/show.blade.php
- Membuat label field budget table project di views/projects/show.blade.php
- Membuat label field status table project di views/projects/show.blade.php
- Membuat label field persen table project di views/projects/show.blade.php
- Membuat label field tim_id table project di views/projects/show.blade.php
- Membuat label field created_by table project di views/projects/show.blade.php

- Membuat button detail tim_id di views/projects/show.blade.php
- Membuat dropdown field table tim di views/projects/tim.blade.php
- Membuat table field table membertim di views/projects/tim.blade.php
- Membuat show/hide table field dari dropdown field di views/projects/tim.blade.php
- Membuat button batal table project di views/projects/tim.blade.php
- Membuat button ok table project di views/projects/tim.blade.php

- Membuat button detail membertim_id di views/projects/show.blade.php
- Membuat table field table membertim di views/projects/membertim.blade.php
- Membuat button kembali table project di views/projects/membertim.blade.php

- Membuat dropdown field tim_id table project di views/projects/membertim.blade.php
- Membuat button batal table project di views/projects/membertim.blade.php
- Membuat button ok table project di views/projects/membertim.blade.php

- Membuat textarea field deskripsi table project di views/projects/edit.blade.php
- Mengubah nama field tanggal_awal menjadi tanggal_mulai di views/projects/edit.blade.php
- Membuat number field jumlah_sprint table project di views/projects/edit.blade.php
- Membuat text field budget table project di views/projects/edit.blade.php

- Membuat label field final_skor table tim di views/tims/show.blade.php
- Membuat label field created_by table tim di views/tims/show.blade.php

- Mengubah text field nim menjadi dropdown field mahasiswa_id table membertim di views/membertims/create.blade.php
- Mengubah text field peran menjadi dropdown field peran_id table membertim di views/membertims/create.blade.php
- Membuat textarea field tanggung_jawab table membertim di views/membertims/create.blade.php

- Mengubah label field nim menjadi label field mahasiswa_id table membertim di views/membertims/show.blade.php
- Mengubah label field peran menjadi label field peran_id table membertim di views/membertims/show.blade.php
- Membuat label field tanggung_jawab table membertim di views/membertims/show.blade.php
- Membuat label field final_skor table membertim di views/membertims/show.blade.php
- Membuat label field created_by table membertim di views/membertims/show.blade.php

- Mengubah text field nim menjadi dropdown field mahasiswa_id table membertim di views/membertims/edit.blade.php
- Mengubah text field peran menjadi dropdown field peran_id table membertim di views/membertims/edit.blade.php
- Membuat textarea field tanggung_jawab table membertim di views/membertims/edit.blade.php

- Membuat folder views/mvps

- Membuat file views/mvps/index.blade.php
- Membuat dropdown field table project di views/mvps/index.blade.php
- Membuat table field table mvp di views/mvps/index.blade.php
- Membuat show/hide table field dari dropdown field di views/mvps/index.blade.php
- Membuat button create data table mvp di views/mvps/index.blade.php
- Membuat button show data table mvp di views/mvps/index.blade.php
- Membuat button edit data table mvp di views/mvps/index.blade.php
- Membuat button delete data table mvp di views/mvps/index.blade.php

- Membuat file views/mvps/create.blade.php
- Membuat form data table mvp di views/mvps/create.blade.php
- Menginclude views/layouts/message.blade.php di views/mvps/create.blade.php
- Membuat dropdown field project_id table mvp di views/mvps/create.blade.php
- Membuat text field sprint_ke table mvp di views/mvps/create.blade.php
- Membuat date field tanggal_rilis table mvp di views/mvps/create.blade.php
- Membuat textarea field deskripsi table mvp di views/mvps/create.blade.php
- Membuat button batal di views/mvps/create.blade.php
- Membuat button kirim di views/mvps/create.blade.php

- Membuat file views/mvps/show.blade.php
- Menginclude views/layouts/message.blade.php di views/mvps/show.blade.php
- Membuat label field project_id table mvp di views/mvps/show.blade.php
- Membuat label field sprint_ke table mvp di views/mvps/show.blade.php
- Membuat label field tanggal_rilis table mvp di views/mvps/show.blade.php
- Membuat label field deskripsi table mvp di views/mvps/show.blade.php
- Membuat button kembali di views/mvps/show.blade.php

- Membuat file views/mvps/edit.blade.php
- Membuat form data table mvp di views/mvps/edit.blade.php
- Menginclude views/layouts/message.blade.php di views/mvps/edit.blade.php
- Membuat dropdown field project_id table mvp di views/mvps/edit.blade.php
- Membuat text field sprint_ke table mvp di views/mvps/edit.blade.php
- Membuat date field tanggal_rilis table mvp di views/mvps/edit.blade.php
- Membuat textarea field deskripsi table mvp di views/mvps/edit.blade.php
- Membuat button batal di views/mvps/edit.blade.php
- Membuat button ubah di views/mvps/edit.blade.php

# Sprint 4

- Menggunakan aplikasi Postman untuk percobaan web service
- Memindahkan routing yang ada pada routes/web.php ke routes/api.php
- Menjadikan data JSON pada ProjectController
- Melakukan test web service pada aplikasi web