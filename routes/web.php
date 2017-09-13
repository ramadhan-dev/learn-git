
<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/api/kecamatan', 'Admin\KecamatanController@getDatatabless')->name('api.kecamatan');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>['auth']], function () {
    // Router Admin
    Route::group(['middleware' => 'admin', 'prefix' => 'admin' ], function () {
         // Route::put('desa', 'Admin/DesaController@update');
         Route::get('/', 'HomeController@index')->name('dashboard');
         Route::resource('user', 'Admin\UserController');
         Route::resource('izin', 'Admin\IzinController');
         Route::resource('kecamatan', 'Admin\KecamatanController');
         Route::resource('desa', 'Admin\DesaController');
         Route::resource('kategori', 'Admin\KategoriController');
         Route::resource('persyaratan', 'Admin\PersyaratanController');
         Route::resource('document', 'Admin\CekdokumentController');
         Route::resource('tandatangan', 'Admin\TandatanganController');

         // Data Tables
         Route::get('/api/kecamatan', 'Admin\KecamatanController@getDatatables')->name('api.kecamatan');
         
         // menu back user admin
    });
    //End Admin

    // Router Pimpinan
    Route::group(['middleware' => 'pimpinan', 'prefix' => 'pimpinan'], function () {
        Route::get('/', 'Pimpinan\PimpinanController@index')->name('pimpinan');
    });
    //End Pimpinan
    
    // Router front
    Route::group(['middleware' => 'front', 'prefix' => 'front' ], function () {
         Route::get('/', 'Front\FrontController@index')->name('front');
         Route::get('detail-data-izin/{id}', 'Front\FrontController@show')->name('front.office.detail');
    });
    //End front
    
    // Router back
    Route::group(['middleware' =>'back', 'prefix' => 'back' ], function () {
    // Route Back user dan Admin USer
        Route::get('/', 'Back\BackController@index')->name('back');
        Route::get('pendaftaran','Back\PendaftaranController@daftar')->name('start.pendaftaran');
        Route::post('pendaftaran','Back\PendaftaranController@store')->name('pendaftaran.store');
        Route::get('datapemohon','Back\PemohonController@index')->name('pemohon.index');
        Route::get('pemohon-show/{id}','Back\PemohonController@show');
    // End
    
    //Route Pendaftaran pemohon baru 
        Route::get('/getdesa/{kecamatan}', 'Back\PemohonController@getdesa');
        Route::get('/pilih-pemohon/id-pendaftaran-{id}', 'Back\PendaftaranController@pilihPemohon')->name('pilih-pemohon');
        Route::get('pemohonbaru/id-pendaftaran/{id}','Back\PemohonController@pemohonbaru')->name('pemohon.baru');
        Route::post('pemohon','Back\PemohonController@store')->name('pemohon.store');
        Route::put('pemohon/{id}','Back\PemohonController@update')->name('pemohon.update');
        Route::put('saham-pemohon/{id}','Back\PemohonController@updateSaham')->name('pemohon.update.saham');
        Route::get('pemohonbaru/id-pendaftaran/{id}/data-izin','Back\PemohonController@dataIzin')->name('data.izin');
    //Data Izin
        Route::post('data-siup','Back\DataIzinController@siup')->name('dataIzin.siup');
        Route::post('data-tdp','Back\DataIzinController@tdp')->name('dataIzin.tdp');
        Route::post('data-ho','Back\DataIzinController@ho')->name('dataIzin.ho');
        Route::post('data-imb','Back\DataIzinController@imb')->name('dataIzin.imb');
    //Update Data Izin
        Route::put('update-data-izin-siup/{id}','Back\DataIzinController@updateSiup');
        Route::put('update-data-izin-tdp/{id}','Back\DataIzinController@updatetdp');
        Route::put('update-data-izin-ho/{id}','Back\DataIzinController@updateHo');
    // Print Bukti Pendaftran
        Route::get('print-bukti-izin-pendaftaran/{id}', 'Back\PendaftaranController@printBukti')->name('print.bukti.pendaftaran');
    // daftar izin masuk
        Route::get('izin-masuk', 'Back\PendaftaranController@index')->name('izin.masuk');
    });
    //End back
    
    // CHANGE PASSWORD
    Route::get('/change-password','Admin\UserController@changePassword')->name('changepassword');
    Route::post('/change-password','Admin\UserController@storePassword')->name('change-password-user');
    Route::get('/ambildesa/{kecamatan}', 'Back\PemohonController@ambildesa');
    // END CHANGE PASSWORD
});


    Route::group(['middleware' => 'auth', 'pelayanan', 'prefix' => 'kasi_pelayanan'], function () {
         Route::get('/', 'Kasi_pelayanan\Kasi_pelayananController@index')->name('kasi.pelayanan');
         Route::get('pemohonbaru/id-pendaftaran/{id}/data-izin','Back\PemohonController@dataIzin')->name('kasi.pelayanan.detail');
         Route::get('update-status-pelayanan/{id}','Back\PendaftaranController@updateStatusPelayanan')->name('kasi.pelayanan.update.status');
    });

    Route::group(['middleware' => 'auth', 'perizinan', 'prefix' => 'kasi_perizinan'], function () {
         Route::get('/', 'Kasi_perizinan\Kasi_perizinanController@index')->name('kasi.perizinan');
         Route::get('pemohonbaru/id-pendaftaran/{id}/data-izin','Back\PemohonController@dataIzin')->name('kasi.perizinan.detail');
         Route::get('update-status-perizinan/{id}','Back\PendaftaranController@updateStatusPerizinan')->name('kasi.perizinan.update.status');

    });

 // ERROR
Route::get('/not_found', function () {
    return view('error.not_found');
});

Route::get('/internal', function () {
    return view('error.internal');
});

Route::get('/admin-permission', function () {
    return view('error.admin');
})->name('error.admin');

Route::get('/pimpinan-permission', function () {
    return view('error.pimpinan');
})->name('error.pimpinan');

Route::get('/front-permission', function () {
    return view('error.front');
})->name('error.front');

Route::get('/back-permission', function () {
    return view('error.back');
})->name('error.back');
