<?php

class Operadora_model extends CI_Model
{
    private $table_name = 'operadoras';

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
            $data = $this->db->get_where($this->table_name, array('id_operadora' => $id))
                ->first_row();
        }
        return $data;
    }

    public function create($data)
    {

        $data = array(
            'operadora' => $data->operadora,
            'codigo' => $data->codigo,
            'id_categoria' => intval($data->id_categoria),
            'preco' => intval($data->preco)
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
            'operadora' => $updata->operadora,
            'codigo' => $updata->codigo,
            'id_categoria' => intval($updata->id_categoria),
            'preco' => intval($updata->preco)
        );

        if ($this->db->update(
            $this->table_name,
            $data,
            array('id_operadora' => $id)
        )) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->where('id_operadora', $id)
            ->delete($this->table_name);

        return $this->db->affected_rows() > 0 ? true : false;
    }
}
