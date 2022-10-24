@section('title',"{$data->company->name} ".date('d-M-Y',strtotime($data->created_at)))
<div class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">Tabel PSAK 24</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="rincian-tab" data-toggle="tab" href="#rincian" aria-controls="rincian" role="tab" aria-selected="false">Rincian Perkaryawan</a>
                        </li>
                        <li class="nav-item">
                            <button style="margin-left:20px;" wire:click="start_calculate" data-toggle="modal" data-target="#modal_start_calculate" class="btn btn-primary">Mulai Menghitung</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" aria-labelledby="rincian-tab" role="tabpanel">
                            <p><strong>
                                PERHITUNGAN AKTUARIA - ESTMASI BEBAN/(PENDAPATAN) DAN LIABILITAS/(ASET)<br />
                                SESUAI PSAK NO.24 (REVISI 2013) + AMENDEMEN TAHUN 2015 ; PERUBAHAN MINOR TAHUN 2016 DAN TAHUN 2018<br />
                                BERDASARKAN UUTK NO.13 TAHUN 2003 DAN UUCK N).11 TAHUN 2020 DAN PP NO.35 TAHUN 2021<br />
                                PROGRAM IMBALAN PASCA KERJA KARYAWAN - {{$data->company->name}}
                            </strong>
                            </p>
                            <table class="table table_custome table-hover">
                                <tr class="table-light">
                                    <th style="width:25px;" class="text-right">NO</th>
                                    <td style="width:10px;"></td>
                                    <th>KETERANGAN</th>
                                    <th>{{date('d-M-Y',strtotime($data->created_at))}}</th>
                                </tr>
                                <tr>
                                    <td class="text-right">1</td>
                                    <td></td>
                                    <th>ASUMSI dan METODA PENILAIAN AKTUARIA</th>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">2</td>
                                    <td class="text-right">1</td>
                                    <td>TINGKAT DISKONTO</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">3</td>
                                    <td class="text-right">2</td>
                                    <td>TINGKAT KENAIKAN GAJI</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">4</td>
                                    <td class="text-right">3</td>
                                    <td>TINGKAT MORTALITA</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">5</td>
                                    <td class="text-right">4</td>
                                    <td>TINGKAT CACAT</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">6</td>
                                    <td class="text-right">5</td>
                                    <td>TINGKAT MENGUNDURKAN DIRI</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">7</td>
                                    <td class="text-right"></td>
                                    <td class="text-center">≤ 29</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">8</td>
                                    <td class="text-right"></td>
                                    <td class="text-center">30 - 34</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">8</td>
                                    <td class="text-right"></td>
                                    <td class="text-center">35 - 39</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">9</td>
                                    <td class="text-right"></td>
                                    <td class="text-center">40 - 44</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">10</td>
                                    <td class="text-right"></td>
                                    <td class="text-center">45 - 54</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">11</td>
                                    <td class="text-right"></td>
                                    <td class="text-center"> ≥ 55</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">12</td>
                                    <td class="text-right">6</td>
                                    <td>USIA PENSIUN NORMAL</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">13</td>
                                    <td class="text-right">7</td>
                                    <td>METODA PENILAIAN AKTUARIA</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">14</td>
                                    <th colspan="2">DATA KARYAWAN</th>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">15</td>
                                    <td class="text-right">1</td>
                                    <td>JUMLAH KARYAWAN</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">16</td>
                                    <td class="text-right">2</td>
                                    <td>JUMLAH GAJI SEBULAN</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">17</td>
                                    <td class="text-right">3</td>
                                    <td>RATA-RATA GAJI SEBULAN</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">18</td>
                                    <td class="text-right">4</td>
                                    <td>RATA-RATA USIA</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">19</td>
                                    <td class="text-right">5</td>
                                    <td>RATA-RATA MASA KERJA</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">20</td>
                                    <td class="text-right">6</td>
                                    <td>RATA-RATA SISA MASA KERJA</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">21</td>
                                    <td class="text-right">7</td>
                                    <td>PEMBAYARAN IMBALAN KERJA YANG DIAKUI</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">22</td>
                                    <td class="text-right">8</td>
                                    <td>KURTAILMEN DAN PENYELESAIAN</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">23</td>
                                    <td class="text-right">9</td>
                                    <td>Saldo DPLK Porsi Perusahaan</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">24</td>
                                    <th colspan="2">PERHITUNGAN KEUNTUNGAN (KERUGIAN) AKTUARIA</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">25</td>
                                    <td class="text-right">1</td>
                                    <td>Nilai Kini Kewajiban Awal Periode</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">26</td>
                                    <td class="text-right">2</td>
                                    <td>Biaya Jasa Lalu</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">27</td>
                                    <td class="text-right">3</td>
                                    <td>Biaya Jasa Kini</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">28</td>
                                    <td class="text-right">4</td>
                                    <td>Biaya Bunga</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">29</td>
                                    <td class="text-right">5</td>
                                    <td>Pembayaran Imbalan Kerja</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">30</td>
                                    <td class="text-right">6</td>
                                    <td>Kurtailmen dan Penyelesaian</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">31</td>
                                    <td class="text-right">7</td>
                                    <td>Nilai Kini Kewajiban Akhir Periode - Perkiraan</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">32</td>
                                    <td class="text-right">8</td>
                                    <td>Nilai Kini Kewajiban Akhir Periode - Aktual</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">33</td>
                                    <td class="text-right">9</td>
                                    <th>(Keuntungan) Kerugian Aktuaria - Kewajiban</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">34</td>
                                    <td class="text-right"></td>
                                    <th>Terdiri Dari :</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">35</td>
                                    <td class="text-right"></td>
                                    <td>9.1. Penyesuaian Pengalaman (Experience Adjustment)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">36</td>
                                    <td class="text-right"></td>
                                    <td>9.2. Perubahan Asumsi Demografik</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">37</td>
                                    <td class="text-right"></td>
                                    <td>9.3. Perubahan Asumsi Keuangan</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">38</td>
                                    <td class="text-right"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">39</td>
                                    <td class="text-right">1</td>
                                    <td>Pembayaran Imbalan Kerja - Perkiraan</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">40</td>
                                    <td class="text-right">2</td>
                                    <td>Pembayaran Imbalan Kerja - Aktual</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">41</td>
                                    <td class="text-right">3</td>
                                    <th>(Keuntungan) Kerugian Aktuaria - Pembayaran Imbalan Kerja</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">42</td>
                                    <td class="text-right"></td>
                                    <th></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">43</td>
                                    <td class="text-right">1</td>
                                    <td>Nilai Wajar Aset Program pada awal periode</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">44</td>
                                    <td class="text-right">2</td>
                                    <td>Hasil yang diharapkan dari aset program</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">45</td>
                                    <td class="text-right">3</td>
                                    <td>Iuran Perusahaan</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">46</td>
                                    <td class="text-right">4</td>
                                    <td>Pembayaran imbalan kerja (yang didanai)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">47</td>
                                    <td class="text-right">5</td>
                                    <td>Nilai Wajar Aset Program pada akhir periode - Perkiraan</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">48</td>
                                    <td class="text-right">6</td>
                                    <td>Nilai Wajar Aset Program pada akhir periode - Aktual</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">49</td>
                                    <td class="text-right">7</td>
                                    <th>(Keuntungan) Kerugian Aktuaria - Aset Program</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">50</td>
                                    <td class="text-right"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">51</td>
                                    <td colspan="2">PERHITUNGAN KEUNTUNGAN (KERUGIAN) AKTUARIA YANG DIAKUI</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">52</td>
                                    <td colspan="2">PADA PENDAPATAN KOMPREHENSIF LAIN</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">53</td>
                                    <td class="text-right">1</td>
                                    <td>Keuntungan (Kerugian) Aktuaria yang belum diakui pada periode lalu</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">54</td>
                                    <td class="text-right">2</td>
                                    <td>(Keuntungan) Kerugian Aktuaria - Kewajiban</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">55</td>
                                    <td class="text-right">3</td>
                                    <td>(Keuntungan) Kerugian Aktuaria - Pembayaran Imbalan Kerja</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">56</td>
                                    <td class="text-right">4</td>
                                    <td>(Keuntungan) Kerugian Aktuaria - Aset Program</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">57</td>
                                    <td class="text-right">5</td>
                                    <th>Total (Keuntungan) Kerugian Aktuaria Periode Berjalan</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">58</td>
                                    <td class="text-right">6</td>
                                    <th>Pendapatan Komprehensif Lain (OCI)</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">59</td>
                                    <td class="text-right"></td>
                                    <th></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">60</td>
                                    <th colspan="2">LIABILITAS (ASET) BERSIH YANG DIAKUI DALAM LAPORAN NERACA</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">61</td>
                                    <td class="text-right">1</td>
                                    <td>Nilai Kini Kewajiban Pada Akhir Periode</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">62</td>
                                    <td class="text-right">2</td>
                                    <td>Nilai Wajar Aset Program Pada Akhir periode</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">63</td>
                                    <td class="text-right">3</td>
                                    <td>Dampak Pembatasan Aset</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">64</td>
                                    <td class="text-right">4</td>
                                    <th>Liabilitas (Aset) Bersih yang diakui dalam Laporan Neraca</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">65</td>
                                    <td class="text-right"></td>
                                    <th></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">67</td>
                                    <th colspan="2">BEBAN (PENDAPATAN) BERSIH YANG DIAKUI DALAM LAPORAN LABA (RUGI)</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">68</td>
                                    <td class="text-right">1</td>
                                    <td>Biaya Jasa (Biaya Jasa Kini + Biaya Jasa Lalu)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">69</td>
                                    <td class="text-right">2</td>
                                    <td>Bunga Netto Atas Liabilitas (Aset)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">70</td>
                                    <td class="text-right">3</td>
                                    <td>(Keuntungan) Kerugian aktuaria yang diakui - Penyelesaian</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">71</td>
                                    <td class="text-right">4</td>
                                    <th>Beban (Pendapatan) Bersih yang diakui dalam Laporan Laba (Rugi)</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">72</td>
                                    <td class="text-right"></td>
                                    <th></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">73</td>
                                    <th colspan="2">REKONSILIASI LIABILITAS (ASET) BERSIH YANG DIAKUI DALAM LAPORAN NERACA</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">71</td>
                                    <td class="text-right">1</td>
                                    <th>Liabilitas (Aset) Bersih Awal Periode</th>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">72</td>
                                    <td class="text-right">2</td>
                                    <td>Transfer Kewajiban Masuk/(Keluar)</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">73</td>
                                    <td class="text-right">3</td>
                                    <td>Beban (Pendapatan) Periode Berjalan</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">74</td>
                                    <td class="text-right">4</td>
                                    <td>Realisasi Pembayaran Imbalan Kerja</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">75</td>
                                    <td class="text-right">5</td>
                                    <td>Iuran Perusahaan</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">76</td>
                                    <td class="text-right">6</td>
                                    <td>Pendapatan Komprehensif Lain (OCI)</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">77</td>
                                    <td class="text-right">7</td>
                                    <th>Liabilitas (Aset) Bersih Akhir Periode</th>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">78</td>
                                    <td class="text-right"></td>
                                    <td></td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">79</td>
                                    <th colspan="2">REKONSILIASI PENDAPATAN KOMPREHENSIF LAIN (OCI)</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">80</td>
                                    <td class="text-right">1</td>
                                    <td>Pendapatan Komprehensif Lain Awal Periode</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">81</td>
                                    <td class="text-right">2</td>
                                    <td>Pendapatan Komprehensif Lain Periode Berjalan</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right">82</td>
                                    <td class="text-right">3</td>
                                    <td>Pendapatan Komprehensif Lain Akhir Periode</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">83</td>
                                    <th colspan="2">ANALISA SENSITIVITAS</th>
                                    <td>Nilai Kini Kewajiban</td>
                                </tr>
                                <tr>
                                    <td class="text-right">84</td>
                                    <td class="text-right">1</td>
                                    <td>Tingkat Diskonto</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">85</td>
                                    <td class="text-right">2</td>
                                    <td>Naik 1 %</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">86</td>
                                    <td class="text-right">3</td>
                                    <td>Turun 1%</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">87</td>
                                    <td class="text-right">1</td>
                                    <td>Tingkat Kenaikan Gaji</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">88</td>
                                    <td class="text-right">2</td>
                                    <td>Naik 1%</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">89</td>
                                    <td class="text-right">3</td>
                                    <td>Turun 1%</td>
                                    <td></td>
                                </tr>
                                <tr><td colspan="4"></td></tr>
                                <tr>
                                    <td class="text-right">90</td>
                                    <th colspan="2">PERKIRAAN ANALISIS JATUH TEMPO ATAS IMBALAN PASTI TERDISKONTO	</th>
                                    <th>Jatuh Tempo Kewajiban Manfaat Pasti </th>
                                </tr>
                                <tr>
                                    <td class="text-right">91</td>
                                    <td class="text-right">1</td>
                                    <td>MBO ≤ 1 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">92</td>
                                    <td class="text-right">2</td>
                                    <td> 1 < MBO ≤ 2 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">93</td>
                                    <td class="text-right">3</td>
                                    <td> 2 < MBO ≤ 3 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">94</td>
                                    <td class="text-right">4</td>
                                    <td> 3 < MBO ≤ 4 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">95</td>
                                    <td class="text-right">5</td>
                                    <td> 4 < MBO ≤ 5 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">96</td>
                                    <td class="text-right">6</td>
                                    <td> 5 < MBO ≤ 10 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">97</td>
                                    <td class="text-right">7</td>
                                    <td> 10 < MBO ≤ 15 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">98</td>
                                    <td class="text-right">8</td>
                                    <td> 15 < MBO ≤ 20 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">99</td>
                                    <td class="text-right">9</td>
                                    <td>MBO > 20 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">100</td>
                                    <td class="text-right">10</td>
                                    <th>Total</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">101</td>
                                    <th colspan="2">PERKIRAAN ANALISIS JATUH TEMPO ATAS IMBALAN PASTI TIDAK TERDISKONTO	</th>
                                    <th>Jatuh Tempo Kewajiban Manfaat Pasti </th>
                                </tr>
                                <tr>
                                    <td class="text-right">102</td>
                                    <td class="text-right">1</td>
                                    <td>MBO ≤ 1 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">103</td>
                                    <td class="text-right">2</td>
                                    <td> 1 < MBO ≤ 2 Thn</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">104</td>
                                    <td class="text-right">3</td>
                                    <td> 2 < MBO ≤ 3 Thn</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">105</td>
                                    <td class="text-right">4</td>
                                    <td> 3 < MBO ≤ 4 Thn</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">106</td>
                                    <td class="text-right">5</td>
                                    <td> 4 < MBO ≤ 5 Thn</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">107</td>
                                    <td class="text-right">6</td>
                                    <td> 5 < MBO ≤ 10 Thn</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">108</td>
                                    <td class="text-right">7</td>
                                    <td> 10 < MBO ≤ 15 Thn</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">109</td>
                                    <td class="text-right">8</td>
                                    <td> 15 < MBO ≤ 20 Thn</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">110</td>
                                    <td class="text-right">9</td>
                                    <td>MBO > 20 Thn</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">111</td>
                                    <td class="text-right">10</td>
                                    <th>Total</th>
                                    <td></td>
                                </tr>
                                <tr><td colspan="4"></td></tr>
                                <tr>
                                    <td class="text-right">112</td>
                                    <td colspan="2">Durasi Rata-Rata Tertimbang Atas Imbalan Pasti Adalah Sebesar</td>
                                    <td></td>
                                </tr>
                                <tr><td colspan="4"></td></tr>
                                <tr>
                                    <td class="text-right">113</td>
                                    <td colspan="2">Rumus Manfaat Sesuai UUTK No.13 Tahun 2003</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">114</td>
                                    <td class="text-right">1</td>
                                    <td>Pensiun Normal</td>
                                    <td>= {(2xUP + 1xUPMK)} + 15% UPH</td>
                                </tr>
                                <tr>
                                    <td class="text-right">115</td>
                                    <td class="text-right">2</td>
                                    <td>Pensiun Meninggal Dunia</td>
                                    <td>= {(2xUP + 1xUPMK)} + 15% UPH</td>
                                </tr>
                                <tr>
                                    <td class="text-right">116</td>
                                    <td class="text-right">3</td>
                                    <td>Pensiun Cacat (Sakit Berkepanjangan)</td>
                                    <td>= {(2xUP + 2xUPMK)} + 15% UPH</td>
                                </tr>
                                <tr>
                                    <td class="text-right">117</td>
                                    <td class="text-right">4</td>
                                    <td>Mengundurkan Diri</td>
                                    <td>= 15% UPH atau 15% x (1xUP + 1xUPMK)</td>
                                </tr>
                                <tr><td colspan="4"></td></tr>
                                <tr>
                                    <td class="text-right">118</td>
                                    <td colspan="2">Rumus Manfaat Sesuai UUCK No.11 Tahun 2020 & PP No.35 Tahun 2021</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right">119</td>
                                    <td class="text-right">1</td>
                                    <td>Pensiun Normal</td>
                                    <td>= {(1.75xUP + 1xUPMK) + UPH</td>
                                </tr>
                                <tr>
                                    <td class="text-right">120</td>
                                    <td class="text-right">2</td>
                                    <td>Pensiun Meninggal Dunia</td>
                                    <td>= {(2xUP + 1xUPMK) + UPH</td>
                                </tr>
                                <tr>
                                    <td class="text-right">121</td>
                                    <td class="text-right">3</td>
                                    <td>Pensiun Cacat</td>
                                    <td>= {(2xUP + 1xUPMK) + UPH</td>
                                </tr>
                                <tr>
                                    <td class="text-right">122</td>
                                    <td class="text-right">4</td>
                                    <td>Mengundurkan Diri</td>
                                    <td>= UPH</td>
                                </tr>
                                <tr>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <td class="text-right"></td>
                                    <th class="text-right" colspan="3">Dimana</th>
                                </tr>
                                <tr>
                                    <td class="text-right"></td>
                                    <td class="text-right">UP</td>
                                    <td>= Uang pesangon</td>
                                </tr>
                                <tr>
                                    <td class="text-right"></td>
                                    <td class="text-right">UPMK</td>
                                    <td>= Uang Penghargaan Masa Kerja</td>
                                </tr>
                                <tr>
                                    <td class="text-right"></td>
                                    <td class="text-right">UPH</td>
                                    <td>= Uang Penggantian Hak</td>
                                </tr>
                            </table>
                            <p>Uang penggantian hak yang seharusnya diterima sebagaimana diatur dalam PP No.35 Tahun 2021 meliputi</p>
                            <p>
                                a. cuti tahunan yang belum diambil dan belum gugur<br />
                                b. biaya atau ongkos pulang untuk Pekerja/Buruh dan keluarganya ke tempat dimana Pekerja/Buruh diterima bekerja; dan<br />
                                c. hal-hal lain yang ditetapkan dalam Perjanjian Kerja, Peraturan Perusahaan, atau Perjanjian Kerja Bersama.
                            </p>
                        </div>
                        <div class="tab-pane" id="rincian" aria-labelledby="rincian-tab" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table_custome">
                                    <thead class="table-light">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nomor Induk</th>
                                            <th rowspan="2">Nama</th>
                                            <th rowspan="2"></th>
                                            <th rowspan="2">Tanggal Lahir</th>
                                            <th rowspan="2">Tanggal Masuk</th>
                                            <th rowspan="2">Upah</th>
                                            <th rowspan="2">Tanggal Pensiun</th>
                                            <th colspan="2" class="text-center">Age</th>
                                            <th rowspan="2" class="text-center">Past Years of Service</th>
                                            <th rowspan="2" class="text-center">Future Years of Service</th>
                                            <th rowspan="2" class="text-center">Total Years of Service</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Entry</th>
                                            <th class="text-center">Valuation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php($num=$data_psak->firstItem())
                                    @foreach($data_psak as $k => $item)
                                        <tr>
                                            <td>{{$num}}</td>
                                            <td>{{isset($item->employee->nomor_induk) ? $item->employee->nomor_induk : ''}}</td>
                                            <td><a href="{{route('psak.detail-employee',['data'=>$item->id])}}">{{isset($item->employee->name) ? $item->employee->name : ''}}</a></td>
                                            <td class="text-center">{{isset($item->employee->sex) ? $item->employee->sex : ''}}</td>
                                            <td>{{isset($item->employee->date_of_birth) ? date('d-M-Y',strtotime($item->employee->date_of_birth)) : ''}}</td>
                                            <td>{{isset($item->employee->date_of_entry) ? date('d-M-Y',strtotime($item->employee->date_of_entry)) : ''}}</td>
                                            <td>{{format_idr($item->wage)}}</td>
                                            <td>{{date('d-M-Y',strtotime($item->tanggal_pensiun))}}</td>
                                            <td class="text-center">{{$item->age_entry}}</td>
                                            <td class="text-center">{{$item->age_valuation}}</td>
                                            <td class="text-center">{{$item->past_years_of_service}}</td>
                                            <td class="text-center">{{$item->future_years_of_service}}</td>
                                            <td class="text-center">{{$item->total_years_of_service}}</td>
                                        </tr>
                                        @php($num++)
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{$data_psak->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-start" wire:ignore.self id="modal_start_calculate" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <form>
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="spinner-border" style="margin:auto;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div>sedang menghitung harap tunggu...</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('after-scripts')
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        var pusher = new Pusher('2eadb5e606c110510728', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            // alert(JSON.stringify(data));
            console.log(data);
        });
    </script>
@endpush
