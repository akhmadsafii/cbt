<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\105\x50\101\124\110") or exit("\116\x6f\x20\x64\x69\162\x65\143\x74\40\x73\x63\162\x69\x70\164\40\x61\x63\x63\145\x73\x73\40\141\x6c\x6c\157\167\x65\144"); class Install extends CI_Controller { function __construct() { goto CJ2Ij; pHjle: if (!($db["\x64\145\146\141\x75\x6c\x74"]["\x64\141\164\x61\142\x61\x73\x65"] != '')) { goto N_ohl; } goto PiTkB; dzvoq: include APPPATH . "\143\x6f\156\146\151\x67\57\144\141\164\141\142\x61\163\145\56\x70\150\x70"; goto pHjle; Giqtg: $this->load->model("\104\x61\x73\150\x62\x6f\x61\162\144\x5f\x6d\157\144\x65\154", "\x64\x61\x73\150\x62\x6f\141\162\144"); goto xHt1e; PiTkB: $this->load->database(); goto xHR5h; MKzEo: N_ohl: goto zwUUP; xHR5h: $this->load->dbforge(); goto MKzEo; zwUUP: $this->load->model("\111\156\163\164\141\x6c\x6c\x5f\x6d\x6f\x64\x65\154", "\x69\156\163\164\x61\x6c\154"); goto Giqtg; CJ2Ij: parent::__construct(); goto dzvoq; xHt1e: } public function output_json($data, $encode = true) { goto AIGlf; RL1JR: $this->output->set_content_type("\141\x70\x70\154\151\143\x61\x74\x69\157\156\57\x6a\163\x6f\156")->set_output($data); goto k4Ip0; pzccN: YE4AY: goto RL1JR; AIGlf: if (!$encode) { goto YE4AY; } goto VFPSO; VFPSO: $data = json_encode($data); goto pzccN; k4Ip0: } public function index() { goto rsB4n; jIFqo: $data["\155\x73\x67"] = "\x73\145\142\x61\147\x69\141\x6e\40\x74\x61\x62\145\154\40\142\145\x6c\165\155\40\144\151\142\x75\141\164"; goto k4tH4; cdcg5: $data["\155\163\x67"] = "\142\145\x6c\x75\155\x20\x61\x64\x61\40\141\144\x6d\151\x6e\x69\x73\x74\162\x61\164\157\x72"; goto TUWNC; LXO5z: goto xvDK1; goto eYMUP; TUWNC: xvDK1: goto W3Ia_; eYMUP: JZkJP: goto jIFqo; ZECVI: l_DB1: goto cdcg5; MHm8b: goto xx54S; goto ryoGO; I3Q1o: if ($res == "\63") { goto l_DB1; } goto KC18l; zzqhe: if ($res == "\62") { goto JZkJP; } goto I3Q1o; ryoGO: rsxx1: goto bSrWq; VPGvH: xx54S: goto iPovQ; VmrAf: if ($res == "\60") { goto rsxx1; } goto zzqhe; a2_ad: $this->load->view("\x69\156\x73\164\x61\154\x6c\57\x68\145\141\x64\x65\x72", ["\144\x61\x74\141" => $data]); goto xmt_E; rsB4n: $res = $this->install->check_installer(); goto VmrAf; e89OT: $this->load->view("\x69\x6e\163\x74\141\x6c\154\57\x66\x6f\x6f\x74\x65\162"); goto MHm8b; bSrWq: redirect("\x75\160\144\141\x74\145"); goto VPGvH; xmt_E: $this->load->view("\x69\x6e\x73\x74\141\154\x6c\57\x73\164\145\x70"); goto e89OT; k4tH4: goto xvDK1; goto ZECVI; W3Ia_: $data = $this->getSaved(); goto jm31r; jm31r: $data->error = $res; goto a2_ad; KC18l: $data["\x6d\163\147"] = "\x62\145\x6c\x75\155\40\141\x64\141\40\x64\x61\164\141\x20\x73\x65\153\x6f\x6c\x61\150"; goto LXO5z; iPovQ: } function getSaved() { goto JSM0d; p074T: $current_page = $admin == null ? 2 : ($setting == null ? 3 : 4); goto icA2I; osbKS: $data["\165\163\145\x72\137\141\144\155\151\156"] = ''; goto Y0LjQ; wS4un: $data["\x61\154\141\155\x61\164"] = ''; goto WC5nP; xEPMW: $data["\x64\x65\163\x61"] = $setting->desa; goto P_9wy; Y0LjQ: $data["\160\x61\163\163\x5f\x61\x64\x6d\151\x6e"] = ''; goto jJ7Lo; k2HYI: $data["\x6a\145\x6e\x6a\141\x6e\147"] = ''; goto vO0oa; eWT83: $database = $db["\144\145\146\x61\165\154\x74"]["\144\x61\x74\x61\142\141\163\145"]; goto Ey_2O; CcNhQ: $data["\153\x65\x70\x73\145\x6b"] = $setting->kepsek; goto RX92v; XFfwH: return json_decode(json_encode($data)); goto jCINr; jQ3Jg: $admin = $this->db->get("\x75\163\x65\162\163")->row(); goto AD9P6; z3gLY: $data["\x6b\x6f\164\141"] = $setting->kota; goto Cxojo; egXPB: $data["\x6e\x61\x6d\x61\137\141\144\155\151\x6e"] = $admin->first_name . "\x20" . $admin->last_name; goto x9_dW; WDRPZ: $data["\x6b\x6f\164\x61"] = ''; goto n1G3q; WC5nP: $data["\x64\145\163\x61"] = ''; goto qKQV0; mNemm: JM3yQ: goto YAywW; pCcth: dCT2A: goto p074T; yfTwo: $data["\x75\163\x65\x72\x6e\141\155\x65"] = $db["\x64\145\146\141\x75\154\x74"]["\165\x73\x65\x72\x6e\x61\155\145"]; goto oOA7I; AmoDi: $data["\156\141\x6d\141\x5f\x61\144\x6d\x69\x6e"] = ''; goto osbKS; Emklu: $current_page = 2; goto dD0Zq; Dltyz: $data["\x64\x61\x74\141\x62\x61\x73\145"] = $database; goto AmoDi; lsTLu: lsmPF: goto jQ3Jg; dD0Zq: if ($this->db->table_exists("\x75\163\x65\162\x73")) { goto lsmPF; } goto aB9UX; C1x16: $data["\152\145\x6e\152\x61\x6e\x67"] = $setting->jenjang; goto PTfFs; RX92v: $data["\141\154\141\x6d\141\x74"] = $setting->alamat; goto xEPMW; JSM0d: include APPPATH . "\x63\x6f\156\146\x69\x67\57\x64\x61\164\141\x62\141\163\145\x2e\160\x68\160"; goto eWT83; UbmTk: $data["\153\x65\160\163\145\x6b"] = ''; goto wS4un; qKQV0: $data["\x6b\145\143"] = ''; goto WDRPZ; n1G3q: $data["\x70\162\x6f\166"] = ''; goto Emklu; fFDGP: if (!($setting != null)) { goto dCT2A; } goto tvQiu; v3Ikl: $data["\143\x75\162\162\145\156\164\137\160\141\147\145"] = $current_page; goto XFfwH; icA2I: lz4BZ: goto v3Ikl; Bnn6s: goto lz4BZ; goto lsTLu; Ey_2O: $data["\x68\x6f\x73\164\156\141\x6d\x65"] = $db["\x64\145\x66\141\165\154\164"]["\x68\157\x73\x74\156\141\155\x65"]; goto yfTwo; vO0oa: $data["\x73\141\164\165\141\156"] = ''; goto UbmTk; P_9wy: $data["\x6b\145\x63"] = $setting->kecamatan; goto z3gLY; oOA7I: $data["\x70\141\x73\163\167\157\x72\144"] = $db["\144\x65\x66\141\x75\154\x74"]["\x70\x61\x73\163\x77\x6f\x72\x64"]; goto Dltyz; YAywW: $setting = $this->dashboard->getSetting(); goto fFDGP; x9_dW: $data["\x75\163\145\162\137\141\x64\155\x69\156"] = $admin->username; goto PMtyc; Cxojo: $data["\x70\162\157\x76"] = $setting->provinsi; goto pCcth; tvQiu: $data["\x61\x70\x6c\151\x6b\141\x73\151"] = $setting->nama_aplikasi; goto WI51g; TltND: $data["\x6d\163\147"] = "\x54\x61\142\x6c\145\40\x60\x75\x73\145\162\x73\140\x20\x62\x65\154\x75\155\x20\144\151\142\x75\x61\x74"; goto Bnn6s; PMtyc: $data["\x70\x61\163\x73\137\141\x64\x6d\151\156"] = $admin->password; goto mNemm; WI51g: $data["\163\145\153\157\154\141\x68"] = $setting->sekolah; goto C1x16; PTfFs: $data["\163\141\164\165\x61\156"] = $setting->satuan_pendidikan; goto CcNhQ; AD9P6: if (!($admin != null)) { goto JM3yQ; } goto egXPB; jJ7Lo: $data["\x61\x70\x6c\151\x6b\x61\x73\151"] = ''; goto l0AmU; aB9UX: $current_page = 2; goto TltND; l0AmU: $data["\x73\145\153\x6f\154\x61\150"] = ''; goto k2HYI; jCINr: } public function steps() { goto rQJSW; M3n3v: $this->load->view("\151\156\163\x74\x61\x6c\154\57\146\x6f\x6f\x74\145\162"); goto okJQa; p3yhM: $this->load->view("\151\156\163\164\x61\x6c\154\x2f\x73\164\x65\160"); goto M3n3v; UVZYk: $this->load->view("\x69\x6e\x73\x74\x61\154\154\x2f\x68\145\x61\x64\145\162", ["\x64\141\164\x61" => $data]); goto p3yhM; rQJSW: $data = $this->getSaved(); goto UVZYk; okJQa: } public function checkDatabase() { goto RPpZt; P4cSL: kvEcI: goto QZMrQ; bCkS9: $data["\x64\141\x74\x61\x62\141\x73\145"] = true; goto c3wb9; t0E75: if (is_writable($output_path)) { goto AMdit; } goto Lhxg2; vc4Wi: @chmod($output_path, 0777); goto t0E75; aC1pH: AMdit: goto HaOlm; CLUP6: $template_path = "\x2e\57\141\163\163\x65\x74\163\x2f\x61\x70\160\x2f\x64\x62\57\144\x61\x74\141\x62\141\163\145\56\160\x68\160"; goto GzF29; LmG8b: $hostpass = $this->input->post("\x68\157\163\164\x70\x61\163\x73", true); goto VN5nA; c3wb9: l_1Zs: goto xZiIB; WEH7r: VhSbr: goto YY33X; lhBnE: $data["\150\x6f\x73\x74"] = false; goto cKigc; dDuex: o9Fh1: goto CLUP6; YMG63: $data["\x68\157\x73\x74\x5f\155\163\147"] = "\164\151\x64\x61\153\x20\141\144\x61\x20\x61\x6b\163\x65\x73\x20\153\145\40\x66\x69\x6c\145\x20\x64\x61\x74\141\x62\141\x73\145\56\x70\150\x70\54\x20\160\141\163\x74\151\153\141\x6e\40\160\145\162\155\x69\163\163\x69\157\156\40\x73\165\144\141\x68\40\x64\x69\x7a\x69\156\x6b\141\x6e"; goto MfEvy; HnxLD: $data["\150\157\163\x74"] = false; goto n3yZJ; OJcuv: $data["\x68\x6f\x73\x74\x5f\x6d\163\x67"] = "\142\145\150\141\x73\151\154"; goto WLw13; URpyT: $data["\x68\x6f\163\x74\x5f\x6d\x73\147"] = "\163\x75\x6b\163\145\163"; goto bCkS9; B4uCQ: $database_file = file_get_contents($template_path); goto MKdpI; YY33X: $data["\x68\157\163\164"] = true; goto OJcuv; VN5nA: $database = $this->input->post("\144\141\164\x61\142\141\163\x65", true); goto SIg1x; eVG4J: $new = str_replace("\45\x44\101\x54\101\x42\x41\123\x45\x25", $database, $new); goto hfUkB; Tzn_r: goto kvEcI; goto dDuex; OaNiX: goto l_1Zs; goto WEH7r; xdqh_: $data["\x68\x6f\163\x74"] = true; goto URpyT; GzF29: $output_path = APPPATH . "\x63\157\156\x66\x69\147\x2f\144\141\164\141\142\141\x73\x65\x2e\160\150\160"; goto B4uCQ; n3yZJ: $data["\150\157\x73\164\137\x6d\163\147"] = "\x74\x69\x64\141\x6b\x20\142\157\154\x65\x68\x20\x61\x64\141\40\x79\x61\x6e\147\40\x6b\157\163\x6f\156\x67"; goto Tzn_r; WLw13: $data["\144\141\x74\141\x62\x61\x73\145"] = $this->create_database($hostname, $hostuser, $hostpass, $database); goto cD1Ht; hfUkB: $handle = fopen($output_path, "\167\x2b"); goto vc4Wi; cKigc: $data["\x68\x6f\163\164\x5f\155\163\x67"] = "\x67\141\147\141\154\40\x6d\145\x6d\142\x75\x61\164\x20\156\141\155\141\40\x64\141\164\141\142\141\x73\145"; goto OaNiX; xZiIB: j8yZM: goto P4cSL; RPpZt: $hostname = $this->input->post("\x68\x6f\163\164\x6e\141\x6d\x65", true); goto rYr9B; MfEvy: goto j8yZM; goto aC1pH; MKdpI: $new = str_replace("\45\x48\x4f\123\124\116\x41\115\x45\45", $hostname, $database_file); goto INuQ0; rYr9B: $hostuser = $this->input->post("\150\x6f\x73\164\165\163\x65\x72", true); goto LmG8b; HaOlm: if (fwrite($handle, $new)) { goto VhSbr; } goto lhBnE; cD1Ht: $data["\164\x61\x62\x6c\x65"] = $this->create_tables($hostname, $hostuser, $hostpass, $database); goto xdqh_; QZMrQ: $this->output_json($data); goto QDxjQ; Lhxg2: $data["\150\157\163\164"] = false; goto YMG63; INuQ0: $new = str_replace("\45\x55\123\105\122\x4e\x41\115\x45\45", $hostuser, $new); goto J2ZRu; SIg1x: if ($this->validate_host($hostname, $hostuser, $database)) { goto o9Fh1; } goto HnxLD; J2ZRu: $new = str_replace("\45\120\x41\x53\x53\x57\x4f\x52\x44\45", $hostpass, $new); goto eVG4J; QDxjQ: } public function createDb() { goto gq14Y; Hq9RG: if ($page == "\60") { goto PsH50; } goto Vnwkj; hUMVW: $this->output_json($data); goto HEu_l; ixc1x: $data["\144\141\x74\x61\142\x61\163\x65"] = true; goto iYUef; EAKkj: $data["\150\x6f\x73\164\x5f\155\x73\x67"] = "\163\165\x6b\163\x65\x73"; goto ixc1x; Gtqa7: $data["\164\141\142\154\145"] = $this->create_tables($hostname, $hostuser, $hostpass, $database); goto d298D; aY8rU: $hostpass = $this->input->post("\x68\157\x73\x74\160\x61\x73\x73", true); goto lHjrh; drzK2: PsH50: goto tGJxP; tGJxP: $hostname = $this->input->post("\150\x6f\x73\164\x6e\141\155\x65", true); goto WdBRK; uuz0q: $data["\x64\x61\164\x61\x62\141\x73\x65"] = false; goto T6cpu; iYUef: novqu: goto hUMVW; WdBRK: $hostuser = $this->input->post("\x68\157\163\164\x75\x73\145\x72", true); goto aY8rU; T6cpu: $data["\164\141\x62\x6c\x65"] = false; goto Lpac1; Lpac1: goto novqu; goto drzK2; Vnwkj: $data["\150\x6f\163\x74"] = true; goto JmcHG; lHjrh: $database = $this->input->post("\144\x61\x74\x61\142\x61\163\145", true); goto Gtqa7; gq14Y: $page = $this->input->post("\x70\x61\x67\145", true); goto Hq9RG; JmcHG: $data["\x68\157\x73\x74\137\155\x73\x67"] = "\163\x74\x65\160\40\x73\141\154\x61\x68"; goto uuz0q; d298D: $data["\x68\157\163\x74"] = true; goto EAKkj; HEu_l: } function validate_host($host, $usr, $db) { return !empty($host) && !empty($usr) && !empty($db); } function create_database($hostname, $hostuser, $hostpass, $database) { goto Yweak; Zn9Bt: if (!mysqli_connect_errno()) { goto xDm2U; } goto lgOZV; QXsJU: return true; goto jw6zX; TcKjE: $mysqli->query("\x43\x52\105\101\x54\105\40\x44\101\124\x41\102\x41\x53\x45\40\111\x46\40\116\117\x54\x20\x45\x58\x49\123\124\x53\x20" . $database); goto oHZma; Fq2C2: xDm2U: goto TcKjE; lgOZV: return false; goto Fq2C2; Yweak: $mysqli = new mysqli($hostname, $hostuser, $hostpass, ''); goto Zn9Bt; oHZma: $mysqli->close(); goto QXsJU; jw6zX: } function create_tables($hostname, $hostuser, $hostpass, $database) { goto WY5qO; G1Y72: if (!mysqli_connect_errno()) { goto UNecA; } goto k155o; WPJ_Y: UNecA: goto J1AG0; WY5qO: $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database); goto G1Y72; k155o: return false; goto WPJ_Y; CKr7k: return true; goto kqCSQ; zzkPS: $mysqli->multi_query($query); goto y16gF; J1AG0: $query = file_get_contents("\56\x2f\141\163\163\145\x74\163\x2f\x61\160\x70\57\x64\142\x2f\155\x61\x73\164\x65\162\56\163\161\x6c"); goto zzkPS; y16gF: $mysqli->close(); goto CKr7k; kqCSQ: } public function createSetting() { goto TDARo; utCzf: $data["\x73\141\166\145\144"] = $this->getSaved(); goto a5Qva; k9LBN: $desa = $this->input->post("\144\145\x73\x61", true); goto RRwKg; pdjL2: $sekolah = $this->input->post("\x6e\x61\155\141\x5f\163\145\x6b\157\154\x61\150", true); goto wpCi_; mTtZ5: $kec = $this->input->post("\153\145\143", true); goto k9LBN; CPL4F: $insert = ["\x69\x64\137\x73\x65\x74\164\x69\x6e\147" => 1, "\x73\145\153\157\154\141\x68" => $sekolah, "\152\145\156\x6a\x61\156\147" => $jenjang, "\163\x61\164\x75\x61\x6e\x5f\160\145\156\144\x69\x64\151\153\x61\156" => $satuan_pendidikan, "\x61\x6c\141\x6d\141\164" => $alamat, "\144\x65\163\x61" => $desa, "\x6b\157\164\141" => $kota, "\153\x65\x63\x61\155\x61\x74\141\156" => $kec, "\164\x65\154\160" => $tlp, "\x6b\145\160\163\145\x6b" => $kepsek, "\x6e\x61\155\x61\x5f\x61\160\154\151\153\141\163\x69" => $nama_aplikasi]; goto npVwu; TDARo: $nama_aplikasi = $this->input->post("\156\141\155\x61\x5f\x61\160\x6c\151\153\x61\x73\x69", true); goto pdjL2; XhAvF: $kota = $this->input->post("\153\157\164\x61", true); goto mTtZ5; npVwu: $data["\x69\x6e\x73\x65\162\x74"] = $this->db->insert("\163\x65\164\x74\151\x6e\x67", $insert); goto utCzf; wpCi_: $jenjang = $this->input->post("\152\x65\156\x6a\141\156\147", true); goto yAkSm; zqOix: $alamat = $this->input->post("\x61\154\x61\155\141\164", true); goto XhAvF; a5Qva: $this->output_json($data); goto z_L11; RRwKg: $tlp = $this->input->post("\164\154\160", true); goto CPL4F; AAvh3: $kepsek = $this->input->post("\153\145\x70\163\x65\153", true); goto zqOix; yAkSm: $satuan_pendidikan = $this->input->post("\x73\141\x74\165\141\x6e\137\160\145\x6e\144\x69\x64\151\x6b\141\x6e", true); goto AAvh3; z_L11: } public function createAdmin() { goto IXQfA; ekgKr: $email = strtolower($nama) . "\x40\141\x64\x6d\151\x6e\56\x63\x6f\x6d"; goto N1hId; N1hId: $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto QDRP5; Kne69: $this->output_json($data); goto seiSo; gHI_l: $group = array("\61"); goto ekgKr; bLJdP: $password = $this->input->post("\160\141\x73\163\x77\x6f\x72\144", true); goto gAMkY; uYqnH: $additional_data = ["\x66\151\162\x73\x74\137\x6e\141\155\145" => $first_name, "\154\x61\x73\164\x5f\156\x61\x6d\145" => $last_name]; goto gHI_l; v82bx: $username = $this->input->post("\x75\x73\x65\x72\x6e\x61\155\x65", true); goto bLJdP; IXQfA: $nama = $this->input->post("\x6e\141\x6d\141\137\x6c\145\x6e\x67\x6b\x61\x70", true); goto v82bx; jhREc: $last_name = end($namaAdmin); goto uYqnH; CYKBb: $first_name = $namaAdmin[0]; goto jhREc; QDRP5: $data["\141\144\155\x69\156"] = $create; goto Kne69; gAMkY: $namaAdmin = explode("\x20", $nama); goto CYKBb; seiSo: } public function createApp() { goto W6vg4; iBRO6: $alamat = $this->input->post("\x61\154\x61\x6d\x61\164", true); goto HlRhd; W6vg4: $nama = $this->input->post("\x6e\141\x6d\x61\137\154\145\156\x67\153\x61\160", true); goto odUnR; AEkRu: $prov = $this->input->post("\x70\162\x6f\x76", true); goto caNGp; sFmmo: $email = strtolower($nama) . "\100\x61\144\x6d\x69\x6e\56\x63\157\155"; goto dHlFq; b3bEx: $satuan_pendidikan = $this->input->post("\163\x61\164\165\141\156", true); goto KitBT; zl9HM: $namaAdmin = explode("\x20", $nama); goto gfNXt; O7Qwb: $nama_aplikasi = $this->input->post("\156\x61\x6d\141\137\x61\x70\154\151\x6b\x61\163\151", true); goto OqQTi; unjdI: $desa = $this->input->post("\144\x65\163\141", true); goto AEkRu; w3VVx: $password = $this->input->post("\160\x61\x73\163\167\x6f\162\x64", true); goto O7Qwb; vOT7R: $kec = $this->input->post("\x6b\145\x63", true); goto unjdI; CEoNw: $jenjang = $this->input->post("\152\145\x6e\x6a\141\x6e\147", true); goto b3bEx; UmF4J: $last_name = end($namaAdmin); goto VGE4S; gfNXt: $first_name = $namaAdmin[0]; goto UmF4J; dHlFq: $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto vOVoZ; u3Zvr: $group = array("\x31"); goto sFmmo; ybPjW: $this->output_json($data); goto Lgljq; odUnR: $username = $this->input->post("\165\163\145\x72\x6e\x61\x6d\145", true); goto w3VVx; vOVoZ: $data["\151\x6e\163\x65\162\164"] = $this->db->insert("\163\145\x74\x74\151\156\x67", $insert); goto NVyHO; KitBT: $kepsek = $this->input->post("\x6b\145\x70\x73\x65\x6b", true); goto iBRO6; caNGp: $insert = ["\x69\x64\137\x73\x65\x74\x74\x69\156\147" => 1, "\163\145\153\157\x6c\x61\x68" => $sekolah, "\152\x65\156\x6a\x61\156\x67" => $jenjang, "\163\141\164\x75\x61\x6e\137\x70\x65\x6e\x64\x69\144\151\x6b\141\x6e" => $satuan_pendidikan, "\x61\x6c\141\155\141\164" => $alamat, "\144\x65\163\141" => $desa, "\153\x6f\x74\141" => $kota, "\153\145\143\141\155\141\x74\x61\x6e" => $kec, "\160\162\157\166\x69\156\x73\x69" => $prov, "\x6b\145\160\x73\x65\x6b" => $kepsek, "\x6e\141\155\x61\x5f\x61\x70\x6c\151\153\x61\x73\x69" => $nama_aplikasi]; goto zl9HM; OqQTi: $sekolah = $this->input->post("\156\141\x6d\141\137\x73\x65\x6b\x6f\154\141\150", true); goto CEoNw; VGE4S: $additional_data = ["\x66\x69\162\x73\x74\137\156\141\x6d\x65" => $first_name, "\x6c\141\163\164\137\x6e\x61\x6d\x65" => $last_name]; goto u3Zvr; NVyHO: $data["\141\144\155\151\156"] = $create; goto ybPjW; HlRhd: $kota = $this->input->post("\153\157\x74\x61", true); goto vOT7R; Lgljq: } }
