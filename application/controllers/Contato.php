<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Contato extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contato_model');
        $this->load->library('ultils');

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: X-Requested-With');
        header('Content-Type: application/json');
    }

    public function index($id = false)
    {
        $data = '';


        if (is_numeric($id)) {
            $data = $this->contato_model->get($id);
        } else {
            $data = $this->contato_model->get();
        }

        echo $this->ultils->toJson($data);
    }

    public function create()
    {
        $postdatas = json_decode(file_get_contents('php://input'));
        $required_parameters = array('nome', 'telefone', 'idoperadora');

        $retval = $this->validate($required_parameters, $postdatas);
        if ($retval == 1) {
            $return = $this->contato_model->create($postdatas);
            if ($return == true) {
                $array = array('code' => 1, 'sts' => true, 'val' => 'Dados salvos com sucesso!');
            } else {
                $array = array('code' => 0, 'sts' => false, 'val' => 'OOPs! Houve um erro ao tentar salvar os dados!');
            }
        } else {
            $array = array('sts' => false, 'val' => $retval);
        }
        echo json_encode($array);
    }

    public function update($id = false)
    {
        $postdatas = json_decode(file_get_contents('php://input'));
        $required_parameters = array('nome', 'telefone', 'idoperadora');

        if (is_numeric($id)) {
            if (!isset($id)) {
                $array = array('sts' => false, 'val' => 'Por favor informe o id para update!');
                return $array;
            } else {

                $retval = $this->validate($required_parameters, $postdatas);
                if ($retval == 1) {

                    $return = $this->contato_model->update($id, $postdatas);
                    if ($return == true) {
                        $array = array('sts' => true, 'val' => 'Dados atualizados com sucesso!');
                    } else {
                        $array = array('sts' => false, 'val' => 'OOPs! Houve um erro ao tentar atualizar os dados!');
                    }
                } else {

                    $array = array('sts' => false, 'val' => $retval);
                }
            }
        } else {
            $array = array('sts' => false, 'val' => 'Por favor informe o id para update!');
        }


        echo json_encode($array);
    }
    public function delete($id = false)
    {
        if (is_numeric($id)) {
            if (!isset($id)) {
                $array = array('sts' => false, 'val' => 'Por favor informe o id para delete!');
            } else {
                $return = $this->contato_model->delete($id);
                if ($return == true) {

                    $array = array('sts' => true, 'val' => 'Dado deletado com sucesso!');
                } else {
                    $array = array('sts' => false, 'val' => 'OOPs! Houve um erro ao tentar deletar dado!');
                }
            }
        } else {
            $array = array('sts' => false, 'val' => 'Por favor informe o id para delete!');
        }

        echo json_encode($array);
    }
    public function validate($required_parameters, $postdatas)
    {

        $error = array();
        foreach ($required_parameters as $field) {

            if (!isset($postdatas->$field)) {

                $error[] = $field;
            }
        }

        if (count($error) == 0) {
            return 1;
        } else {
            $count = (count($error) >= 2 ? 'são' : 'é');
            return implode(", ", $error) . ' ' . $count . ' requerido';;
        }
    }
}
