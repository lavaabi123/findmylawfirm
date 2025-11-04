<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\CategoriesModel;

class Categories extends AdminController
{
    protected $categoriesModel;

    public function __construct()
    {
        $this->categoriesModel = new CategoriesModel();
    }

    public function index()
    {
        $data = array_merge($this->data, [
            'title'     => trans('Categories'),
            'active_tab'     => 'categories',
        ]);

        // Paginations
        $paginate = $this->categoriesModel->DataPaginations();
        $data['categories'] =   $paginate['categories'];

        $data['paginations'] =  $paginate['pager']->Links('default', 'custom_pager');


        return view('admin/categories/categories', $data);
    }

    public function saved_categories_post()
    {

        $validation =  \Config\Services::validation();

        //validate inputs
        $rules = [
            'name' => [
                'label'  => trans('name'),
                'rules'  => 'required|max_length[100]',
                'errors' => [
                    'required' => trans('form_validation_required'),
                    'max_length' => trans('form_validation_max_length'),
                ],
            ],
        ];

        if ($this->validate($rules)) {
            $id = $this->request->getVar('id');
            if (!empty($id)) {
                if ($this->categoriesModel->update_categories($id)) {
                    $this->session->setFlashData('success', trans("msg_updated"));
                    return redirect()->to($this->agent->getReferrer());
                } else {
                    $this->session->setFlashData('error', trans("msg_error"));
                    return redirect()->to($this->agent->getReferrer());
                }
            } else {
                if ($this->categoriesModel->add_categories()) {
                    $this->session->setFlashData('success', trans("msg_suc_added"));
                    return redirect()->to($this->agent->getReferrer());
                } else {
                    $this->session->setFlashData('error', trans("msg_error"));
                    return redirect()->to($this->agent->getReferrer());
                }
            }
        } else {
            $this->session->setFlashData('errors_form', $validation->listErrors());
            return redirect()->back()->withInput()->with('error', $validation->getErrors());
        }
    }

    public function delete_categories_post()
    {
        $id = $this->request->getVar('id');

        if ($this->categoriesModel->delete_categories($id)) {
            $this->session->setFlashData('success', trans("msg_suc_deleted"));
        } else {
            $this->session->setFlashData('error', trans("msg_error"));
        }
    }

    //activate inactivate countries
    public function activate_inactivate_categories()
    {
        $action = $this->request->getVar('action');

        $status = 1;
        if ($action == "inactivate") {
            $status = 0;
        }
        $data = array(
            'status' => $status
        );
        return $this->categoriesModel->update(null, $data);
    }
}
