<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\Perusahaan;
use App\Models\Template;
// use PDF;

use Barryvdh\DomPDF\Facade\Pdf;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Writer;
use Illuminate\Support\Facades\Storage;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;


class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::with('perusahaan')->paginate(10);
        return view('surat.index', compact('surat'));
    }

    public function create()
    {
        $perusahaan = Perusahaan::all();
        $templates = Template::all();
        return view('surat.create', compact('perusahaan', 'templates'));
    }

      public function store(Request $request)
    {
        $perusahaan = Perusahaan::find($request->perusahaan_id);
        $kodePerusahaan = $perusahaan->Kode; // Ambil kode perusahaan
        $nomorTerakhir = Surat::where('perusahaan_id', $request->perusahaan_id)->count() + 1;
        $bulanRomawi = [
            1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV',
            5 => 'V', 6 => 'VI', 7 => 'VII', 8 => 'VIII',
            9 => 'IX', 10 => 'X', 11 => 'XI', 12 => 'XII'
        ];
        $bulan = $bulanRomawi[date('n')]; // Konversi bulan ke angka Romawi
        $tahun = date('Y');

        // Format nomor surat
        $nomorSurat = sprintf('%04d/%s-%s/%d', $nomorTerakhir, $kodePerusahaan, $bulan, $tahun);
        
        Surat::create([
            'perusahaan_id' => $request->perusahaan_id,
            'template_id' => $request->template_id,
            'nomor_surat' => $nomorSurat,
            'up' => $request->up,
            'perihal' => $request->perihal,
            'content' => Template::findOrFail($request->template_id)->content
        ]);
        
        return redirect()->route('surat.index');
    }

     public function show(Surat $surat)
    {
        return view('surat.pdf', compact('surat'));
    }

    public function download($id)
    {
        $surat = Surat::with('perusahaan')->findOrFail($id);

        // **Generate QR Code**
        $qrText = "Tandatangan Elektronik Novri Darsono - Direktur PT Mitra Mutiara untuk Penawaran SPARING " .$surat->perusahaan->name."\n";
        $qrText .= "Nomor Surat: " . $surat->nomor_surat . "\n";
        $qrText .= "Tanggal: " . now()->format('d-m-Y');

        $renderer = new ImageRenderer(new RendererStyle(200), new SvgImageBackEnd());
        
        $writer = new Writer($renderer);
        $qrCodePath = storage_path('app/public/qrcode_' . $surat->id . '.svg');

        file_put_contents($qrCodePath, $writer->writeString($qrText));
    
        $pdf = Pdf::loadView('surat.pdf', compact('surat', 'qrCodePath'))
                ->setPaper('A4', 'portrait')
                ->setOption('margin-bottom', 0)
                ->setOption('defaultFont', 'MyriadPro'); // Menetapkan font default

        $nomorSurat = str_replace(['/', '\\'], '_', $surat->nomor_surat);
        return $pdf->download('Surat_' . $nomorSurat . '.pdf');
    }

    public function edit($id)
    {
        $surat = Surat::findOrFail($id);
        $perusahaan = Perusahaan::all();
        $templates = Template::all();
        return view('surat.edit', compact('surat', 'perusahaan', 'templates'));
    }

    public function update(Request $request, $id)
    {
        $surat = Surat::findOrFail($id);
        $surat->update($request->all());
        return redirect()->route('surat.index');
    }

    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->delete();
        return redirect()->route('surat.index');
    }

}


