<?php

class Contato_model extends CI_Model
{
	private $table_name = 'contatos';

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
			$data = $this->db->get_where($this->table_name, array('id_contato' => $id))
				->first_row();
		}

		/*

        $this->db->select('*')
            ->from($this->table_name)
            ->join('operadoras', $this->table_name . '.idoperadora = operadoras.id_operadora')
            ->join('cores', $this->table_name . '.id_cor = cores.id_cor');
        if ($id == null) {
            $data = $this->db->get()->result();
        } else {
            $this->db
                ->where($this->table_name . '.id_contato = ' . $id);
            $data = $this->db->get()->first_row();
        }*/

		return $data;
	}

	public function create($data)
	{

		$data = array(
			'nome' => $data->nome,
			'telefone' => $data->telefone,
			'idoperadora' => intval($data->idoperadora),
			'id_cor' => intval($data->id_cor)
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
			'nome' => $updata->nome,
			'telefone' => $updata->telefone,
			'idoperadora' => intval($updata->idoperadora),
			'id_cor' => intval($updata->id_cor)
		);

		if ($this->db->update(
			$this->table_name,
			$data,
			array('id_contato' => $id)
		)) {
			return true;
		} else {
			return false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id_contato', $id)
			->delete($this->table_name);

		return $this->db->affected_rows() > 0 ? true : false;
	}
}
