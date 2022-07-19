<?php

function check_admin() {
    $ci = get_instance();
    $user_id = $ci->session->userdata('id');
    
    $user = $ci->db->get_where('user', ['id' => $user_id])->row();

    if ($user && $user->level == 1) {
        return true;
    }

    return false;
}