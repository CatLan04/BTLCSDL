<?php
class Order extends Controller {
    public $ProductModel;
    public $OrderDetailModel;
    public $OrdersModel;
    
    public function __construct() {
        $this->ProductModel         = $this->model("ProductModels");
        $this->OrderDetailModel    = $this->model('OrderDetailModels');
        $this->OrdersModel          = $this->model('OrdersModels');
    }

    public function index() {
        $this->view('layouts/admin_layout', [
            'page' => 'order/index',
            'title' => 'Danh sách đơn hàng',
            'type' => 'qli',
        ]);
    }
}
?>