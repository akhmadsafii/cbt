<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasnilai extends CI_Controller { public function __construct() { goto Eakl5; PSWIR: goto gMy4A; goto wpmHG; ESnxC: $this->load->library(["\144\x61\164\x61\x74\x61\142\154\x65\163", "\x66\x6f\162\155\137\x76\x61\x6c\x69\144\x61\x74\x69\157\x6e"]); goto Jifi2; XIBlm: redirect("\141\165\x74\x68"); goto C5PlW; Eakl5: parent::__construct(); goto yVe2b; wpmHG: eXDDq: goto XIBlm; ozpdB: $this->load->model("\113\x65\154\141\163\137\x6d\157\x64\x65\154", "\x6b\145\x6c\141\163"); goto NlnyS; i4Jdv: oC7sM: goto PSWIR; ANUEQ: $this->load->model("\104\162\157\160\x64\157\x77\x6e\137\x6d\157\x64\145\x6c", "\x64\162\x6f\x70\x64\157\x77\x6e"); goto ozpdB; NlnyS: $this->form_validation->set_error_delimiters('', ''); goto zPd2n; Jifi2: $this->load->model("\x4d\141\x73\164\x65\162\137\x6d\157\x64\145\154", "\x6d\141\x73\x74\145\x72"); goto ZJzoY; C5PlW: gMy4A: goto ESnxC; uEAGo: show_error("\x48\141\156\x79\x61\40\x41\x64\x6d\x69\156\x69\163\x74\x72\x61\164\x6f\162\x20\171\141\156\147\40\x64\151\142\145\x72\151\x20\x68\141\x6b\40\x75\x6e\164\x75\153\x20\x6d\145\x6e\147\141\x6b\163\145\x73\x20\150\141\x6c\141\155\141\156\x20\x69\156\151\x2c\x20\x3c\x61\x20\150\x72\145\146\75\42" . base_url("\x64\141\163\x68\x62\157\141\x72\x64") . "\42\76\x4b\145\155\142\141\x6c\x69\40\x6b\x65\40\155\145\156\x75\x20\141\x77\141\154\x3c\57\141\76", 403, "\101\x6b\163\145\x73\x20\124\x65\x72\154\141\x72\x61\x6e\147"); goto i4Jdv; yVe2b: if (!$this->ion_auth->logged_in()) { goto eXDDq; } goto F8Oc5; F8Oc5: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\x75"))) { goto oC7sM; } goto uEAGo; ZJzoY: $this->load->model("\104\x61\163\150\x62\157\141\162\x64\x5f\x6d\157\x64\x65\x6c", "\x64\x61\163\150\x62\x6f\x61\162\144"); goto ANUEQ; zPd2n: } public function output_json($data, $encode = true) { goto drSsd; T_PpC: $data = json_encode($data); goto FSXgd; drSsd: if (!$encode) { goto qOmXU; } goto T_PpC; rX7Cy: $this->output->set_content_type("\141\x70\x70\x6c\x69\x63\141\x74\x69\x6f\x6e\x2f\x6a\163\x6f\156")->set_output($data); goto vQW__; FSXgd: qOmXU: goto rX7Cy; vQW__: } public function index() { goto T72On; zK9Rm: $this->load->view("\x6d\145\x6d\142\145\x72\x73\x2f\147\165\162\x75\x2f\164\x65\155\x70\154\141\164\145\163\x2f\150\145\x61\144\145\162", $data); goto vT0US; LDbqp: Fghu6: goto VueK5; M2rjP: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto gikRw; VueK5: $data["\x70\162\157\146\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto SADpe; vT0US: $this->load->view("\153\x65\154\x61\163\57\x6e\x69\154\x61\x69\57\144\141\164\141"); goto KSv0x; fzV2Z: $data["\153\145\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto eSB4V; cOdb0: $tp = $this->dashboard->getTahunActive(); goto T60cm; sgCol: auQ2s: goto YY6Z4; sVC32: $data["\141\x72\162\x6b\x65\x6c\x61\x73"] = $arrKelas; goto OPoXP; RSHok: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto vRA3R; vRA3R: $data["\x73\x6d\164\137\141\143\x74\151\166\145"] = $smt; goto gnyMD; uOOSz: $data["\x74\160"] = $this->dashboard->getTahun(); goto NcW_E; YJwWg: $data["\x67\165\162\165"] = $guru; goto QGdZr; M3IYY: $this->load->view("\153\145\x6c\x61\x73\x2f\x6e\151\154\x61\x69\57\144\141\x74\x61"); goto lu07H; zuayz: NR9eQ: goto jZVz_; gaXLE: $nguru[$guru->id_guru] = $guru->nama_guru; goto YJwWg; VX5kT: if (!($mapel != null)) { goto auQ2s; } goto pG2W9; LZGCo: goto x9vxY; goto LDbqp; YY6Z4: $arrId = []; goto YzkpD; eTk3X: x9vxY: goto St8nw; SrjC3: $data = ["\x75\x73\x65\162" => $user, "\x6a\165\144\165\x6c" => "\123\164\141\x74\x75\x73\x20\x53\x69\163\x77\141", "\x73\165\x62\152\x75\x64\x75\154" => "\x44\141\164\x61\x20\x53\x74\141\x74\x75\x73\x20\123\x69\163\x77\x61", "\163\145\x74\x74\x69\156\147" => $this->dashboard->getSetting()]; goto cOdb0; lu07H: $this->load->view("\x5f\x74\145\155\160\x6c\141\164\x65\163\57\x64\141\163\x68\x62\157\x61\162\144\57\x5f\x66\157\157\164\145\162"); goto eTk3X; PA9kA: $arrKelas = []; goto VX5kT; OPoXP: $data["\x6b\145\154\x61\x73"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : []; goto zK9Rm; gnyMD: if ($this->ion_auth->is_admin()) { goto Fghu6; } goto BC1tq; PbgkH: $data["\x6d\x61\160\145\x6c"] = $arrMapel; goto sVC32; QGdZr: $data["\x69\x64\137\x67\x75\x72\165"] = $guru->id_guru; goto xbdEI; jZVz_: stPPY: goto PbgkH; gikRw: $arrMapel = []; goto PA9kA; YzkpD: if (!($mapel != null)) { goto stPPY; } goto bRFsI; pG2W9: foreach ($mapel as $m) { goto h7D4w; h7D4w: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto uywm2; SjJgs: zqUjT: goto ulPZz; uywm2: foreach ($m->kelas_mapel as $kls) { $arrKelas[$m->id_mapel][] = ["\x69\x64\137\x6b\145\154\x61\163" => $kls->kelas, "\156\x61\x6d\x61\137\153\145\154\x61\x73" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)]; ZpLdT: } goto SjJgs; ulPZz: Dm81_: goto w7qHh; w7qHh: } goto HVLst; T60cm: $smt = $this->dashboard->getSemesterActive(); goto uOOSz; NcW_E: $data["\x74\x70\137\x61\x63\164\x69\166\145"] = $tp; goto RSHok; HVLst: lncCe: goto sgCol; bRFsI: foreach ($mapel[0]->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); rGBx3: } goto zuayz; SADpe: $data["\x6d\x61\160\145\154"] = $this->dropdown->getAllMapel(); goto fzV2Z; BC1tq: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto gaXLE; xbdEI: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto M2rjP; KSv0x: $this->load->view("\x6d\x65\x6d\x62\x65\162\x73\57\x67\x75\x72\x75\x2f\164\x65\155\160\154\x61\164\x65\163\57\x66\157\x6f\164\145\162"); goto LZGCo; eSB4V: $this->load->view("\x5f\164\x65\x6d\160\154\141\x74\145\x73\57\144\141\x73\150\142\157\x61\x72\144\57\x5f\x68\x65\141\x64\145\x72", $data); goto M3IYY; T72On: $user = $this->ion_auth->user()->row(); goto SrjC3; St8nw: } public function loadNilaiMapel() { goto l7_lm; vspEV: $this->output_json($data); goto Y2oYC; uc2ZX: $jadwal_per_bulan = []; goto mfmw9; bLZNd: $tahun = $this->input->get("\164\141\150\x75\156"); goto lYO_P; hUGuj: $namaHari = ["\x4d\151\156\x67\147\x75", "\x53\x65\156\151\x6e", "\123\x65\x6c\x61\x73\141", "\122\x61\x62\165", "\x4b\141\x6d\151\x73", "\x4a\165\x6d\141\x74", "\x53\141\142\164\165"]; goto NzFSx; lvzq3: if ($smt == "\61") { goto K75vY; } goto OSV8b; wYrFa: foreach ($arrBulan as $bulan) { goto tKlsC; NJkMm: cGl8C: goto B3uJI; tKlsC: foreach ($infos as $info) { goto u9Y0f; u9Y0f: $jadwal_per_bulan[$info->id_hari][$info->jam_ke] = $info; goto MYOux; ecXhZ: j2VJn: goto YVod2; MYOux: $dates = $this->total_hari($info->id_hari, $bulan, $stahun); goto w21dz; w21dz: $mtr = null; goto d_oP1; d_oP1: $tgs = null; goto erY8A; erY8A: foreach ($dates as $date) { goto XGqrN; D122D: $t = $d[2]; goto FEAZC; bywvk: $jadwal_materi[$b][$t][$info->jam_ke][2] = $tgs; goto D0na1; Khq5Y: $jadwal_materi[$b][$t][$info->jam_ke][1] = $mtr; goto bywvk; XGqrN: $d = explode("\55", $date); goto kXRcO; wnOFW: $mtr = isset($jj[$mapel]) && isset($jj[$mapel][$info->jam_ke]) && isset($jj[$mapel][$info->jam_ke][1]) ? $jj[$mapel][$info->jam_ke][1] : null; goto b8V76; D0na1: $cols++; goto bo_bv; FEAZC: $jj = $this->kelas->getAllMateriByTgl($kelas, $date, [$mapel]); goto wnOFW; kXRcO: $b = $d[1]; goto D122D; b8V76: $tgs = isset($jj[$mapel]) && isset($jj[$mapel][$info->jam_ke]) && isset($jj[$mapel][$info->jam_ke][2]) ? $jj[$mapel][$info->jam_ke][2] : null; goto Khq5Y; bo_bv: VeAE7: goto O2V2V; O2V2V: } goto t84bi; t84bi: zdiRk: goto ecXhZ; YVod2: } goto NJkMm; B3uJI: hUfTZ: goto OHJMh; OHJMh: } goto uNTU0; mfmw9: $jadwal_materi = []; goto h3xWg; p5KSk: $siswa = $this->kelas->getKelasSiswa($kelas, $tahun, $smt); goto lvzq3; uNTU0: PBk4p: goto lvG2n; oxXEo: $arrBulan = ["\60\67", "\60\70", "\60\x39", "\61\60", "\61\61", "\x31\x32"]; goto P_Me0; s56yx: $log_siswa = $this->kelas->getRekapMateriSemester(); goto uc2ZX; JLx2i: goto oOsP0; goto mRG21; SVpWA: $data["\x6d\141\x70\x65\x6c\x73"] = []; goto uBcaB; B4uyG: XkhfC: goto E6P9U; OSV8b: $arrBulan = ["\x30\61", "\x30\62", "\60\x33", "\x30\x34", "\60\65", "\60\x36"]; goto JLx2i; lYO_P: $smt = $this->input->get("\x73\x6d\164"); goto RSp1A; l7_lm: $kelas = $this->input->get("\x6b\x65\x6c\x61\163"); goto XQMC4; uBcaB: goto joFrI; goto B4uyG; UKLha: YWu84: goto LKqF4; XQMC4: $mapel = $this->input->get("\x6d\x61\160\x65\x6c"); goto bLZNd; HLqhI: $namaBulan = ['', "\x4a\141\x6e\x75\141\162\151", "\x46\145\142\x72\x75\x61\x72\x69", "\115\141\162\145\164", "\101\160\162\x69\154", "\x4d\145\x69", "\x4a\165\x6e\x69", "\112\x75\154\x69", "\x41\x67\165\x73\164\165\x73", "\x53\145\160\164\145\155\x62\145\162", "\x4f\153\164\x6f\x62\145\162", "\116\157\x70\x65\x6d\142\145\162", "\x44\145\163\x65\155\142\145\x72"]; goto hUGuj; NzFSx: $infos = $this->kelas->getJadwalMapelByMapel($kelas, $mapel, $tahun, $smt); goto s56yx; h3xWg: $log_materi = []; goto QY6R8; EZZgt: if (count($siswa) > 0 && count($jadwal_per_bulan) > 0) { goto XkhfC; } goto SVpWA; lvG2n: $log = []; goto EZZgt; RSp1A: $stahun = $this->input->get("\x73\164\141\x68\165\x6e"); goto p5KSk; QY6R8: $cols = 0; goto wYrFa; gwWND: joFrI: goto vspEV; E6P9U: foreach ($siswa as $s) { $log[$s->id_siswa] = ["\x6e\x61\155\141" => $s->nama, "\156\151\163" => $s->nis, "\x6b\x65\154\x61\163" => $s->nama_kelas, "\156\x69\x6c\x61\151\x5f\x6d\141\164\145\162\151" => isset($log_siswa[1][$s->id_siswa]) ? $log_siswa[1][$s->id_siswa] : [], "\x6e\151\154\141\x69\137\164\165\x67\x61\x73" => isset($log_siswa[2][$s->id_siswa]) ? $log_siswa[2][$s->id_siswa] : []]; hAus1: } goto UKLha; LKqF4: $data = ["\x6c\157\147" => $log, "\x6d\x61\164\x65\x72\151" => $jadwal_materi, "\x62\x75\154\x61\x6e\x73" => $arrBulan, "\x6d\x61\x70\145\154\x73" => $jadwal_per_bulan, "\156\x69\154\141\x69" => $log_siswa, "\x63\x6f\154\x73" => $cols]; goto gwWND; P_Me0: oOsP0: goto HLqhI; mRG21: K75vY: goto oxXEo; Y2oYC: } function total_hari($id_day, $bulan, $taun) { goto Wo1SR; SaZjy: ud6GN: goto Ucqu6; ZVH8D: h0U5E: goto DqAqK; Adly3: goto h0U5E; goto SaZjy; DqAqK: if (!($i < $total_days)) { goto ud6GN; } goto fDN1L; Ucqu6: return $dates; goto WrMFY; U3KAK: $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun); goto UponO; HCMav: gjQUC: goto Zv5nJ; UponO: $idday = $id_day == "\x37" ? 0 : $id_day; goto dSu4y; Wo1SR: $days = 0; goto ulVkh; Zv5nJ: jubYz: goto Iw3D9; ulVkh: $dates = []; goto U3KAK; dSu4y: $i = 1; goto ZVH8D; Iw3D9: $i++; goto Adly3; CpgUU: $days++; goto YNUuu; fDN1L: if (!(date("\x4e", strtotime($taun . "\55" . $bulan . "\55" . $i)) == $idday)) { goto gjQUC; } goto CpgUU; YNUuu: array_push($dates, date("\131\55\155\55\x64", strtotime($taun . "\x2d" . $bulan . "\x2d" . $i))); goto HCMav; WrMFY: } }
