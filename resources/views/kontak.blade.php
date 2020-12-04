@extends('template')
@section('contentWebsite')

    <div class="well well-lg">
        <div class="container">
            <h2>Kontak Kami</h2>
            <span>Beberapa kontak yang bisa dihubungi.</span>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-xs-3">

                <div class="list-group">
                    <a href="{{ url("kontak") }}" class="list-group-item"><i class="glyphicon glyphicon-phone-alt"></i> Kontak Kami</a>
                    <a href="{{ url("tentang") }}#tentang" class="list-group-item"><i class="glyphicon glyphicon-info-sign"></i> Tentang Website</a>
                </div>

            </div>
            <div class="col-xs-9">
                <div class="panel panel-default" id="tentang">

                    <div class="panel-heading"><h3 style="padding : 0; margin : 0;">Kontak Kami</h3></div>
                    <div class="panel-body">
                        Terima kasih sudah mengunjungi website ini, apabila ada pertanyaan terkait website Ayo Kerja, silakan menghubungi beberapa kontak berikut :
                        <br>
                        <br>
                        <ul>
                            <li>No. HP : <b>089653xxxxx</b></li>
                            <li>Whatsapp : <b>089653xxxxx</b></li>
                            <li>Website : <b><a href="http://thohariakb.site" target="_blank">http://thohariakb.site</a></b></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
