<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\CategoriesModel;
use App\Models\OfferingModel;

class Offering extends AdminController
{
    protected $offeringModel;

    public function __construct()
    {
        $this->offeringModel = new OfferingModel();
        $this->categoriesModel = new CategoriesModel();
    }

    public function index()
    {
        $categoryId = $this->request->uri->getSegment(4);
        if ($categoryId == '') {
            return redirect()->to(admin_url().'/categories');
        }
        $categoryData = $this->categoriesModel->get_categories_by_id($categoryId);

        $data = array_merge($this->data, [
            'title'       =>  $categoryData->name.' - '.trans('Offering'),
            'active_tab'  => 'offering',
            'categoryId'  => $categoryId
        ]);

        // Paginations
        $paginate = $this->offeringModel->DataPaginations($categoryId);
        $data['offering'] =   $paginate['offering'];

        $data['paginations'] =  $paginate['pager']->Links('default', 'custom_pager');

        return view('admin/categories/offering', $data);
    }

    public function saved_offering_post()
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
            'category_id' => [
               'label'  => trans('category'),
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
                if ($this->offeringModel->update_offering($id)) {
                    $this->session->setFlashData('success', trans("msg_updated"));
                    return redirect()->to($this->agent->getReferrer());
                } else {
                    $this->session->setFlashData('error', trans("msg_error"));
                    return redirect()->to($this->agent->getReferrer());
                }
            } else {
                if ($this->offeringModel->add_offering()) {
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

    public function delete_offering_post()
    {
        $id = $this->request->getVar('id');

        if ($this->offeringModel->delete_offering($id)) {
            $this->session->setFlashData('success', trans("msg_suc_deleted"));
        } else {
            $this->session->setFlashData('error', trans("msg_error"));
        }
    }

    //activate inactivate offering
    public function activate_inactivate_offering()
    {
        $action = $this->request->getVar('action');

        $status = 1;
        if ($action == "inactivate") {
            $status = 0;
        }
        $data = array(
            'status' => $status
        );
        return $this->offeringModel->update(null, $data);
    }
}
