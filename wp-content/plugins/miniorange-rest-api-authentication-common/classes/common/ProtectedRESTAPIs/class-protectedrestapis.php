<?php


namespace MoRestAPI;

class ProtectedRESTAPIs
{
    private $all_routes;
    private $all_namespaces;
    private $wp_rest_server;
    private $protected_route_list;
    public function __construct($rj = false)
    {
        if (!(true === $rj)) {
            goto Q5;
        }
        global $bC;
        $this->protected_route_list = $bC->mo_rest_api_authentication_get_option("\155\x6f\137\x61\x70\151\x5f\141\x75\164\x68\x65\x6e\164\x69\x63\141\164\x69\x6f\156\x5f\160\162\157\164\145\143\164\145\144\x72\x65\163\x74\141\160\x69\137\x72\x6f\165\x74\145\x5f\x77\150\151\164\x65\154\151\x73\164") ? $bC->mo_rest_api_authentication_get_option("\155\x6f\137\141\x70\x69\137\x61\x75\x74\150\145\x6e\x74\x69\x63\x61\164\151\x6f\x6e\137\x70\x72\157\x74\145\143\x74\x65\144\x72\x65\163\164\141\x70\x69\x5f\x72\157\165\x74\145\137\167\x68\151\164\x65\154\151\x73\164") : array();
        Q5:
    }
    private function get_wp_rest_server_object()
    {
        $nI = rest_get_server();
        return $nI;
    }
    public function mo_rest_api_save_settings()
    {
        if (!(isset($_POST["\x6d\157\x5f\x72\145\163\164\137\141\160\x69\x5f\x70\x72\157\164\145\143\164\x65\144\x5f\x72\x65\x73\x74\137\141\160\151\x5f\x6e\157\x6e\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\x6f\137\x72\x65\163\164\137\x61\160\151\137\x70\x72\157\164\145\x63\164\x65\x64\x5f\162\145\x73\x74\x5f\x61\160\x69\137\x6e\157\156\143\145"])), "\155\157\137\162\145\163\x74\x5f\141\160\x69\137\160\162\157\164\145\143\164\145\x64\137\162\145\163\x74\137\141\x70\151\137\x73\145\x74\x74\x69\x6e\147\163") && (isset($_POST[\MoRestAPIConstants::OPTION]) && "\155\157\137\x72\145\163\164\x5f\141\x70\151\137\160\162\x6f\164\x65\143\164\x65\x64\137\x72\x65\x73\x74\137\141\160\x69\137\163\x65\164\x74\x69\156\147\163" === $_POST[\MoRestAPIConstants::OPTION]))) {
            goto kd;
        }
        global $bC;
        if (isset($_POST["\x61\143\x74\x69\157\156"]) && "\x53\141\166\x65\40\x43\157\x6e\146\x69\x67\x75\162\x61\164\151\x6f\156" === $_POST["\141\x63\164\151\x6f\x6e"]) {
            goto K9;
        }
        if (!(isset($_POST["\141\143\164\x69\157\x6e"]) && "\122\x65\163\x65\x74" === $_POST["\141\143\164\151\157\x6e"])) {
            goto Om;
        }
        $bC->mo_rest_api_authentication_delete_option("\x6d\x6f\137\141\160\151\x5f\141\x75\164\150\x65\156\x74\151\x63\x61\x74\151\157\x6e\x5f\x70\162\x6f\164\x65\143\164\145\x64\162\145\163\164\141\160\151\x5f\162\157\165\x74\x65\x5f\x77\150\x69\164\x65\154\151\163\164");
        Om:
        goto gg;
        K9:
        $vu = isset($_POST["\162\145\163\x74\137\x72\157\165\164\145\x73"]) ? array_map("\x65\x73\143\137\x68\x74\x6d\x6c", wp_unslash($_POST["\162\145\163\164\x5f\162\x6f\165\x74\x65\x73"])) : false;
        $bC->mo_rest_api_authentication_update_option("\155\157\x5f\141\160\x69\137\141\x75\164\x68\145\x6e\164\151\x63\141\x74\x69\x6f\x6e\137\x70\x72\x6f\164\145\143\x74\145\144\162\145\163\164\141\x70\x69\x5f\x72\157\165\x74\x65\137\x77\x68\151\164\145\154\x69\163\164", $vu);
        gg:
        kd:
    }
    private function load_all_rest_api_checkbox()
    {
        echo "\x3c\x75\154\x3e";
        $yb = '';
        foreach ($this->all_routes as $O8 => $Vf) {
            $Al = $this->check_if_route_is_whitelisted($Vf) ? '' : "\143\x68\x65\143\153\x65\x64";
            if (in_array(ltrim($Vf, "\x2f"), $this->all_namespaces) || "\x2f" === $Vf) {
                goto Fs;
            }
            echo "\74\154\x69\x3e\x3c\154\141\x62\145\x6c\x3e\74\151\x6e\x70\165\164\x20\156\141\155\x65\75\47\162\145\x73\164\137\162\x6f\x75\164\145\163\133\135\x27\40\x64\x61\164\141\x2d\156\141\155\x65\163\160\x61\143\145\75\x27" . $yb . "\x27\40\166\141\x6c\165\x65\75\x27" . $Vf . "\x27\x20\x74\x79\x70\x65\x3d\x27\x63\150\145\x63\x6b\142\157\x78\x27\40" . $Al . "\40\76\46\x6e\x62\x73\160\x3b" . esc_html($Vf) . "\74\x2f\154\x61\x62\145\x6c\x3e\x3c\x2f\x6c\x69\x3e";
            goto dq;
            Fs:
            $yb = $Vf;
            $Ob = "\x2f" == $Vf ? "\x2f\40\x3c\x65\x6d\x3e" . esc_html__("\x52\x45\x53\124\40\101\x50\111\40\x52\x4f\x4f\124", "\144\x69\x73\141\142\154\x65\55\x6a\x73\x6f\x6e\55\x61\160\x69") . "\x3c\x2f\145\155\x3e" : esc_html($Vf);
            echo "\74\150\x34\x3e\74\154\x61\142\145\154\x3e\x3c\151\x6e\x70\165\x74\40\156\141\x6d\145\x3d\47\x72\x65\x73\164\137\x72\157\165\x74\x65\x73\x5b\135\x27\40\166\x61\x6c\165\x65\x3d\47" . $Vf . "\x27\x20\151\144\75\47\155\x6f\137\156\x61\x6d\x65\163\160\141\143\x65" . $O8 . "\x27\x20\x74\x79\160\145\x3d\47\x63\x68\x65\x63\153\x62\157\x78\x27\x20\x6f\x6e\143\x6c\x69\x63\153\75\47\x4d\x6f\120\x72\157\164\x65\x63\164\145\x64\162\145\163\164\x61\x70\151\x4e\x61\155\x65\x73\160\141\143\x65\103\x6c\x69\x63\153\x28\x20\x22" . $yb . "\42\54\x20\x22\155\157\x5f\156\141\x6d\145\x73\160\x61\143\145" . $O8 . "\42\x20\51\x27\x20" . $Al . "\x20\x20\x3e\46\x6e\142\163\160\73" . $Ob . "\x3c\57\x6c\141\142\x65\x6c\76\74\57\150\64\76";
            if (!("\x2f" == $Vf)) {
                goto qX;
            }
            echo "\x3c\x6c\151\x3e" . sprintf(esc_html__("\117\x6e\x20\x74\150\151\163\x20\x77\x65\142\x73\x69\164\x65\54\40\164\x68\145\40\122\x45\x53\x54\40\x41\x50\x49\x20\x72\157\x6f\164\40\x69\x73\40\45\x73", "\144\151\x73\141\x62\x6c\x65\x2d\x6a\163\157\x6e\x2d\x61\x70\151"), "\74\x73\164\162\x6f\156\147\x3e" . rest_url() . "\74\57\x73\x74\x72\x6f\156\147\x3e") . "\x3c\x2f\x6c\151\76";
            qX:
            dq:
            tx:
        }
        jt:
        echo "\74\x2f\x75\x6c\76";
    }
    public function check_if_route_is_whitelisted($Vf)
    {
        if (in_array(esc_html($Vf), $this->protected_route_list)) {
            goto Ki;
        }
        $Gp = array_reduce($this->protected_route_list, function ($No, $P8) use($Vf) {
            return $No || (bool) preg_match("\100\x5e" . htmlspecialchars_decode($P8) . "\44\x40\x69", $Vf);
        }, false);
        return $Gp ? false : true;
        goto Jj;
        Ki:
        return false;
        Jj:
    }
    public function render_ui()
    {
        global $bC;
        $this->wp_rest_server = $this->get_wp_rest_server_object();
        $this->all_routes = array_keys($this->wp_rest_server->get_routes());
        $this->all_namespaces = $this->wp_rest_server->get_namespaces();
        $this->protected_route_list = $bC->mo_rest_api_authentication_get_option("\155\157\137\x61\x70\x69\137\141\x75\x74\x68\145\156\164\151\143\141\x74\x69\157\x6e\x5f\160\162\157\164\145\x63\164\x65\x64\162\x65\163\164\141\x70\x69\137\162\157\x75\164\145\x5f\x77\150\x69\164\145\154\x69\163\164") ? $bC->mo_rest_api_authentication_get_option("\155\157\x5f\141\x70\151\137\x61\x75\x74\x68\145\156\x74\151\x63\141\x74\x69\x6f\x6e\137\x70\162\x6f\164\x65\x63\164\145\144\162\145\163\x74\141\x70\151\x5f\162\x6f\165\x74\x65\137\x77\x68\x69\164\145\x6c\x69\x73\164") : array_map("\x65\x73\x63\137\x68\164\155\x6c", $this->all_routes);
        echo "\11\x9\x20\x20\40\x20\x3c\x64\x69\166\x20\143\x6c\141\163\x73\75\x22\155\x6f\x5f\x73\165\160\160\157\162\164\137\154\141\171\157\x75\164\x22\x3e\15\12\40\40\40\40\x20\40\40\x20\x20\40\40\40\40\x20\x20\40\74\x64\x69\x76\40\143\154\141\x73\x73\x3d\42\x6d\157\137\141\160\151\x5f\x61\x75\164\x68\145\156\x74\x69\x63\141\x74\151\157\156\137\x73\x65\x74\x74\151\156\x67\x73\137\x74\x61\x62\x6c\145\x22\76\xd\xa\40\40\x20\x20\40\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\40\40\x20\x20\x3c\x68\63\x3e\122\x65\163\x74\162\151\143\x74\40\x50\165\x62\154\151\143\40\x41\x63\x63\x65\163\163\x20\x74\x6f\x20\127\120\40\122\105\123\x54\40\x41\120\111\x73\40\74\x2f\x68\63\x3e\xd\xa\x20\40\x20\40\40\x20\40\40\40\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\74\160\x3e\x41\154\154\x20\x74\x68\x65\x20\x52\105\123\x54\x20\101\120\111\163\x20\154\x69\x73\x74\x65\x64\x20\x62\x65\x6c\157\x77\40\141\162\145\40\x70\162\x6f\x74\x65\143\x74\145\144\40\x66\x72\x6f\x6d\x20\x70\x75\142\x6c\x69\143\40\141\143\143\145\163\x73\56\x20\131\157\x75\40\143\141\156\40\165\x6e\143\150\x65\x63\x6b\x20\x74\150\145\x20\143\150\145\143\153\x62\157\170\x65\163\40\164\157\x20\x6d\141\x6b\145\x20\x69\x74\x20\160\165\142\154\151\143\x6c\x79\x20\141\143\x63\x65\163\163\x69\142\x6c\x65\56\x3c\57\160\x3e\15\xa\15\xa\x20\40\x20\40\40\x20\40\40\40\40\x20\x20\x20\40\40\x20\40\40\x20\x20\74\x66\157\162\x6d\x20\141\x63\164\151\157\x6e\75\x22\42\40\x69\x64\x3d\x22\155\157\x2d\x70\162\157\x74\145\x63\x74\145\x64\x2d\162\x65\163\x74\x2d\x61\160\x69\x73\55\x66\x6f\x72\155\x22\40\x6d\145\x74\x68\157\144\x3d\42\x50\117\123\x54\42\x3e\xd\12\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\40\40\x20";
        wp_nonce_field("\x6d\x6f\x5f\162\x65\x73\164\137\x61\x70\x69\x5f\x70\x72\x6f\x74\145\x63\x74\145\144\x5f\162\145\x73\164\137\x61\160\151\137\x73\145\164\164\x69\x6e\x67\x73", "\155\x6f\x5f\162\145\163\x74\x5f\x61\x70\x69\137\160\162\157\164\x65\143\164\x65\144\137\x72\145\x73\164\x5f\141\160\151\137\x6e\157\x6e\x63\x65");
        echo "\x20\x20\x20\x20\x20\x20\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\40\x20\40\40\x20\40\74\x69\x6e\160\165\x74\x20\164\x79\160\145\75\x22\150\151\x64\x64\145\x6e\x22\x20\156\x61\x6d\145\x3d\x22\157\160\x74\151\157\x6e\42\x20\166\141\x6c\165\x65\x3d\42\x6d\157\x5f\162\145\163\164\137\141\160\x69\x5f\x70\x72\157\x74\145\x63\x74\145\144\x5f\162\145\163\x74\x5f\141\x70\x69\x5f\x73\x65\164\x74\x69\156\x67\x73\42\x3e\xd\12\xd\xa\x20\40\40\40\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\40\40\x20\40\x20\x20\40\x3c\x64\151\166\x20\x69\x64\x3d\42\155\x6f\137\x70\x72\x6f\x74\x65\x63\164\x65\x64\162\x65\163\164\141\x70\151\x5f\x63\157\x6e\x74\x61\x69\x6e\145\x72\42\76\15\xa\x20\x20\40\x20\40\40\40\x20\x20\40\x20\40\40\x20\x20\40\40\40\40\40\x20\40\x20\x20\40\40\40\x20";
        $this->load_all_rest_api_checkbox();
        echo "\x20\x20\40\x20\x20\40\x20\40\40\x20\40\40\40\x20\40\40\x20\40\40\x20\40\40\x20\40\74\57\x64\x69\x76\x3e\xd\xa\15\12\40\40\x20\40\x20\40\40\40\40\x20\40\40\40\40\40\40\40\40\x20\x20\x20\40\x20\40\74\144\151\166\76\xd\12\40\x20\40\x20\40\x20\40\x20\x20\40\40\x20\40\40\40\40\40\40\x20\40\x20\x20\x20\40\40\40\x20\40\74\151\156\160\165\164\40\164\x79\x70\145\75\42\150\151\144\x64\x65\x6e\42\x20\156\x61\155\145\x3d\42\141\x63\x74\151\157\156\x22\40\151\x64\75\42\x6d\x6f\x5f\141\x70\x69\x5f\141\165\x74\150\x5f\x73\x61\166\x65\x5f\x63\157\156\x66\x69\x67\137\151\156\x70\165\x74\42\40\x76\x61\154\165\145\x3d\42\x53\x61\x76\145\x20\103\x6f\x6e\146\151\x67\x75\x72\141\x74\x69\157\156\42\x3e\xd\12\40\40\x20\40\x20\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\40\40\x20\40\x20\x20\40\x20\40\x3c\x62\x75\164\x74\x6f\156\40\164\x79\x70\145\x3d\x22\x73\165\x62\x6d\x69\164\42\40\x73\x74\171\154\145\75\x22\x6d\x61\162\x67\151\156\x3a\x31\x35\160\x78\x3b\40\167\x69\144\x74\x68\72\x31\x37\60\x70\170\73\42\x20\151\x64\75\x22\x6d\157\137\141\160\151\137\x61\165\x74\x68\x5f\163\141\x76\145\x5f\x63\x6f\x6e\x66\x69\147\x5f\142\x75\x74\164\157\156\42\x20\157\156\x63\154\x69\143\x6b\x3d\x22\115\x6f\x41\x75\164\150\145\x6e\x74\151\x63\x61\164\151\157\x6e\x4d\x65\164\x68\x6f\144\x53\x61\166\145\50\47\123\141\x76\x65\x20\103\x6f\x6e\x66\151\x67\x75\162\x61\164\x69\157\x6e\47\51\42\40\x63\x6c\x61\x73\163\75\42\142\165\164\x74\x6f\156\40\x62\165\x74\x74\157\x6e\55\160\x72\x69\x6d\x61\162\171\40\x62\x75\x74\164\x6f\x6e\55\154\141\x72\x67\x65\42\x3e\123\141\x76\145\40\x43\x6f\x6e\x66\151\x67\165\162\x61\164\151\x6f\156\x3c\57\x62\x75\164\x74\x6f\156\x3e\xd\xa\x20\x20\x20\40\40\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\40\40\x20\40\x20\74\x62\165\164\x74\x6f\156\40\x74\x79\x70\145\x3d\42\x62\x75\164\164\157\156\x22\x20\x73\x74\x79\154\x65\75\42\155\141\x72\147\x69\156\72\x31\x35\160\170\73\40\167\x69\x64\164\x68\72\x31\67\60\x70\x78\x3b\x22\x20\157\156\143\x6c\x69\143\x6b\75\x22\115\157\x41\x75\164\150\x65\x6e\x74\151\x63\141\x74\151\x6f\x6e\x4d\145\164\150\157\x64\123\141\x76\x65\x28\x27\122\x65\163\145\x74\x27\51\42\x20\x63\154\x61\163\163\x3d\x22\142\x75\164\x74\157\x6e\x20\x62\x75\164\164\157\156\55\160\162\x69\x6d\141\x72\x79\40\142\165\x74\164\157\x6e\55\x6c\141\162\147\x65\42\76\x52\145\163\145\164\74\x2f\x62\165\164\x74\157\156\76\xd\xa\40\x20\40\40\40\40\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x3c\x2f\144\151\166\76\15\xa\40\40\40\x20\40\x20\40\40\40\40\40\x20\x20\40\40\40\x20\x20\40\40\40\40\40\x20\x3c\142\162\76\15\12\40\40\40\40\40\x20\40\40\x20\40\x20\40\x20\40\40\40\40\40\40\x20\x3c\57\146\157\162\155\76\15\xa\x20\40\40\40\40\40\40\x20\x20\40\40\40\x20\x20\40\40\74\x2f\144\x69\x76\76\15\xa\40\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\74\57\144\x69\166\76\15\xa\15\xa\x20\x20\x20\40\40\x20\x20\40\40\40\x20\x20\74\163\x63\162\x69\160\x74\76\xd\12\x20\x20\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\146\x75\x6e\143\x74\151\157\156\x20\x4d\157\x41\165\x74\150\145\x6e\164\151\143\141\164\x69\157\x6e\115\x65\x74\150\x6f\x64\x53\141\166\145\50\x20\x61\143\164\x69\157\156\40\51\x7b\15\12\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\40\40\40\40\144\x6f\143\165\155\145\x6e\164\x2e\x67\x65\164\x45\x6c\x65\x6d\x65\x6e\x74\x42\x79\x49\x64\x28\42\x6d\x6f\137\x61\160\x69\137\x61\x75\x74\150\x5f\x73\141\x76\x65\137\x63\157\156\x66\x69\x67\x5f\x69\156\160\165\x74\x22\x29\x2e\166\141\x6c\x75\x65\40\75\40\141\x63\164\151\157\x6e\x3b\15\12\x20\x20\40\40\40\40\x20\x20\x20\x20\40\40\x20\40\40\x20\40\x20\40\40\x64\157\x63\165\155\x65\x6e\x74\56\147\145\x74\105\154\145\x6d\145\x6e\x74\102\x79\111\x64\x28\x22\x6d\x6f\55\160\x72\157\164\x65\143\164\145\144\55\x72\145\163\x74\55\141\x70\x69\x73\x2d\146\x6f\x72\155\x22\x29\x2e\163\x75\x62\155\151\164\50\51\x3b\xd\xa\x20\40\x20\40\40\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\175\15\12\40\40\x20\40\x20\40\x20\x20\40\x20\40\40\x3c\x2f\x73\x63\162\151\x70\164\76\xd\xa\40\x20\x20\40\40\x20\x20\40";
    }
}