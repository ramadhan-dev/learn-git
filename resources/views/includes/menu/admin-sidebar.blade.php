<div class="menu_section" style="padding-top: 20px;">
    <a href="{{route('dashboard')}}"><h3>General</h3></a>
    <ul class="nav side-menu">
        <li><a><i class="fa fa-home"></i> Master Data <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
                <li><a href="{{route('pemohon.index')}}">Pemohon</a></li>
                <li><a href="{{route('kategori.index')}}">Kategori Izin </a></li>
                <li><a href="{{route('izin.index')}} ">Jenis Izin</a></li>
                <li><a href="{{route('persyaratan.index')}} ">Persyaratan</a></li>
                <li><a href="{{route('tandatangan.index')}} ">Tanda Tangan</a></li>
                <li><a href="{{route('document.index')}} ">Ceklis Dokument</a></li>
                <li><a href="{{route('kecamatan.index')}}">Kecamatan </a></li>
                <li><a href="{{route('desa.index')}}">Desa </a></li>
                <li><a href="{{route('user.index')}}">User </a></li>
            </ul>
        </li>
    </ul>
</div>


<div class="menu_section">
<h3>Front User</h3>
    <ul class="nav side-menu">
            <li><a href="{{route('start.pendaftaran')}}"><i class="fa fa-user"></i> <span>Pendaftaran</span></a></li>
            <li><a href="{{route('izin.masuk')}}"><i class="fa fa-book"></i> <span>Izin Masuk</span></a></li>
    </ul>
</div>

<div class="menu_section">
<h3>Kasi Pelayanan</h3>
    <ul class="nav side-menu">
            <li><a href="{{route('kasi.pelayanan')}}"><i class="fa fa-user"></i> <span>Izin Kasi Pelayanan</span></a></li>
    </ul>
</div>

<div class="menu_section">
<h3>Kasi Pelayanan</h3>
    <ul class="nav side-menu">
            <li><a href="{{route('kasi.perizinan')}}"><i class="fa fa-user"></i> <span>Izin Kasi perizinan</span></a></li>
    </ul>
</div>

<div class="menu_section">
<h3>Back User</h3>
    <ul class="nav side-menu">
            <li><a href="{{route('front')}}"><i class="fa fa-book"></i> <span>Izin Masuk</span></a></li>
    </ul>
</div>
<div class="menu_section">
<h3>Account</h3>
    <ul class="nav side-menu">
            <li><a href="{{route('changepassword')}}"><i class="fa fa-windows"></i> <span>Rubah Password</span></a></li>
    </ul>
</div>