<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Surat</title>
    <style>

       @font-face {
            font-family: 'MyriadPro';          
            src: url("{{ public_path('font/MyriadPro-Regular.ttf') }}") format('truetype');               
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: 'MyriadPro';            
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .header {
            text-align: right;
        }
        .content {
            margin-top: 20px;
            flex-grow: 1; /* Mendorong footer ke bawah */
            text-align: justify;
        }
        .signature {
            margin-top: 50px;
            text-align: left;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 0px;
            vertical-align: top;
        }
        .no-lampiran td:first-child {
            width: 100px;
        }
        .no-lampiran td:nth-child(2) {
            width: 10px;
        }
        .page {
        position: relative;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
        .footer {
            position: fixed;
            bottom: -50;           
            left: 0;
            width: 100%;
            height: 50px; /* Sesuaikan tinggi agar penuh */
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="header">
            <img style="width: 150px" src="{{ public_path('logo.png') }}" alt="Logo" width="100">
        </div>

        <table class="no-lampiran">
            <tr>
                <td>No</td>
                <td>:</td>
                <td>{{ $surat->nomor_surat }}</td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td>1 Lembar</td>
            </tr>
        </table>

        <p>Kepada:<br><strong>{{ $surat->perusahaan->name }}</strong><br>{{ $surat->perusahaan->alamat }}</p>

        @if($surat->up)
            <p>UP: {{ $surat->up }}</p>
        @endif

        <p>Perihal: {{ $surat->perihal }}</p>

        <div class="content">
            <p>Dengan hormat,</p>
            {!! nl2br(e($surat->content)) !!}
        </div>

        <div class="signature">
            <p>Hormat kami,<br>Jakarta, {{ date('d F Y') }}<br><strong>PT. Mitra Mutiara</strong></p>        
            <img src="{{ public_path('storage/qrcode_' . $surat->id . '.svg') }}" width="100" alt="QR Code">
            <p><strong>Novri Darsono</strong><br>Direktur Utama</p>
        </div>
    </div>    
    <div class="footer"></div>
</body>
</html>
