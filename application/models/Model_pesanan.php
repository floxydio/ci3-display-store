<?php

class Model_pesanan extends CI_Model
{
    public function showinvoice()
    {
        return $this->db->get('pesanan');
    }
}
