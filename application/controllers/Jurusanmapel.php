<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\105\x50\x41\x54\110") or exit("\116\x6f\x20\144\x69\162\145\143\x74\40\163\x63\162\x69\x70\x74\x20\141\x63\143\145\163\x73\40\141\x6c\154\x6f\x77\x65\144"); class JurusanMapel extends CI_Controller { public function __construct() { goto bhxwY; oKu4_: $this->load->library(["\144\x61\164\x61\x74\x61\x62\x6c\145\x73", "\x66\157\x72\155\137\166\141\x6c\151\144\x61\164\x69\x6f\x6e"]); goto EMAs3; T_qe1: $this->form_validation->set_error_delimiters('', ''); goto uH3cX; K5Zoz: if (!$this->ion_auth->logged_in()) { goto wR2R9; } goto H07Jw; spz1i: AS2Pg: goto TZE15; B0G3S: wR2R9: goto hQpPD; bhxwY: parent::__construct(); goto K5Zoz; TZE15: goto ZzijE; goto B0G3S; hS6LZ: ZzijE: goto oKu4_; H07Jw: if ($this->ion_auth->is_admin()) { goto AS2Pg; } goto lfcIz; EMAs3: $this->load->model("\115\141\x73\x74\145\x72\137\155\x6f\144\145\x6c", "\155\x61\163\x74\x65\162"); goto T_qe1; hQpPD: redirect("\x61\165\164\150"); goto hS6LZ; lfcIz: show_error("\110\x61\156\171\x61\40\101\x64\x6d\151\x6e\x69\163\x74\x72\x61\x74\x6f\x72\x20\171\x61\x6e\147\40\x64\x69\x62\145\x72\151\40\x68\141\x6b\40\165\x6e\164\165\x6b\40\155\x65\x6e\x67\x61\153\163\145\163\40\150\141\x6c\141\155\x61\156\x20\151\156\151\x2c\40\x3c\141\40\x68\162\x65\x66\x3d\42" . base_url("\x64\141\x73\x68\142\157\x61\x72\144") . "\x22\76\113\x65\155\142\141\154\151\x20\x6b\145\x20\x6d\x65\x6e\x75\x20\141\x77\x61\x6c\x3c\x2f\x61\x3e", 403, "\101\153\163\x65\x73\x20\124\145\162\154\141\x72\x61\x6e\x67"); goto spz1i; uH3cX: } public function output_json($data, $encode = true) { goto mxfjT; mxfjT: if (!$encode) { goto FYxAx; } goto WRPlG; WRPlG: $data = json_encode($data); goto ZhTXN; ZhTXN: FYxAx: goto Pfptt; Pfptt: $this->output->set_content_type("\141\160\160\x6c\x69\x63\x61\164\151\157\x6e\x2f\152\x73\x6f\156")->set_output($data); goto G3uHn; G3uHn: } public function index() { goto UFgof; XwYMe: $this->load->view("\x72\145\154\141\x73\x69\57\x6a\165\162\165\163\141\x6e\155\141\160\x65\154\x2f\x64\x61\164\141"); goto E3ze9; lgLyl: $this->load->view("\x5f\x74\x65\155\160\x6c\x61\x74\x65\x73\x2f\x64\141\x73\x68\142\157\x61\162\144\57\137\x68\x65\x61\144\x65\x72\56\x70\150\160", $data); goto XwYMe; UFgof: $data = ["\x75\x73\x65\162" => $this->ion_auth->user()->row(), "\x6a\x75\x64\x75\154" => "\112\165\x72\165\163\141\x6e\x20\115\141\164\x61\40\x4b\x75\x6c\x69\x61\x68", "\163\x75\x62\152\165\144\x75\x6c" => "\104\141\x74\x61\40\x4a\x75\x72\x75\163\141\x6e\x20\x4d\141\164\x61\40\x4b\165\x6c\151\141\150"]; goto lgLyl; E3ze9: $this->load->view("\137\164\145\155\160\154\141\x74\x65\x73\57\144\x61\x73\x68\x62\157\x61\162\144\x2f\x5f\x66\x6f\x6f\x74\145\162\x2e\160\x68\160"); goto quxrj; quxrj: } public function data() { $this->output_json($this->master->getJurusanMapel(), false); } public function getJurusanId($id) { $this->output_json($this->master->getAllJurusan($id)); } public function add() { goto nEgyt; nEgyt: $data = ["\x75\163\145\x72" => $this->ion_auth->user()->row(), "\152\165\144\165\x6c" => "\x54\141\x6d\142\x61\150\x20\112\x75\x72\165\163\141\x6e\x20\x4d\141\164\x61\x20\113\x75\x6c\151\141\x68", "\x73\x75\142\152\x75\x64\x75\x6c" => "\124\141\x6d\x62\x61\150\x20\104\x61\x74\x61\x20\112\x75\162\165\163\141\156\x20\115\x61\164\x61\x20\x4b\165\x6c\151\x61\150", "\x6d\x61\160\145\154" => $this->master->getMapel()]; goto NI5ET; yxcI_: $this->load->view("\x72\x65\154\141\163\x69\57\x6a\165\162\165\x73\x61\x6e\x6d\x61\x70\145\154\57\x61\144\144"); goto Kgd81; NI5ET: $this->load->view("\137\164\145\x6d\x70\x6c\141\x74\x65\x73\x2f\x64\141\163\150\x62\x6f\141\x72\x64\x2f\137\150\145\141\144\x65\162\x2e\160\x68\160", $data); goto yxcI_; Kgd81: $this->load->view("\x5f\164\x65\155\x70\154\x61\164\x65\163\57\144\x61\x73\x68\x62\157\141\162\144\x2f\x5f\x66\157\157\164\145\x72\56\160\150\160"); goto flkaC; flkaC: } public function edit($id) { goto vEq4C; vEq4C: $data = ["\165\163\145\162" => $this->ion_auth->user()->row(), "\152\165\144\x75\154" => "\x45\144\151\x74\40\112\x75\x72\x75\163\141\x6e\40\x4d\x61\x74\141\40\x4b\x75\154\151\x61\x68", "\163\x75\142\152\x75\144\165\x6c" => "\105\x64\151\164\x20\104\x61\x74\x61\x20\112\165\x72\x75\163\141\156\x20\115\141\164\141\x20\113\x75\x6c\x69\141\150", "\x6d\x61\x70\145\154" => $this->master->getMapelById($id, true), "\x69\x64\137\x6d\141\x70\x65\x6c" => $id, "\141\x6c\x6c\x5f\x6a\165\x72\x75\163\141\x6e" => $this->master->getAllJurusan(), "\152\165\x72\x75\x73\141\156" => $this->master->getJurusanByIdMapel($id)]; goto gqfuN; gqfuN: $this->load->view("\x5f\164\x65\x6d\160\154\x61\164\145\x73\57\144\x61\x73\150\142\x6f\141\162\144\x2f\x5f\x68\145\x61\x64\x65\162\x2e\x70\150\x70", $data); goto xdgiz; xdgiz: $this->load->view("\x72\x65\x6c\x61\x73\151\57\152\165\162\165\x73\x61\x6e\x6d\141\160\x65\x6c\57\x65\x64\x69\164"); goto yu_xV; yu_xV: $this->load->view("\137\x74\145\x6d\160\154\x61\x74\x65\163\57\144\x61\x73\x68\x62\x6f\x61\x72\x64\57\x5f\x66\x6f\x6f\164\145\162\x2e\160\150\x70"); goto xzaZF; xzaZF: } public function save() { goto IVRu9; wDnb5: $id = $this->input->post("\x6d\x61\160\145\154\137\x69\144", true); goto Yr27q; IVRu9: $method = $this->input->post("\x6d\145\x74\x68\157\x64", true); goto P2aSE; ndcfZ: $this->form_validation->set_rules("\x6a\x75\162\165\x73\141\156\x5f\x69\144\133\135", "\x4a\x75\x72\165\x73\x61\x6e", "\x72\145\x71\x75\x69\162\x65\x64"); goto GWZ5R; VOs0j: $jurusan_id = $this->input->post("\152\x75\x72\x75\163\141\x6e\x5f\x69\x64", true); goto FnpOk; XVGZE: if (!($method === "\145\144\151\x74")) { goto G2nCI; } goto wDnb5; zxyKS: goto DkvkZ; goto TJWXF; F3tYT: goto u0Qnx; goto XyoXh; rH9yC: $this->output_json($data); goto MqJ9y; uVjm4: $data = ["\x73\164\x61\164\x75\163" => false, "\x65\x72\162\157\x72\x73" => ["\155\141\160\145\154\137\x69\x64" => form_error("\x6d\x61\160\x65\154\x5f\x69\144"), "\152\165\162\x75\x73\x61\156\x5f\x69\x64\133\135" => form_error("\x6a\x75\x72\x75\x73\x61\x6e\137\151\x64\133\135")]]; goto rH9yC; qAvMy: G2nCI: goto F3tYT; ompUO: $data["\163\164\141\164\165\x73"] = $action ? TRUE : FALSE; goto zxyKS; zux8q: $mapel_id = $this->input->post("\155\141\x70\x65\154\137\x69\x64", true); goto VOs0j; ES0ek: u0Qnx: goto ompUO; RP2dL: $action = $this->master->create("\152\x75\x72\165\x73\x61\156\137\x6d\x61\x70\145\154", $input, true); goto ES0ek; YEj4A: $action = $this->master->create("\152\x75\x72\165\x73\141\x6e\x5f\x6d\141\x70\x65\154", $input, true); goto qAvMy; GWZ5R: if ($this->form_validation->run() == FALSE) { goto v4ZgK; } goto zux8q; TJWXF: v4ZgK: goto uVjm4; oonbw: foreach ($jurusan_id as $key => $val) { $input[] = ["\155\141\x70\145\x6c\137\151\144" => $mapel_id, "\x6a\165\162\165\x73\x61\156\x5f\151\144" => $val]; jsgg7: } goto p7bCX; FnpOk: $input = []; goto oonbw; BjEx0: if ($method === "\141\144\144") { goto JdAcV; } goto XVGZE; MqJ9y: DkvkZ: goto jI8_U; XyoXh: JdAcV: goto RP2dL; jI8_U: $this->output_json($data); goto LtZlT; p7bCX: NOzdQ: goto BjEx0; P2aSE: $this->form_validation->set_rules("\155\141\x70\x65\x6c\137\x69\144", "\x4d\141\164\141\40\x4b\165\154\151\141\x68", "\162\145\161\165\x69\x72\x65\144"); goto ndcfZ; Yr27q: $this->master->delete("\x6a\165\162\x75\163\141\x6e\x5f\x6d\x61\160\145\x6c", $id, "\x6d\141\x70\145\154\137\151\144"); goto YEj4A; LtZlT: } public function delete() { goto ygxfP; xGDYB: if (!$this->master->delete("\x6a\165\x72\x75\163\x61\x6e\x5f\155\x61\160\x65\154", $chk, "\x6d\141\x70\145\x6c\137\x69\x64")) { goto RBPU3; } goto u7EWg; u7EWg: $this->output_json(["\x73\x74\x61\164\x75\x73" => true, "\164\157\x74\141\x6c" => count($chk)]); goto voFP9; QrD9H: if (!$chk) { goto r6O3P; } goto xGDYB; yxcEh: goto tXnR8; goto BSYR8; QLcHy: tXnR8: goto a9QIj; BSYR8: r6O3P: goto qNghd; ygxfP: $chk = $this->input->post("\143\x68\145\143\x6b\x65\x64", true); goto QrD9H; qNghd: $this->output_json(["\x73\x74\141\x74\165\x73" => false]); goto QLcHy; voFP9: RBPU3: goto yxcEh; a9QIj: } }
