<?php


namespace MoRestAPI;

use MoRestAPI\Accounts\AccountsInterface;
class Accounts implements AccountsInterface
{
    public function verify_password_ui()
    {
        global $bC;
        echo "\11\x9\74\146\157\162\155\40\156\x61\155\x65\75\x22\x66\x22\40\155\145\x74\x68\157\x64\75\42\160\157\163\164\42\40\141\x63\164\151\157\x6e\x3d\42\x22\x3e\15\12\11\x9\11\74\x69\156\160\165\164\40\164\171\160\x65\x3d\42\x68\151\144\144\x65\x6e\x22\40\x6e\141\155\x65\75\x22\157\160\x74\x69\157\x6e\x22\x20\166\141\x6c\x75\145\75\x22\x6d\x6f\137\x61\x70\151\x5f\141\x75\164\x68\x65\x6e\x74\151\143\x61\164\x69\x6f\156\137\166\x65\x72\x69\146\x79\x5f\x63\x75\x73\164\x6f\155\145\x72\x22\40\57\x3e\15\xa\11\11\11";
        wp_nonce_field("\155\x6f\x5f\x61\160\151\137\141\x75\164\150\145\x6e\164\x69\143\x61\164\151\x6f\156\137\166\145\162\x69\x66\x79\x5f\143\165\163\164\157\x6d\x65\162", "\155\x6f\137\141\x70\x69\x5f\x61\x75\164\150\x65\x6e\x74\x69\x63\141\x74\x69\x6f\x6e\137\x76\145\162\x69\146\171\137\143\x75\163\164\157\155\145\162\137\x6e\x6f\x6e\143\x65");
        echo "\11\x9\11\74\144\x69\x76\x20\143\x6c\x61\163\163\75\x22\x6d\x6f\137\164\141\x62\154\145\x5f\154\141\171\157\x75\164\42\x3e\xd\12\x9\x9\x9\11\x3c\144\x69\x76\40\x69\144\75\x22\x74\x6f\x67\147\x6c\145\x31\x22\40\x63\154\141\163\x73\75\x22\155\x6f\137\x70\141\156\x65\154\137\x74\x6f\x67\147\x6c\145\42\x3e\xd\xa\11\x9\x9\x9\x9\74\x68\63\x3e\114\x6f\x67\x69\156\x20\167\x69\x74\x68\40\155\151\156\x69\x4f\162\x61\156\147\x65\74\x2f\x68\x33\76\15\xa\x9\11\11\11\74\57\144\151\x76\76\15\12\x9\11\11\x9\x3c\160\x3e\74\163\x74\x72\x6f\x6e\x67\76\120\154\x65\141\x73\x65\x20\x65\x6e\164\145\x72\40\x79\x6f\x75\x72\40\155\151\x6e\x69\x4f\x72\x61\x6e\147\145\x20\145\155\x61\x69\x6c\x20\x61\x6e\144\40\x70\x61\163\x73\x77\x6f\x72\144\x2e\74\x62\162\x3e\x3c\141\40\150\162\x65\x66\x3d\x22\43\155\157\137\x61\160\x69\x5f\141\165\x74\150\x65\x6e\164\151\x63\141\x74\151\157\x6e\137\146\157\162\x67\x6f\164\x5f\160\x61\163\163\x77\157\162\x64\137\x6c\x69\156\153\42\x3e\103\154\151\x63\153\x20\150\x65\x72\145\x20\151\146\40\171\x6f\x75\x20\146\157\162\x67\x6f\x74\x20\171\157\165\x72\40\x70\141\x73\163\x77\157\x72\144\74\x2f\x61\76\74\x2f\x73\164\162\x6f\x6e\147\76\x3c\57\x70\x3e\xd\12\15\xa\11\11\x9\x9\x3c\x64\x69\166\x20\151\x64\75\42\x70\x61\156\x65\x6c\x31\x22\76\15\12\11\x9\11\x9\11\x3c\57\160\76\15\12\x9\11\11\11\11\74\x74\x61\x62\x6c\145\40\x63\154\x61\163\x73\x3d\42\155\157\137\163\145\x74\x74\x69\x6e\147\163\x5f\x74\x61\142\x6c\145\x22\76\xd\12\11\11\11\11\x9\11\x3c\164\x72\76\15\12\x9\x9\x9\11\x9\x9\x9\74\x74\x64\x3e\x3c\163\x74\162\x6f\x6e\147\76\74\163\160\141\x6e\40\x63\x6c\x61\163\x73\x3d\x22\155\157\x5f\x70\x72\145\155\x69\x75\155\137\x66\145\x61\x74\165\162\145\42\76\52\x3c\x2f\163\x70\141\156\x3e\x45\155\141\x69\x6c\x3a\x3c\x2f\163\x74\x72\157\x6e\x67\x3e\x3c\57\x74\144\x3e\xd\xa\x9\x9\x9\x9\11\x9\x9\74\x74\144\76\74\151\x6e\x70\165\164\40\x63\x6c\x61\163\163\75\42\155\157\137\164\141\142\154\145\137\x74\145\x78\164\142\x6f\170\x22\x20\x74\171\160\x65\75\42\145\x6d\x61\151\x6c\42\40\156\x61\155\x65\x3d\x22\145\x6d\141\151\x6c\42\xd\12\x9\11\11\x9\x9\11\x9\x9\162\145\x71\x75\151\162\145\x64\x20\x70\x6c\x61\x63\x65\150\157\x6c\144\x65\x72\75\42\x70\x65\162\163\x6f\156\100\x65\x78\141\x6d\x70\154\x65\56\143\x6f\x6d\42\15\12\x9\x9\11\11\x9\x9\11\x9\x76\x61\x6c\165\145\75\42";
        echo wp_kses($bC->mo_rest_api_authentication_get_option("\155\x6f\x5f\141\x70\151\x5f\x61\165\x74\150\145\156\164\151\x63\141\164\x69\x6f\x6e\137\x61\144\155\151\x6e\x5f\145\155\x61\x69\x6c"), \mo_rest_get_valid_html());
        echo "\x22\x20\x2f\x3e\74\57\x74\x64\76\15\12\x9\11\x9\x9\x9\11\74\57\164\x72\76\15\xa\x9\11\x9\x9\11\x9\x3c\x74\144\x3e\74\x73\164\x72\x6f\156\x67\x3e\x3c\x73\x70\x61\156\x20\x63\x6c\141\x73\163\x3d\x22\155\x6f\137\160\x72\x65\x6d\x69\x75\155\x5f\x66\145\x61\x74\165\x72\x65\42\76\52\x3c\x2f\x73\x70\141\x6e\76\120\141\x73\x73\167\x6f\x72\144\72\x3c\x2f\163\164\162\157\x6e\x67\x3e\74\x2f\164\x64\76\xd\xa\x9\11\x9\x9\x9\11\x3c\x74\144\x3e\74\151\x6e\x70\165\164\40\143\x6c\x61\163\163\x3d\x22\155\157\137\164\x61\x62\154\145\137\x74\145\170\164\x62\x6f\x78\42\40\162\x65\161\165\151\x72\x65\x64\x20\164\x79\160\x65\x3d\42\x70\x61\x73\x73\x77\157\162\144\x22\15\xa\11\x9\11\x9\x9\x9\x9\156\x61\155\x65\75\x22\160\141\163\x73\x77\157\x72\144\x22\x20\160\154\x61\x63\x65\150\157\x6c\144\145\x72\75\x22\x43\150\157\157\x73\x65\x20\171\x6f\x75\x72\x20\160\x61\x73\x73\x77\x6f\x72\x64\42\40\57\76\74\x2f\164\x64\76\xd\12\x9\11\x9\x9\x9\x9\74\57\x74\x72\76\xd\12\x9\x9\x9\x9\11\x9\x3c\164\x72\x3e\xd\xa\11\x9\11\11\x9\11\11\x3c\x74\144\x3e\46\x6e\142\163\x70\x3b\x3c\57\164\x64\x3e\15\xa\11\x9\11\x9\11\x9\x9\74\x74\x64\76\x3c\x69\156\160\165\164\x20\164\x79\160\x65\x3d\x22\x73\165\142\155\x69\164\42\x20\x6e\x61\155\x65\75\x22\x73\165\142\155\x69\164\x22\xd\xa\11\11\x9\11\11\11\x9\11\x63\x6c\x61\163\163\x3d\x22\142\165\x74\x74\x6f\x6e\40\x62\x75\164\164\x6f\156\x2d\160\162\151\x6d\x61\162\x79\x20\142\x75\x74\164\157\x6e\55\154\x61\x72\147\145\42\40\57\x3e\46\x6e\142\x73\x70\73\46\156\142\163\160\x3b\46\x6e\x62\x73\x70\x3b\46\156\x62\x73\160\x3b\x26\x6e\x62\163\160\73\46\156\142\x73\x70\73\46\x6e\x62\x73\x70\x3b\x26\x6e\x62\x73\x70\73\x3c\x2f\x66\x6f\162\x6d\76\xd\xa\xd\12\x9\11\x9\11\x9\11\11\11\x3c\x66\157\x72\155\40\151\144\x3d\42\155\x6f\x5f\x61\x70\x69\137\141\165\x74\150\145\156\x74\151\143\141\x74\151\x6f\x6e\x5f\143\x68\x61\x6e\147\145\137\145\x6d\141\x69\x6c\137\146\157\162\x6d\x22\x20\x6d\145\x74\x68\157\x64\x3d\x22\160\x6f\163\x74\x22\x20\x61\x63\x74\x69\x6f\156\75\42\42\x3e\15\12\x9\11\x9\x9\11\11\x9\x9\11\x3c\151\156\160\x75\x74\x20\164\x79\160\145\75\42\150\151\x64\x64\145\156\42\x20\156\x61\155\145\75\42\157\x70\x74\x69\157\156\x22\x20\166\x61\154\165\145\75\x22\155\x6f\x5f\141\160\151\137\141\165\164\150\x65\156\x74\151\143\141\x74\x69\157\156\137\x63\150\x61\x6e\x67\x65\137\x65\155\x61\x69\154\x22\x20\57\x3e\15\12\11\x9\11\x9\11\x9\x9\11\x9";
        wp_nonce_field("\155\x6f\x5f\141\x70\x69\x5f\x61\165\164\x68\x65\x6e\x74\x69\x63\141\x74\x69\157\156\137\x63\x68\x61\156\x67\x65\137\x65\x6d\x61\151\154", "\155\157\137\141\160\151\137\141\x75\164\x68\145\156\x74\x69\143\141\x74\151\x6f\x6e\137\x63\x68\141\x6e\x67\145\137\x65\x6d\141\x69\x6c\x5f\156\x6f\x6e\143\x65");
        echo "\11\x9\11\x9\x9\11\11\x9\74\57\x66\157\162\155\x3e\x3c\x2f\164\144\76\xd\12\x9\x9\x9\x9\11\11\11\74\x2f\x74\144\x3e\15\12\x9\11\x9\11\11\11\74\x2f\164\x72\x3e\xd\xa\x9\11\11\x9\x9\74\x2f\x74\x61\142\154\145\x3e\15\xa\11\11\x9\x9\74\x2f\x64\151\166\x3e\15\12\11\x9\x9\74\x2f\x64\151\x76\x3e\15\xa\15\xa\x9\11\x3c\x21\55\x2d\40\74\x66\157\x72\155\40\156\x61\x6d\x65\x3d\x22\x66\x22\x20\155\x65\x74\x68\157\144\x3d\x22\160\157\163\x74\42\x20\x61\143\x74\x69\x6f\x6e\75\x22\42\40\151\144\x3d\42\x6d\x6f\137\141\x70\x69\x5f\141\165\x74\x68\x65\x6e\x74\151\143\x61\x74\151\x6f\x6e\137\146\x6f\x72\147\x6f\164\160\141\163\163\167\157\x72\x64\x5f\x66\157\162\155\x22\x3e\15\12\x9\11\x9\74\x69\156\160\x75\164\40\164\x79\x70\145\x3d\x22\150\151\x64\x64\145\x6e\42\x20\156\x61\x6d\145\x3d\42\157\160\x74\x69\x6f\156\x22\40\x76\x61\154\x75\x65\x3d\x22\x6d\x6f\x5f\x61\160\151\x5f\x61\165\x74\x68\x65\x6e\x74\151\143\141\164\151\157\156\137\146\x6f\x72\147\157\164\x5f\160\141\x73\x73\x77\157\x72\x64\137\x66\x6f\162\155\137\157\160\x74\x69\157\x6e\42\57\x3e\xd\xa\11\x9\x9";
        echo "\11\x9\74\x2f\x66\x6f\x72\x6d\76\x20\55\55\x3e\15\12\x9\x9\x3c\163\143\162\151\160\x74\76\15\12\11\x9\x9\152\121\165\x65\162\x79\x28\42\x61\x5b\150\x72\x65\146\75\x5c\x22\x23\x6d\157\137\141\x70\151\137\141\165\x74\150\145\156\164\151\143\x61\x74\x69\157\x6e\137\x66\157\162\x67\x6f\164\137\x70\x61\163\163\x77\x6f\x72\144\137\x6c\151\x6e\153\134\42\135\x22\x29\x2e\x63\154\151\143\153\50\146\x75\x6e\143\x74\151\x6f\156\x28\51\x7b\xd\xa\11\11\x9\11\167\x69\x6e\144\157\x77\x2e\157\160\145\156\x28\x27\150\164\x74\160\x73\x3a\x2f\57\x6c\x6f\x67\151\x6e\x2e\170\145\x63\165\162\151\146\x79\56\x63\157\x6d\x2f\155\157\x61\163\x2f\x69\x64\x70\57\162\x65\x73\145\164\x70\141\x73\163\x77\157\162\144\47\51\x3b\xd\12\11\11\11\x9\x2f\57\x6a\x51\165\145\162\x79\50\42\x23\155\x6f\137\x61\160\x69\x5f\141\x75\x74\150\145\x6e\164\x69\x63\141\164\151\157\x6e\137\146\x6f\x72\x67\x6f\164\x70\x61\163\x73\167\x6f\x72\144\137\146\x6f\x72\x6d\x22\51\x2e\x73\165\x62\155\151\164\50\x29\x3b\15\12\11\11\11\175\x29\73\15\xa\x9\11\74\57\x73\143\x72\151\160\164\76\xd\12\xd\xa\11\x9";
    }
    public function show_customer_info()
    {
        global $bC;
        echo "\x9\x9\x3c\x64\x69\x76\40\143\154\x61\x73\x73\75\x22\x6d\x6f\x5f\x74\x61\142\154\145\137\154\141\171\157\165\164\42\40\x3e\xd\xa\x9\x9\11\74\150\62\76\x54\x68\141\x6e\153\x20\x79\x6f\165\40\146\157\x72\40\162\x65\x67\151\x73\x74\x65\162\x69\x6e\x67\40\x77\151\x74\x68\x20\155\x69\x6e\151\117\x72\141\x6e\x67\145\x2e\74\57\x68\x32\x3e\15\xa\x9\11\11\x3c\x74\x61\142\x6c\145\x20\x62\x6f\162\x64\x65\162\x3d\x22\x31\42\40\163\x74\x79\x6c\x65\75\42\142\141\x63\x6b\x67\162\x6f\x75\x6e\144\55\143\157\154\157\162\72\x23\x46\x46\x46\x46\106\106\73\x20\x62\x6f\162\x64\145\x72\72\61\x70\170\40\163\157\154\151\x64\x20\x23\103\x43\103\103\x43\x43\x3b\40\x62\x6f\162\144\x65\x72\x2d\x63\157\154\154\x61\160\163\x65\x3a\x20\143\x6f\x6c\x6c\x61\x70\x73\145\73\40\x70\141\144\x64\x69\x6e\147\x3a\60\x70\x78\x20\60\160\170\x20\60\x70\x78\x20\61\60\160\x78\73\40\x6d\x61\x72\147\x69\x6e\72\x32\x70\170\73\x20\167\151\144\164\150\x3a\x38\x35\x25\x22\x3e\15\xa\x9\x9\11\74\x74\x72\x3e\15\12\x9\11\11\x9\x3c\164\x64\40\x73\x74\171\154\145\x3d\x22\167\151\x64\x74\150\72\64\65\x25\73\x20\x70\x61\144\x64\x69\x6e\147\x3a\x20\x31\60\160\170\x3b\42\x3e\x6d\x69\x6e\151\117\x72\141\x6e\147\x65\x20\x41\143\x63\157\165\156\x74\40\x45\x6d\141\x69\154\x3c\x2f\x74\x64\x3e\15\xa\11\11\x9\11\x3c\164\x64\40\x73\164\171\154\x65\75\x22\x77\x69\144\164\x68\x3a\65\65\x25\73\40\160\x61\144\x64\151\x6e\x67\72\40\61\x30\160\170\73\x22\x3e";
        echo wp_kses($bC->mo_rest_api_authentication_get_option("\155\x6f\x5f\x61\160\151\x5f\141\165\164\150\x65\156\x74\151\143\x61\x74\151\x6f\156\x5f\x61\144\155\x69\156\x5f\145\155\141\151\x6c"), \mo_rest_get_valid_html());
        echo "\74\57\164\x64\x3e\xd\12\x9\x9\11\74\x2f\x74\x72\x3e\xd\12\11\x9\11\x3c\x74\x72\76\15\12\x9\x9\11\x9\x3c\164\x64\40\163\x74\171\x6c\x65\75\x22\167\x69\x64\164\150\x3a\x34\x35\x25\x3b\40\160\141\x64\144\151\x6e\147\72\x20\x31\60\x70\x78\x3b\42\76\x43\165\163\x74\157\x6d\x65\162\40\111\x44\74\x2f\x74\x64\x3e\15\12\11\x9\11\x9\x3c\164\x64\x20\x73\x74\x79\x6c\x65\75\x22\167\151\x64\x74\150\x3a\x35\x35\x25\73\40\160\x61\x64\144\151\x6e\147\x3a\40\61\x30\x70\x78\73\42\76";
        echo wp_kses($bC->mo_rest_api_authentication_get_option("\155\157\x5f\141\x70\151\137\x61\165\164\150\145\156\x74\151\143\x61\164\151\157\x6e\x5f\x61\144\155\151\x6e\137\x63\165\x73\164\157\x6d\145\162\x5f\153\145\171"), \mo_rest_get_valid_html());
        echo "\x3c\57\x74\x64\76\xd\12\11\x9\11\x3c\x2f\x74\162\76\15\xa\x9\x9\11\x3c\57\x74\x61\x62\154\145\x3e\xd\xa\11\x9\11\x3c\x62\x72\40\x2f\x3e\74\x62\162\40\x2f\76\xd\12\xd\xa\11\11\74\164\141\142\154\x65\76\xd\12\x9\x9\74\164\162\76\xd\xa\x9\x9\x3c\x74\x64\76\15\12\x9\x9\74\146\157\162\x6d\x20\156\141\x6d\145\75\x22\146\61\42\x20\155\145\164\x68\157\144\75\x22\x70\x6f\x73\164\x22\40\141\x63\x74\151\157\x6e\x3d\42\x22\x20\x69\x64\x3d\42\155\x6f\x5f\x61\x70\151\x5f\x61\165\164\150\145\x6e\x74\151\x63\x61\164\151\157\156\137\147\x6f\164\157\137\x6c\x6f\147\151\x6e\137\x66\x6f\x72\155\42\76\xd\12\11\11\x9\x3c\151\x6e\160\x75\x74\40\x74\171\160\145\x3d\42\x68\151\x64\144\x65\x6e\x22\x20\166\141\154\x75\145\75\42\155\x6f\x5f\x61\x70\151\x5f\143\x68\x61\x6e\147\x65\137\155\151\156\x69\157\162\x61\x6e\x67\x65\42\x20\x6e\141\155\145\x3d\x22\x6f\x70\164\x69\157\x6e\42\57\76\15\xa\x9\x9\11";
        wp_nonce_field("\x6d\x6f\137\141\160\x69\x5f\143\x68\141\156\x67\x65\137\155\x69\156\x69\x6f\162\x61\156\147\145", "\x6d\157\x5f\141\160\x69\x5f\x63\150\x61\x6e\147\145\x5f\x6d\x69\156\151\157\162\x61\x6e\x67\145\x5f\156\157\x6e\x63\x65");
        echo "\x9\x9\x9\74\x69\156\x70\165\164\x20\164\171\160\x65\x3d\42\x73\x75\x62\155\x69\x74\x22\x20\166\141\x6c\x75\x65\x3d\42\103\150\x61\x6e\147\x65\x20\101\143\x63\x6f\165\x6e\x74\x22\40\x63\154\141\x73\x73\75\x22\x62\165\164\x74\157\156\40\x62\165\164\x74\157\x6e\x2d\x70\162\151\x6d\x61\x72\x79\40\x62\x75\164\164\x6f\x6e\55\154\141\162\x67\x65\x22\x2f\76\15\xa\11\x9\74\x2f\146\157\x72\x6d\76\15\xa\x9\11\74\57\164\x64\x3e\x3c\164\x64\x3e\xd\xa\x9\x9\x3c\141\x20\x68\162\145\146\x3d\42";
        echo wp_kses(add_query_arg(array("\164\141\x62" => "\x6c\151\x63\x65\156\x73\x69\156\147"), htmlentities(sanitize_text_field(wp_unslash(isset($_SERVER["\x52\x45\x51\x55\x45\123\x54\137\125\x52\x49"]) ? $_SERVER["\122\x45\121\x55\x45\x53\x54\137\125\122\111"] : '')))), \mo_rest_get_valid_html());
        echo "\x22\x3e\74\x69\156\160\x75\164\40\x74\x79\160\x65\75\42\142\x75\164\164\157\x6e\42\x20\143\x6c\x61\x73\163\x3d\42\x62\x75\164\164\x6f\x6e\40\142\165\164\x74\x6f\x6e\x2d\x70\162\151\x6d\x61\162\171\40\x62\165\164\x74\x6f\x6e\55\154\141\x72\147\145\x22\x20\166\x61\x6c\165\x65\75\42\103\150\x65\x63\153\40\x4c\x69\x63\x65\156\x73\x69\x6e\x67\40\120\154\x61\x6e\x73\x22\57\x3e\x3c\57\x61\76\15\12\11\x9\x3c\57\164\x64\x3e\15\12\11\11\74\x2f\164\x72\x3e\xd\xa\11\11\x3c\x2f\x74\x61\142\x6c\145\76\xd\12\11\11\74\x62\162\40\57\76\xd\xa\x9\x9\74\57\x64\151\166\76\xd\12\11\11";
    }
    public function mo_api_auth_lp()
    {
        $ga = isset($_POST["\155\x6f\x5f\141\160\x69\137\141\165\x74\x68\x65\156\x74\151\x63\141\164\151\x6f\156\x5f\x6c\151\x63\145\156\x73\145\x5f\153\145\x79"]) ? $_POST["\x6d\x6f\137\141\x70\x69\x5f\x61\165\164\x68\145\x6e\164\151\x63\x61\x74\x69\x6f\x6e\x5f\x6c\x69\x63\x65\156\x73\x65\137\x6b\x65\x79"] : '';
        echo "\x9\x9\x3c\x64\x69\x76\x20\143\x6c\x61\x73\163\x3d\42\155\x6f\x5f\164\141\142\x6c\145\x5f\154\141\171\x6f\x75\x74\x22\x3e\15\12\x9\11\x3c\142\x72\x3e\15\xa\x9\x9\x9\74\150\x33\x3e\x56\x65\162\x69\x66\x79\40\x79\157\165\162\40\x6c\151\143\x65\156\x73\x65\x20\133\40\x3c\163\160\x61\x6e\40\163\x74\171\x6c\x65\75\x22\x66\157\156\164\x2d\x73\x69\172\145\x3a\61\x33\x70\170\73\x66\157\x6e\x74\55\163\x74\171\x6c\145\x3a\x6e\x6f\x72\155\x61\x6c\73\42\76\x3c\141\x20\163\164\171\154\145\x3d\42\143\165\162\x73\x6f\x72\72\160\x6f\x69\156\164\145\162\73\42\x20\x68\162\145\146\x3d\x22\150\x74\164\160\163\x3a\x2f\57\154\157\x67\x69\x6e\56\170\145\x63\x75\x72\151\x66\171\x2e\143\157\x6d\x2f\x6d\157\141\x73\x2f\x6c\x6f\147\151\156\77\162\145\x64\x69\162\x65\143\164\125\162\154\x3d\150\x74\x74\x70\x73\72\x2f\x2f\154\157\x67\x69\x6e\56\170\x65\143\165\162\x69\146\171\x2e\x63\157\x6d\x2f\155\x6f\141\163\x2f\141\x64\155\x69\156\x2f\x63\x75\x73\164\157\x6d\145\x72\57\166\x69\145\x77\x6c\151\x63\145\156\163\x65\x6b\145\x79\163\42\x20\164\x61\162\147\145\164\75\42\137\x62\154\141\156\x6b\42\40\157\156\143\x6c\151\x63\153\x3d\x22\x67\x65\x74\154\151\143\x65\156\163\145\x6b\x65\x79\x73\50\51\42\40\x3e\103\x6c\151\x63\153\x20\x68\x65\162\145\x20\x74\157\x20\x76\x69\145\x77\40\171\157\165\162\x20\x6c\151\x63\x65\156\163\145\40\153\145\171\74\x2f\141\76\x3c\x2f\x73\x70\141\156\x3e\40\x5d\x3c\57\150\x33\76\15\xa\40\x20\x20\40\40\x20\x20\40\x20\40\40\40\74\x68\162\76\xd\12\11\11\x9\x3c\x66\x6f\162\155\40\x6e\141\155\x65\75\x22\x66\42\x20\x6d\145\164\x68\157\x64\x3d\x22\x70\x6f\163\164\42\x20\x61\x63\x74\151\157\x6e\75\42\x22\76\15\12\x9\11\11\x9\74\151\x6e\160\x75\x74\x20\164\171\160\x65\75\42\150\151\144\x64\145\156\x22\40\x6e\x61\155\x65\75\x22\x6f\x70\164\x69\x6f\x6e\x22\40\166\x61\x6c\x75\x65\x3d\42\x6d\x6f\137\141\160\151\137\141\165\164\150\145\x6e\164\x69\143\x61\164\x69\157\x6e\x5f\166\145\x72\151\146\171\137\x6c\x69\x63\x65\156\163\x65\42\40\57\76\xd\xa\11\11\11\11";
        wp_nonce_field("\x6d\x6f\137\141\x70\151\x5f\x61\x75\x74\150\145\x6e\x74\x69\143\141\164\x69\x6f\x6e\137\166\x65\x72\151\146\x79\137\154\151\x63\x65\156\x73\145", "\155\x6f\x5f\141\160\x69\137\x61\165\164\x68\145\156\x74\151\x63\141\x74\151\x6f\x6e\x5f\166\145\162\151\x66\x79\137\154\x69\143\145\156\163\x65\137\156\x6f\156\x63\x65");
        echo "\x9\x9\11\x9\x3c\x74\x61\142\154\145\x20\143\154\x61\x73\x73\75\x22\155\157\x5f\163\145\x74\164\x69\156\x67\x73\137\164\141\142\x6c\x65\42\x3e\15\12\11\11\x9\11\x9\74\164\162\76\15\12\x20\x20\x20\40\40\40\40\x20\x20\40\x20\40\x20\x20\40\40\40\40\x20\40\x20\x20\x20\40\74\160\76\74\142\x3e\74\x66\157\x6e\x74\40\x63\157\x6c\157\162\75\42\x23\x46\x46\60\x30\60\x30\42\x3e\52\x3c\x2f\x66\x6f\x6e\x74\x3e\x45\x6e\x74\145\162\x20\171\157\165\x72\40\154\151\143\x65\x6e\163\x65\40\153\145\171\40\164\157\x20\x61\143\164\x69\x76\x61\164\145\40\164\150\145\x20\160\154\165\147\151\156\x3a\74\57\142\x3e\74\x62\162\x3e\74\142\162\x3e\15\12\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\40\x20\40\40\40\40\40\40\40\x20\40\40\x20\40\40\x20\x20\x3c\151\156\160\x75\164\x20\x63\154\x61\163\x73\x3d\x22\x6d\157\137\164\x61\142\x6c\145\137\x74\x65\x78\164\142\157\x78\x22\x20\x72\145\161\165\151\x72\x65\144\40\x74\x79\x70\145\75\x22\164\x65\x78\x74\42\x20\x73\x74\x79\154\x65\75\x22\155\141\162\x67\x69\x6e\55\x6c\x65\146\x74\x3a\64\x30\160\170\x3b\x77\151\144\x74\150\x3a\x33\60\x30\160\170\73\x62\157\162\x64\145\162\x2d\x73\x74\x79\x6c\145\72\x73\157\154\151\x64\x3b\x62\x6f\162\x64\145\162\x2d\x63\x6f\154\157\x72\x3a\154\x69\147\x68\164\147\162\141\x79\42\40\x6e\x61\x6d\x65\x3d\42\x6d\157\x5f\141\160\151\137\141\165\164\x68\x65\156\x74\x69\x63\x61\164\x69\157\x6e\x5f\154\151\x63\x65\156\163\145\x5f\153\145\x79\x22\x20\x70\154\141\x63\145\x68\157\154\x64\x65\x72\x3d\x22\x45\x6e\x74\x65\x72\40\171\x6f\x75\162\x20\x6c\151\143\x65\156\163\145\x20\x6b\x65\171\x20\164\157\x20\x61\143\164\x69\x76\x61\164\145\40\x74\x68\145\40\160\154\165\x67\151\156\x22\x20\166\x61\x6c\165\x65\75\x22";
        echo $ga;
        echo "\42\40\57\x3e\x3c\57\164\144\x3e\xd\12\11\x9\11\x9\11\x3c\57\x74\162\76\15\12\x20\x20\x20\40\40\40\x20\x20\40\40\40\40\40\40\x20\40\x20\40\40\x20\40\40\40\x20\x3c\57\160\x3e\xd\12\15\xa\x20\x20\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\40\40\40\x20\40\74\x6f\x6c\x3e\xd\xa\x20\40\x20\40\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\40\40\40\40\x20\40\x20\40\40\x20\40\x20\74\154\151\x3e\x4c\x69\143\145\x6e\163\145\x20\x6b\x65\x79\40\171\x6f\x75\x20\x68\141\x76\145\40\x65\x6e\x74\145\x72\145\144\x20\150\145\x72\145\40\x69\163\40\x61\163\163\157\143\x69\x61\164\x65\x64\40\167\151\164\x68\40\x74\150\151\163\x20\x73\151\x74\x65\x20\151\156\163\164\x61\x6e\143\x65\56\x20\111\x6e\x20\146\165\x74\x75\162\145\54\x20\x69\x66\40\x79\x6f\165\40\x61\x72\x65\x20\162\145\x2d\x69\156\x73\164\x61\x6c\x6c\x69\x6e\x67\x20\164\x68\x65\x20\160\x6c\165\x67\x69\156\40\157\x72\40\x79\x6f\165\162\40\163\151\x74\145\x20\x66\157\162\x20\x61\156\171\x20\162\145\141\163\x6f\x6e\54\40\171\x6f\x75\x20\163\150\x6f\165\x6c\144\40\x64\145\x61\143\x74\151\166\x61\x74\145\40\x74\150\x65\40\x70\x6c\x75\x67\151\x6e\40\x66\x72\x6f\x6d\x20\164\x68\x65\40\143\165\x72\162\145\156\164\x20\167\x6f\x72\144\160\162\145\163\x73\x20\144\157\155\x61\x69\156\x2e\x20\111\x74\40\167\157\x75\154\144\40\x66\x72\x65\145\x20\171\x6f\165\x72\x20\x4c\151\x63\145\156\163\x65\x20\113\x65\x79\x20\x61\x6e\144\x20\x61\154\x6c\x6f\167\x20\x79\x6f\165\40\x74\157\x20\141\143\164\x69\x76\141\x74\145\x20\164\x68\x69\163\40\160\154\x75\147\x69\x6e\40\x6f\x6e\x20\x6f\x74\x68\x65\x72\x20\144\x6f\x6d\141\x69\156\x2f\x73\151\x74\145\x2e\74\57\x6c\x69\x3e\x3c\142\162\76\xd\12\x20\40\x20\40\40\40\40\x20\x20\x20\x20\40\40\40\40\40\x20\x20\40\x20\40\40\x20\40\x20\40\x20\40\74\x6c\151\76\74\x62\76\x54\x68\151\163\40\151\163\40\x6e\157\164\x20\141\40\144\x65\x76\145\154\x6f\160\x65\x72\47\x73\x20\154\151\143\x65\x6e\163\x65\56\74\x2f\x62\76\40\131\157\x75\40\x6d\x61\x79\x20\x6e\157\x74\x20\155\157\x64\151\146\171\40\x74\150\x65\40\x63\157\156\x74\x65\156\x74\x20\x6f\x72\40\141\156\171\x20\160\141\162\164\x20\164\150\145\162\x65\x6f\x66\54\x20\x65\170\x63\x65\x70\x74\40\x61\163\x20\145\170\160\x6c\x69\143\151\x74\154\171\x20\x70\145\x72\x6d\151\x74\164\145\144\x20\x75\x6e\x64\145\162\x20\x74\150\x69\x73\40\x70\154\165\147\151\156\56\40\115\141\153\151\156\147\40\141\156\x79\40\153\x69\156\144\40\157\146\x20\x63\x68\x61\156\x67\x65\x20\164\x6f\x20\x74\150\x65\x20\x70\x6c\165\x67\151\x6e\47\x73\x20\143\157\x64\x65\x20\155\x61\171\x20\x6d\141\x6b\145\40\x74\x68\145\40\x70\x6c\165\147\x69\156\x20\165\156\165\x73\141\142\x6c\x65\56\x3c\x2f\x6c\x69\x3e\xd\12\40\x20\40\40\40\x20\40\40\40\x20\40\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\x20\40\x3c\57\157\154\76\xd\12\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\x20\40\40\40\x20\x20\40\x20\40\x3c\160\x3e\74\142\76\x26\156\x62\x73\160\73\74\151\156\160\x75\164\40\163\x74\x79\154\145\75\42\155\141\162\147\151\156\x2d\154\x65\x66\x74\72\62\60\x70\170\x3b\x22\x20\162\x65\x71\165\151\162\145\x64\40\164\171\160\145\x3d\x22\143\x68\x65\x63\153\x62\157\x78\42\40\156\x61\x6d\145\75\x22\x6c\x69\x63\x65\156\163\x65\137\x63\x6f\x6e\x64\x69\x74\x69\x6f\156\x73\42\40\47\73\15\xa\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\40\40\x20\40\40\40\40\x20\40\x20\x65\143\x68\157\x20\47\x2f\76\x26\x6e\x62\163\160\73\46\156\142\x73\x70\73\111\x20\141\x63\143\x65\x70\x74\40\164\x68\x65\40\141\142\157\166\145\40\124\x65\x72\x6d\163\40\x61\156\144\40\103\x6f\156\x64\151\x74\x69\x6f\x6e\x73\x2e\74\x2f\160\76\xd\xa\x20\40\x20\40\40\40\40\40\x20\x20\x20\x20\40\40\40\x20\x20\40\40\x20\40\x20\x20\x20\74\x62\x72\x3e\15\12\x9\11\11\11\11\74\164\x72\x3e\xd\xa\x9\x9\11\11\11\x9\74\164\144\76\x26\x6e\x62\163\160\x3b\x3c\57\164\144\x3e\xd\xa\11\11\11\11\11\11\x3c\164\144\76\xd\xa\x9\x9\x9\11\11\11\x9\x3c\151\x6e\x70\165\164\40\x74\x79\160\145\75\x22\163\165\142\x6d\151\x74\42\x20\x6e\141\x6d\x65\x3d\42\163\x75\142\x6d\151\x74\42\40\x76\141\154\165\145\x3d\42\x41\x63\164\x69\x76\x61\164\x65\40\114\151\143\145\156\163\145\x22\40\x63\154\x61\x73\163\75\x22\x62\165\x74\164\x6f\156\x20\142\165\164\x74\157\156\55\x70\162\x69\x6d\x61\x72\x79\x20\142\x75\x74\164\x6f\156\55\x6c\x61\162\147\145\42\40\x2f\76\x26\x6e\142\163\160\x3b\46\156\x62\163\x70\73\x26\156\142\x73\x70\x3b\x26\x6e\142\x73\160\73\46\x6e\142\163\160\x3b\x26\x6e\x62\x73\x70\x3b\74\57\x66\157\x72\155\76\xd\xa\x9\x9\11\x9\x9\x9\x9\15\12\11\x9\11\11\x9\x9\11\74\x69\156\x70\x75\164\40\x74\x79\160\145\75\42\x62\165\164\164\157\156\x22\40\156\141\155\145\x3d\42\x63\x68\x61\156\147\145\x2d\x61\x63\143\157\165\x6e\x74\55\x62\165\x74\164\157\x6e\x22\40\x69\x64\x3d\x22\x6d\157\x5f\141\x70\151\137\141\x75\164\150\x65\156\x74\151\x63\141\164\x69\x6f\156\137\143\x68\141\x6e\x67\145\x5f\x61\143\x63\x6f\x75\156\x74\137\142\165\164\164\157\x6e\42\x20\x6f\156\x63\x6c\151\143\153\75\x22\x64\157\143\x75\155\x65\156\164\56\147\x65\x74\x45\154\x65\155\x65\x6e\164\x42\x79\x49\x64\x28\47\155\157\x5f\141\160\151\x5f\x61\x75\x74\x68\x65\156\x74\x69\143\141\x74\x69\x6f\156\137\147\x6f\164\x6f\x5f\154\157\x67\x69\x6e\x5f\146\x6f\162\x6d\x27\51\x2e\163\165\x62\155\x69\164\50\51\x3b\x22\x20\x76\141\x6c\x75\x65\75\x22\x42\141\143\x6b\42\40\143\x6c\x61\163\163\75\x22\x62\165\164\x74\157\156\x20\x62\165\x74\164\x6f\156\55\160\162\x69\155\x61\x72\171\x20\142\x75\x74\x74\157\x6e\55\154\x61\162\147\x65\42\x20\x2f\76\xd\12\15\12\11\11\x9\x9\11\11\11\74\x66\157\x72\x6d\x20\156\141\155\145\x3d\x22\146\x31\42\40\155\x65\x74\150\157\x64\x3d\42\160\157\163\164\42\40\x61\143\x74\x69\x6f\156\75\x22\x22\40\x69\144\x3d\x22\155\157\137\141\x70\x69\137\x61\x75\x74\150\145\156\x74\151\143\141\x74\151\157\156\137\147\x6f\164\x6f\137\154\x6f\x67\151\156\x5f\x66\157\162\x6d\x22\76\15\12\x9\x9\x9\11\x9\x9\11\11\x3c\151\156\160\x75\164\40\164\171\x70\x65\75\42\150\151\x64\144\x65\156\42\x20\166\x61\x6c\165\x65\75\42\x6d\157\x5f\141\x70\151\x5f\143\150\141\156\x67\145\137\x6d\151\156\151\x6f\162\x61\x6e\x67\x65\42\40\x6e\x61\155\x65\x3d\x22\x6f\x70\164\x69\157\156\x22\x2f\76\15\xa\x9\x9\x9\x9\11\11\11\x9";
        wp_nonce_field("\155\157\137\x61\x70\151\x5f\143\x68\141\x6e\x67\x65\137\155\151\x6e\151\157\162\x61\156\x67\145", "\155\157\x5f\141\160\151\x5f\x63\150\141\156\147\x65\137\x6d\151\x6e\x69\157\x72\x61\x6e\x67\145\137\x6e\157\156\x63\x65");
        echo "\x9\11\11\x9\11\x9\x9\x3c\x2f\x66\157\x72\155\x3e\xd\12\x9\11\11\11\x9\x9\74\57\164\144\x3e\xd\xa\x9\11\x9\x9\x9\74\x2f\164\x72\x3e\15\12\x9\11\x9\11\x9\x3c\x74\x72\x3e\74\164\144\x3e\x26\156\142\163\160\x3b\74\57\164\144\76\x3c\x74\x64\x3e\x3c\57\x74\x64\76\x3c\x2f\164\x72\x3e\15\12\11\x9\11\11\x9\74\164\162\76\74\x74\144\76\x26\x6e\x62\x73\x70\x3b\74\x2f\164\144\76\74\164\144\76\x3c\57\164\144\76\x3c\x2f\x74\162\76\xd\xa\11\x9\11\11\74\x2f\x74\141\142\x6c\x65\76\15\12\11\x9\x3c\57\x64\x69\x76\76\xd\xa\11\x9";
    }
}