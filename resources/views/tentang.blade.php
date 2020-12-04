@extends('template')
@section('contentWebsite')

    <div class="well well-lg">
        <div class="container">
            <h2>Tentang Ayo Kerja</h2>
            <span>Raih karir impianmu di Ayo Kerja.</span>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-xs-3">

                <div class="list-group">
                    <a href="#tentang" class="list-group-item"><i class="glyphicon glyphicon-info-sign"></i> Tentang Website</a>
                    <a href="#visi" class="list-group-item"><i class="glyphicon glyphicon-hdd"></i> Visi Misi</a>
                    <a href="{{ url("kontak") }}" class="list-group-item"><i class="glyphicon glyphicon-phone-alt"></i> Kontak Kami</a>
                </div>

            </div>
            <div class="col-xs-9">
                <div class="panel panel-default" id="tentang">

                    <div class="panel-heading"><h3 style="padding : 0; margin : 0;">Tentang Ayo Kerja</h3></div>
                    <div class="panel-body">
                      Ayo Kerja merupakan platform talent agency yang mempertemukan perusahaan-perusahaan dengan para pencari kerja handal dari berbagai industri.
                    </div>

                </div>
                <div class="panel panel-default" id="visi">

                    <div class="panel-heading"><h3 style="padding : 0; margin : 0;">Visi Misi</h3></div>
                    <div class="panel-body">
                        Visi kami adalah mempertemukan peluang karir yang diinginkan dan lebih luas bagi para pencari Kerja dengan berbagai perusahaan. Mari bergabung dengan Ayo Kerja agar karir yang Anda inginkan dapat terwujud.
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
