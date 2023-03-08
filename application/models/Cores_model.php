<?php

class Cores_model extends CI_Model
{
    private $table_name = 'cores';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($id = null)
    {

        if ($id == null) {
            $data = $this->db->get($this->table_name)->result();
        } else {
            $data = $this->db->get_where($this->table_name, array('id_cor' => $id))
                ->first_row();
        }
        return $data;
    }

    public function create($data)
    {

        $data = array(
            'cor' => $data->cor,
            'hex' => $data->hex
        );

        if ($this->db->insert($this->table_name, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function update($id, $updata)
    {
        $data = array(
            'cor' => $updata->cor,
            'hex' => $updata->hex
        );

        if ($this->db->update(
            $this->table_name,
            $data,
            array('id_cor' => $id)
        )) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->where('id_cor', $id)
            ->delete($this->table_name);

        return $this->db->affected_rows() > 0 ? true : false;
    }
}
